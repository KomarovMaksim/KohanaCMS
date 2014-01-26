<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 28.03.13
 * Time: 13:09
 */
class Controller_Content_Menu extends Controller_Content {
	protected $_form_fields = array('title', 'text');

	public function action_index() {

		$page_info = Session::instance()->get('menu');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/menu', '/content/ajax/menu')
			->columns(array(
				'title' => 'Заголовок'
			))
			->operations(array(
				'create' => 'Создать',
				'edit' => 'Редактировать',
				'drop' => 'Удалить',
//				'enable' => '',
				'sorting' => ''
			))
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Меню';
		$this->template->content = $table;
	}

	private function prepare_form($data){

		$form = AdaptiveForm::factory(array(
			'title' => array(
				'type' => 'string',
				'title' => 'Заголовок',
				'value' => $data['title']
			),
		));
		return $form;
	}

	public function action_create() {

		$data = Arr::extract($_POST, $this->_form_fields);

		if ($_POST) {
			$entity = ORM::factory('MenuItem');
			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/menu/edit/' . $entity->id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->operations(array('submit' => 'Создать'))
			->errors($errors)
			->render();

		$this->template->title = 'Создание пункта меню';
		$this->template->content = $form;
	}

	public function action_edit() {

		$id = $this->request->param('id');
		$entity = ORM::factory('MenuItem', $id);
		if (!$entity->loaded()) {
			$this->redirect('content/menu');
		}

		$data = Arr::extract($entity->as_array(), $this->_form_fields);

		if ($_POST) {
			$data = Arr::extract($_POST, $this->_form_fields);

			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/menu/edit/' . $entity->id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->errors($errors)
			->render();

		$this->template->title = 'Редактирование пункта меню';
		$this->template->content = $form;
	}

}
