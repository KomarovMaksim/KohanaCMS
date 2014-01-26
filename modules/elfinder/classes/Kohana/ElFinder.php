<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 20.03.13
 * Time: 15:06
  */ 
class Kohana_ElFinder {

	protected static $_instance;

	private $options = array();

	public static function instance(){

		if(!isset(ElFinder::$_instance)){
			ElFinder::$_instance = new ElFinder();
		}

		return ElFinder::$_instance;
	}

	public function options($options){
		$this->options = $options;
		return $this;
	}

	public function render(){
	  	if ($this->options['iframe'] === TRUE){
			return '<style> .row-fluid div{height:100%}</style><iframe style="border: none;" src="/content/elfinder" width="100%" height="85%" style="display:block; width:100%; height:85%"></iframe><script type="text/javascript">$(document).ready(function(){ $("iframe").css({height: $(window).height() - 100}); });</script>';
		} else {
			return View::factory('elfinder');
		}
	}

}
?>
