<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 24.11.13
 * Time: 15:42
  */ 
class Model_MenuItem extends ORM {
    protected $_table_name = 'menu_items';

    protected $_has_many = array(
        'sections' => array(
            'model' => 'Section',
            'foreign_key' => 'menu_id',
        ),
    );

	public function labels() {
		return array(
			'title' => 'Заголовок',
		);
	}
	
	public function rules() {
		return array(
			'title' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('title', ':value')),
			),
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
