<?php
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 15.03.13
 * Time: 2:34
  */ 
class Controller_Base extends Controller_Template {

	public function before(){
		parent::before();

		$this->template->styles = array();
		$this->template->scripts = array();

		$this->template->site_name = Kohana::$config->load('site')->get('site_name');
	}
}
