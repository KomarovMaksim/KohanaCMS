<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 23.11.13
 * Time: 17:37
  */
class Model_Event extends ORM {

	protected $_belongs_to = array(
		'category' => array(
			'model' => 'Category',
			'foreign_key' => 'category_id'
		),
	);

	protected $_has_many = array(
		'links' => array(
			'model' => 'EventLink',
			'foreign_key' => 'event_id',
		),
		'images' => array(
			'model' => 'EventImage',
			'foreign_key' => 'event_id',
		),
		'tags' => array(
			'model' => 'Tag',
			'foreign_key' => 'event_id',
			'through' => 'events_tags',
			'far_key' => 'tag_id'
		),
	);

	public function labels() {
		return array(
			'title' => 'Заголовок',
			'created' => 'Дата',
			'section_id' => 'Раздел',
			'short_text' => 'Краткий текст',
			'text' => 'Текст',
			'image' => 'Изображение',
			'url' => 'Значимая часть URL',
			'on_main' => 'На главной',
			'meta_title' => 'Тэг <title>',
			'meta_keywords' => 'meta keywords',
			'meta_description' => 'meta description'
		);
	}

	public function rules() {
		return array(
			'title' => array(
				array('not_empty'),
			),
			'category_id' => array(
				array('not_empty'),
			),
			'created' => array(
				array('not_empty'),
				array('date'),
			),
		);
	}

	public function filters() {
		return array(
			'title' => array(
				array('trim'),
				array('strip_tags'),
			),
			'short_text' => array(
				array('trim'),
				array('strip_tags'),
			),
		);
	}

	// Заголовок статьи
	public function get_title(){
		return $this->title;
	}

	// Все ссылки должны формироваться вызовом этой функции
	public function get_url(){
		return '/events/'. $this->url . '.html';
	}

	public function delete(){
		$this->remove('tags');
		parent::delete();
	}

	public function get_tags_titles(){
	    $tags = $this->tags->find_all();
		$titles = array();
		foreach($tags as $tag){
			$titles[] = $tag->title;
		}
		return implode(', ', $titles);
	}

}
