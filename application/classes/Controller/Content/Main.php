<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 18.03.13
 * Time: 16:14
  */ 
class Controller_Content_Main extends Controller_Content {

	public function action_index(){
		$this->template->title = 'О системе управления сайтом';
		$this->template->content = View::factory('content/about');
	}

}
