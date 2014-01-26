<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 20.03.13
 * Time: 18:06
  */ 
class Controller_Content_ElFinder extends Controller_Content {
	public $template = 'elfinder_iframe';

	public function before(){
		parent::before();
		$this->template->scripts = array();
		$this->template->styles = array();

		$this->template->styles[] = '/assets/content/css/jquery-ui-1.10.2.min.css';
		$this->template->styles[] = '/assets/content/elfinder/css/elfinder.min.css';

		$this->template->scripts[] = '/assets/content/js/jquery-1.8.2.js';
		$this->template->scripts[] = '/assets/content/js/jquery-ui-1.10.2.min.js';
		$this->template->scripts[] = '/assets/content/elfinder/js/elfinder.full.js';
		$this->template->scripts[] = '/assets/content/elfinder/js/i18n/elfinder.ru.js';
	}

	public function action_index(){

		$options['ckeditor'] = empty($_POST) ? TRUE : FALSE;
		$options['multiple'] = isset($_POST['multiple']) ? $_POST['multiple'] : FALSE;
		$options['onlyURL'] = isset($_POST['onlyURL']) ? $_POST['onlyURL'] : TRUE;
		$options['folders'] = isset($_POST['folders']) ? $_POST['folders'] : FALSE;
		$options['sender'] = isset($_POST['sender']) ? $_POST['sender'] : FALSE;

		$this->template->options = $options;
	}

	public function action_single(){

		$options['ckeditor'] = FALSE;
		$options['multiple'] = FALSE;
		$options['onlyURL'] = TRUE;
		$options['folders'] = FALSE;
		$options['sender'] = $this->request->param('id');

		$this->template->options = $options;
	}

}
