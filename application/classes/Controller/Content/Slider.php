<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 11.04.13
 * Time: 17:28
 */
class Controller_Content_Slider extends Controller_Content {
	protected $_form_fields = array('image');

	public function action_index() {
		$page_info = Session::instance()->get('slider');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/slider', '/content/ajax/slider')
			->columns(array(
				'image' => array(
					'type' => 'image',
					'options' => array(
						'width' => 750,  //1500
						'height' => 211  //422
					)
				),
			))
			->operations(array(
				'create' => 'Добавить',
				'drop' => 'Удалить',
				'enable' => '',
				'sorting' => ''
			))
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Слайдер';
		$this->template->content = $table;
	}

	public function action_create() {
		$data = Arr::extract($_POST, $this->_form_fields);

		if ($_POST) {
			$entity = ORM::factory('SliderItem');
			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/slider/');
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
					'width' => '750',
					'height' => '211'
				)
			)
		))
			->operations(array(
				'submit' => 'Добавить'
			))
			->errors($errors)
			->render();

		$this->template->title = 'Добавление изображения';
		$this->template->content = $form;
	}
}
