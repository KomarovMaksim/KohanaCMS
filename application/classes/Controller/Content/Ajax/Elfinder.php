<?php
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 20.03.13
 * Time: 15:52
  */ 
class Controller_Content_Ajax_ElFinder extends Controller_Content_Ajax {
	public function action_cmd(){
		Kohana::load(Kohana::find_file('vendor', 'elfinder-2.0/connector'));
	}
}
