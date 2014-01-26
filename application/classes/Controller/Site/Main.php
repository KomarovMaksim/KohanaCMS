<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 12.10.13
 * Time: 4:17
  */ 
class Controller_Site_Main extends Controller_Site {

	public $template = 'site/main';

	public function action_index(){
		$splash_shown = Session::instance()->get('splash');
		if (!$splash_shown){
			$splash = ORM::factory('Settings')->where('key', '=', 'splash')->find();
			if ($splash->loaded()){
				$this->template->splash = $splash->value;
				Session::instance()->set('splash', TRUE);
			}
		}
		$this->template->articles = ORM::factory('Article')->where('on_main', '=', TRUE)->where('enabled', '=', TRUE)->order_by('created', 'desc')->find_all();
	}
}
