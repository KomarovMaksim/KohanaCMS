<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 */

class Controller_Content_Settings extends Controller_Content {

	public function action_index() {
		$user = Auth::instance()->get_user();
		$email = $user->email;

		$option = ORM::factory('Settings')->where('key', '=', 'reminder.email')->find();
     	$reminder = $option->loaded() ? $option->value : '';

//		$option = ORM::factory('Settings')->where('key', '=', 'news.amount')->find();
//		$items_per_page = $option->loaded() ? (int)$option->value : '';

//		$option = ORM::factory('Settings')->where('key', '=', 'template.season')->find();
//		$season = $option->loaded() ? $option->value : '';

		if (isset($_POST['submit'])) {
			$newpass = $_POST['newpass'];
			$confpass = $_POST['confpass'];
			$email = $_POST['email'];
//			$items_per_page = $_POST['items_per_page'];
//			$season = $_POST['season'];
    		$reminder = $_POST['reminder'];

			$db = Database::instance();
			$db->begin();
			try {
				$user->email = $email;
				if (!empty($newpass) || !empty($confpass)) {
					if ($newpass == $confpass) {
						$user->password = $newpass;
					}
					else {
						$errors[] = 'Некорректно введен подтверждающий пароль';
						throw new Exception();
					}
				}
				$user->save();
				if(!empty($reminder)){
					$option = ORM::factory('Settings')->where('key', '=', 'reminder.email')->find();
					if(!$option->loaded()){
						$option = ORM::factory('Settings');
						$option->key = 'reminder.email';
					}
					$option->value = $reminder;
					$option->save();
				}

				/*
								if(!empty($items_per_page)){
									$option = ORM::factory('Settings')->where('key', '=', 'news.amount')->find();
									if(!$option->loaded()){
										$option = ORM::factory('Settings');
										$option->key = 'news.amount';
									}
									$option->value = (int)$items_per_page;
									$option->save();
								}
								  if(!empty($season)){
									$option = ORM::factory('Settings')->where('key', '=', 'template.season')->find();
									if(!$option->loaded()){
										$option = ORM::factory('Settings');
										$option->key = 'template.season';
									}
									$option->value = $season;
									$option->save();
								}
				*/

				$db->commit();
				$this->redirect('content/settings');
			} catch (ORM_Validation_Exception $e) {
				$db->rollback();
				$errors = $e->errors('validation');
			} catch (Exception $e){

			}
		}

		$this->template->content = View::factory('content/settings')
			->bind('errors', $errors)
//			->bind('items_per_page', $items_per_page)
			->bind('confpass', $confpass)
			->bind('email', $email)
			->bind('newpass', $newpass)
			->bind('reminder', $reminder)
//			->bind('season', $season)
		;
		$this->template->title = 'Настройки';
	}
}
