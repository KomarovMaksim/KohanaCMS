<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 28.03.13
 * Time: 13:07
 */
class Model_Section extends ORM {

	protected $_belongs_to = array(
		'parent' => array(
			'model' => 'Section',
			'foreign_key' => 'parent_id'
		),
		'menu_item' => array(
			'model' => 'MenuItem',
			'foreign_key' => 'menu_id'
		),
	);

	protected $_has_many = array(
		'subsections' => array(
			'model' => 'Section',
			'foreign_key' => 'parent_id'
		),
		'articles' => array(
			'model' => 'Article',
			'foreign_key' => 'section_id'
		),
		'links' => array(
			'model' => 'SectionLink',
			'foreign_key' => 'section_id',
		),
		'images' => array(
			'model' => 'SectionImage',
			'foreign_key' => 'section_id',
		),
	);

	public function rules() {
		return array(
			'title' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('title', ':value')),
			),
			'url' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('url', ':value')),
			),
		);
	}

	public function labels() {
		return array(
			'title' => 'Наименование',
			'text' => 'Текст',
			'menu_id' => 'Пункт меню',
			'section_id' => 'Родительский раздел',
			'url' => 'Значимая часть URL',
			'meta_title' => 'Тэг <title>',
			'meta_keywords' => 'meta keywords',
			'meta_description' => 'meta description'
		);
	}

	public function filters() {
		return array(
			'title' => array(
				array('strip_tags'),
				array('trim'),
			),
			'text' => array(
				array('trim'),
			),
			'url' => array(
				array('trim'),
				array('strip_tags'),
			),
			'meta_title' => array(
				array('strip_tags'),
				array('trim')
			),
			'meta_keywords' => array(
				array('strip_tags'),
				array('trim')
			),
			'meta_descriptions' => array(
				array('strip_tags'),
				array('trim')
			),

		);
	}

	public function get_url(){
		return '/sections/'. $this->url .'.html';
	}
}
