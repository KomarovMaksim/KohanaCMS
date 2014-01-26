<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 06.04.13
 * Time: 23:02
 */
class Controller_Site_Pages extends Controller_Site {

	public $template = 'site/article';

	public function action_index() {
		$this->action_view();
	}

	public function action_view() {
		$url = $this->request->param('url');
		if (empty($url)) {
			$url = $this->request->param('id');
		}
		$page = ORM::factory('Page')->where('url', '=', $url)->where('enabled', '=', TRUE)->find();
		if ($page->loaded())
			$this->template->article = $page;
		else
			$this->redirect('/');
	}

}
