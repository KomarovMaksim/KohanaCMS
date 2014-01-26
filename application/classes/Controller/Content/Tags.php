<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 28.11.13
 * Time: 11:11
  */ 
class Controller_Content_Tags extends Controller_Content {
	protected $_form_fields = array('title');

	public function action_index() {

		$page_info = Session::instance()->get('tags');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/tags', '/content/ajax/tags')
			->columns(array(
				'title' => 'Регион'
			))
			->operations(array(
				'create' => 'Добавить',
				'edit' => 'Редактировать',
				'drop' => 'Удалить',
//				'enable' => '',
//				'sorting' => ''
			))
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Тэги';
		$this->template->content = $table;
	}

	protected function prepare_form($data) {

		$form = AdaptiveForm::factory(array(
			'title' => array(
				'type' => 'string',
				'title' => 'Название',
				'value' => $data['title']
			),
		));

		return $form;

	}

	public function action_create() {

		$data = Arr::extract($_POST, $this->_form_fields);

		if ($_POST) {
			$entity = ORM::factory('Tag');
			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/tags/edit/' . $entity->id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->operations(array('submit' => 'Создать'))
			->errors($errors)
			->render();

		$this->template->title = 'Добавление тэга';
		$this->template->content = $form;
	}

	public function action_edit() {

		$id = $this->request->param('id');
		$entity = ORM::factory('Tag', $id);
		if (!$entity->loaded()) {
			$this->redirect('content/tags');
		}

		$data = Arr::extract($entity->as_array(), $this->_form_fields);

		if ($_POST) {
			$data = Arr::extract($_POST, $this->_form_fields);

			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/tags/edit/' . $entity->id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->errors($errors)
			->render();

		$this->template->title = 'Редактирование тэга';
		$this->template->content = $form;
	}

}
