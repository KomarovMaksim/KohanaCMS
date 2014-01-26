<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 */

class Model_Settings extends ORM {
    
    protected $_table_name = 'settings';
    protected $_primary_key = 'id';
    protected $_db_group = 'default';
	
    public function rules()
    {
        return array(
        );
    }

    public function labels()
    {
        return array(
        );
    }

    public function filters()
    {
        return array(
        );
    }

} 
