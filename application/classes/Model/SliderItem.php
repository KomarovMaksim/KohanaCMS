<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 11.04.13
 * Time: 17:33
  */ 
class Model_SliderItem extends ORM {
    protected $_table_name = 'slider_items';

	public function labels() {
		return array(
			'image' => 'Изображение',
		);
	}
	
	public function rules() {
		return array(
			'image' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('image', ':value')),
			)
		);
	}

}
