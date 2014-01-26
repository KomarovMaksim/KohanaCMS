<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 */

class Controller_Content_Auth extends Controller_Base {

	public $template = 'content/login';

	public function before() {
		parent::before();

		$this->template->scripts[] = '/assets/content/js/jquery-1.8.2.js';
		$this->template->scripts[] = '/assets/content/js/bootstrap.js';

		$this->template->styles[] = '/assets/content/css/bootstrap.css';
		$this->template->styles[] = '/assets/content/css/style.css';
	}

	public function action_index() {
		$this->action_login();
	}

	public function action_login() {
		$errors = array();
		if (Auth::instance()->logged_in('content')) {
			$this->redirect('content');
		}

		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array('username', 'password', 'remember'));
			$status = Auth::instance()->login($data['username'], $data['password'], (bool)$data['remember']);

			if ($status) {
				if (Auth::instance()->logged_in('content')) {
					$this->redirect('content');
				} else {
					$errors = array(Kohana::message('auth/user', 'no_content_role'));
				}
				$this->redirect('content/auth');
			}
			else {
				$errors = array(Kohana::message('auth/user', 'no_user'));
			}
		}
		$this->template->title = 'Вход';
		$this->template->page_title = 'Аутентификация';
		$this->template->errors = $errors;
	}

	public function action_logout() {
		if (Auth::instance()->logout()) {
			$this->redirect('content/auth');
		}
	}

}
