<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 08.12.13
 * Time: 1:25
  */ 
class Model_Category extends ORM {
    protected $_table_name = 'categories';
    
    protected $_has_many = array(
        'events' => array(
            'model' => 'Event',
            'foreign_key' => 'category_id',
        ),
    );
}
