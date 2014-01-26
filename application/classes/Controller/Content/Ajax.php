<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 */

class Controller_Content_Ajax extends Controller_Ajax {
	public function before(){
		parent::before();
		
		if (!Auth::instance()->logged_in('content')){
			$result['errors'][] = 'Access denied';
			echo(json_encode($result));
			exit;
		}
				
	}
}
