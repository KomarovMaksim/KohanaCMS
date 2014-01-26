<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 06.04.13
 * Time: 22:57
  */ 
class Model_Page extends ORM {

	public function labels() {
		return array(
			'title' => 'Заголовок',
			'text' => 'Текст',
			'url' => 'Значимая часть URL',
			'meta_title' => 'Тэг <title>',
			'meta_keywords' => 'meta keywords',
			'meta_description' => 'meta description'
		);
	}
	
	public function rules() {
		return array(
			'title' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('title', ':value')),
			)
		);
	}
	
	public function filters() {
		return array(
			'title' => array(
				array('trim'),
				array('strip_tags'),
			),
		);
	}


}
