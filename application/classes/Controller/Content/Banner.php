<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 11.04.13
 * Time: 17:28
 */
class Controller_Content_Banner extends Controller_Content {
	protected $_form_fields = array('url', 'image');

	public function action_index() {
		$page_info = Session::instance()->get('banner');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 6;

		$table = AJAXTable::factory('/content/banner', '/content/ajax/banner')
			->columns(array(
			    'title' => 'Баннер',
				'image' => array(
					'type' => 'image',
					'options' => array(
						'width' => 225,
						'height' => 182
					)
				),
			))
			->operations(array(
				'edit' => 'Редактировать',
				'enable' => ''
			))
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Баннеры';
		$this->template->content = $table;
	}

		protected function prepare_form($data) {

		$form = AdaptiveForm::factory(array(
		'url' => array(
				'type' => 'string',
				'title' => 'Ссылка',
				'value' => $data['url']
			),
			'image' => array(
				'type' => 'image',
				'title' => 'Изображение',
				'value' => $data['image'],
				'options' => array(
					'width' => '225',
					'height' => '182'
				)
			)
		));

		return $form;

	}



		public function action_edit() {

		$id = $this->request->param('id');
		$entity = ORM::factory('BannerItem', $id);
		if (!$entity->loaded()) {
			$this->redirect('content/banner');
		}

		$data = Arr::extract($entity->as_array(), $this->_form_fields);

			if ($_POST) {
			$data = Arr::extract($_POST, $this->_form_fields);

			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/banner/edit/' . $entity->id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->errors($errors)
			->render();

		$this->template->title = 'Добавление изображения';
		$this->template->content = $form;
	}



}
