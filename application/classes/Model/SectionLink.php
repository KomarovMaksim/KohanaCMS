<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 24.11.13
 * Time: 15:43
  */ 
class Model_SectionLink extends ORM {
    protected $_table_name = 'section_links';
    
    protected $_belongs_to = array(
        'section' => array(
            'model' => 'Section',
            'foreign_key' => 'section_id'
        ),
    );

	public function labels() {
		return array(
			'title' => 'Заголовок',
			'link' => 'Ссылка',
		);
	}
	
	public function rules() {
		return array(
			'title' => array(
				array('not_empty'),
			),
			'link' => array(
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
			'link' => array(
				array('trim'),
				array('strip_tags'),
			),
		);
	}


}
