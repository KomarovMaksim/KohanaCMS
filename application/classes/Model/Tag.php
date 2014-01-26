<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 28.11.13
 * Time: 11:58
  */ 
class Model_Tag extends ORM {
    protected $_table_name = 'tags';
    
    protected $_has_many = array(
	    'articles' => array(
		    'model' => 'Article',
		    'foreign_key' => 'tag_id',
		    'through' => 'articles_tags',
		    'far_key' => 'article_id'
	    ),
	    'events' => array(
		    'model' => 'Event',
		    'foreign_key' => 'tag_id',
		    'through' => 'events_tags',
		    'far_key' => 'event_id'
	    ),
    );

	public function labels() {
		return array(
			'title' => 'Наименование',
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
