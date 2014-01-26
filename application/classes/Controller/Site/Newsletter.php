<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 09.04.13
 * Time: 13:17
 */
class Controller_Site_Newsletter extends Controller_Site {
	public $template = 'site/newsletter';

	public function action_index() {
		if ($_POST) {
			$data = Arr::extract($_POST, array('first_name', 'last_name', 'email', 'title', 'country', 'city', 'street', 'postal_code'));

			$sub = ORM::factory('Subscription');
			$sub->values($data);
			try {
				$sub->save();

				$this->redirect('newsletter/success');
			} catch (Kohana_ORM_Validation_Exception $e) {
				$this->template->errors = $e->errors('validation');
			}
			$this->template->data = $data;
		}
		$this->template->article = ORM::factory('Page')->where('url', '=', 'newsletter')->find();
	}

	public function action_success() {
		$this->template->set_filename('site/article');

		$this->template->article = array(
			'title' => 'Рассылка',
			'text' => '<p><b>Спасибо!</b> Вы подписаны на рассылку!</p>'
		);
	}
}
