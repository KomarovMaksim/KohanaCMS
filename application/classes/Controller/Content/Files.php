<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 20.03.13
 * Time: 14:42
  */ 
class Controller_Content_Files extends Controller_Content {

	public function before(){
		parent::before();

		$this->template->styles[] = '/assets/content/css/jquery-ui-1.10.2.min.css';
		$this->template->styles[] = '/assets/content/elfinder/css/elfinder.min.css';

		$this->template->scripts[] = '/assets/content/js/jquery-ui-1.10.2.min.js';
		$this->template->scripts[] = '/assets/content/elfinder/js/elfinder.min.js';
		$this->template->scripts[] = '/assets/content/elfinder/js/i18n/elfinder.ru.js';
	}

	public function action_index(){
		$this->template->title = 'Менеджер файлов';
		$this->template->content = ElFinder::instance()->options(array(
			'iframe' => TRUE
		))->render();
	}

}
