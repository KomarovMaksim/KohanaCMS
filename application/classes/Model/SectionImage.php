<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 13.11.13
 * Time: 17:33
  */ 
class Model_SectionImage extends ORM {
    protected $_table_name = 'section_images';

	protected $_belongs_to = array(
		'section' => array(
			'model' => 'Section',
			'foreign_key' => 'section_id'
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
