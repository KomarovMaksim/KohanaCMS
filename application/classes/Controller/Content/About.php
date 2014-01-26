<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 13.05.13
 * Time: 16:42
  */
class Controller_Content_About extends Controller_Content {

	public function action_index(){

		$this->template->content = View::factory('content/about');
		$this->template->title = "О системe";
	}

}
