<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 30.11.13
 * Time: 15:11
  */
class Controller_Content_Splash extends Controller_Content {

	protected $_form_fields = array('image');

	public function action_index(){

		$splash = ORM::factory('Settings')->where('key', '=', 'splash')->find();
		if ($splash->loaded())
			$data['image'] = $splash->value;

		if ($_POST) {
			$data = Arr::extract($_POST, $this->_form_fields);

			if (!$splash->loaded())
				$splash = ORM::factory('Settings');
			$splash->value = $data['image'];
			try {
				$splash->save();

				$this->redirect('/content/splash');
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = AdaptiveForm::factory(array(
			'image' => array(
				'type' => 'image',
				'title' => 'Изображение',
				'value' => $data['image'],
				'options' => array(
					'width' => '640',
					'height' => '480'
				)
			)
		))
			->errors($errors)
			->render();

		$this->template->title = 'Всплывающая каринка на Главной';
		$this->template->content = $form;
	}

}
