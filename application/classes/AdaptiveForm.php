<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 24.03.13
 * Time: 23:35
  */ 
class AdaptiveForm {

	protected $_options = array();
	protected $_fields = array();
	protected $_errors = array();
	protected $_operations = array();

	public static function factory($fields){
		return new AdaptiveForm($fields);
	}

	public function __construct($fields){
		foreach($fields as $name => $field){
			$this->_fields[] = View::factory('content/fields/'.$field['type'])
				->set('name', $name)
				->bind('title', $field['title'])
				->bind('value', $field['value'])
				->bind('options', $field['options']);
/*
		// Так должно быть
			$this->_fields[] = FormField::factory($field['type'])
				->name($name)
				->title($field['title']);
*/
		}
	}

	public function errors(&$errors){
		if (isset($errors)){
			$this->_errors = $errors;
		}
		return $this;
	}

	public function operations($operations){
		if (isset($operations)){
			$this->_operations = $operations;
		}
		return $this;
	}

	public function render(){
		return View::factory('content/adaptive_form')
			->bind('fields', $this->_fields)
			->bind('options', $this->_options)
			->bind('errors', $this->_errors)
			->bind('operations', $this->_operations);
	}

}
