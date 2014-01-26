<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 23.03.13
 * Time: 1:37
  */ 
class AJAXTable {
	protected $_options = array();
	protected $_pagination = array();

	public static function factory($url, $ajax_url){
		return new AJAXTable($url, $ajax_url);
	}

	public function __construct($url, $ajax_url){
		$this->_options['id'] = rand(10000,99999);
		$this->_options['url'] = $url;
		$this->_options['ajax_url'] = $ajax_url;
	}

	public function columns($columns){
		$this->_options['columns'] = $columns;
		return $this;
	}

	public function operations($operations){
		$this->_options['operations'] = $operations;
		return $this;
	}

	public function pagination($page, $per_page){
		$this->_pagination['page'] = $page;
		$this->_pagination['per_page'] = $per_page;
		return $this;
	}

	public function where($column, $op, $value){
		if (!isset($this->_options['where']))
			$this->_options['where'] = array();
		$this->_options['where'][] = compact('column', 'op', 'value');
		return $this;
	}

	public function render(){
		return View::factory('content/ajax_table')
			->bind('options', $this->_options)
			->bind('pagination', $this->_pagination);
	}

}
