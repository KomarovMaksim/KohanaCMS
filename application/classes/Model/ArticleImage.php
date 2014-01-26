<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 13.11.13
 * Time: 17:33
  */ 
class Model_ArticleImage extends ORM {
    protected $_table_name = 'article_images';

	protected $_belongs_to = array(
		'article' => array(
			'model' => 'Article',
			'foreign_key' => 'article_id'
		),
	);

	public function labels() {
		return array(
			'image' => 'Изображение',
		);
	}
	
	public function rules() {
		return array(
			'image' => array(
				array('not_empty'),
			)
		);
	}

}
