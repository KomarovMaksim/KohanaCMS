<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 23.11.13
 * Time: 17:37
  */ 
class Model_Article extends ORM {

	protected $_belongs_to = array(
		'section' => array(
			'model' => 'Section',
			'foreign_key' => 'section_id'
		),
	);

	protected $_has_many = array(
		'links' => array(
			'model' => 'ArticleLink',
			'foreign_key' => 'article_id',
		),
		'images' => array(
			'model' => 'ArticleImage',
			'foreign_key' => 'article_id',
		),
		'tags' => array(
			'model' => 'Tag',
			'foreign_key' => 'article_id',
			'through' => 'articles_tags',
			'far_key' => 'tag_id'
		),
	);

	public function labels() {
		return array(
			'title' => 'Заголовок',
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
			'section_id' => array(
				array('not_empty'),
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
		return '/articles/'. $this->section->url . '/' . $this->url . '.html';
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
