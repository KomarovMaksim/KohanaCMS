<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 28.03.13
 * Time: 13:09
 */
class Controller_Content_Sections extends Controller_Content {
	protected $_form_fields = array('id', 'title', 'text', 'menu_id', 'parent_id', 'url', 'meta_title', 'meta_keywords', 'meta_description');

	public function action_index() {

		$page_info = Session::instance()->get('sections');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/sections', '/content/ajax/sections')
			->columns(array(
				'title' => 'Наименование',
				'parent' => 'Родитель',
				'menu' => 'Пункт меню',
			))
			->operations(array(
				'create' => 'Добавить',
				'images' => array(
					'title' => 'Изображения',
					'url' => '/content/sectionimages/view/<id>'
				),
				'links' => array(
					'title' => 'Ссылки',
					'url' => '/content/sectionlinks/view/<id>'
				),
				'edit' => 'Редактировать',
				'drop' => 'Удалить',
				'enable' => '',
				'sorting' => ''
			))
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Разделы';
		$this->template->content = $table;
	}

	protected function prepare_form($data) {

		$menu_items = array();
		$ms = ORM::factory('MenuItem')->order_by('sort_order', 'asc')->find_all();
		foreach ($ms as $m)
			$menu_items[$m->id] = $m->title;

		$id = empty($data['id'])? 0 : $data['id'];
		$sections = array();
		$ss = ORM::factory('Section')->where('parent_id', 'is', null)->where('id', '<>', $id)->find_all();
		foreach ($ss as $s)
			$sections[$s->id] = $s->title;

		$form = AdaptiveForm::factory(array(
			'title' => array(
				'type' => 'string',
				'title' => 'Название',
				'value' => $data['title']
			),

			'url' => array(
				'type' => 'string',
				'title' => 'Значимая часть URL',
				'value' => $data['url']
			),
			'menu_id' => array(
				'type' => 'select',
				'title' => 'Пункт меню',
				'value' => $data['menu_id'],
				'options' => array(
					'values' => $menu_items,
				)
			),
			'parent_id' => array(
				'type' => 'select',
				'title' => 'Родительский раздел',
				'value' => $data['parent_id'],
				'options' => array(
					'values' => $sections,
				)
			),
			'text' => array(
				'type' => 'text',
				'title' => 'Текст',
				'value' => $data['text'],
			),
			'meta_title' => array(
				'type' => 'string',
				'title' => 'Тэг <title>',
				'value' => $data['meta_title']
			),
			'meta_keywords' => array(
				'type' => 'string',
				'title' => 'meta keywords',
				'value' => $data['meta_keywords']
			),
			'meta_description' => array(
				'type' => 'text',
				'title' => 'meta description',
				'value' => $data['meta_description'],
				'options' => array(
					'ckeditor' => FALSE,
					'rows' => 5
				)
			)

		));

		return $form;

	}

	public function action_create() {

		$data = Arr::extract($_POST, $this->_form_fields);
		if (empty($data['parent_id']))
			$data['parent_id'] = null;
		if (empty($data['menu_id']))
			$data['menu_id'] = null;
		$this->prepopulateDefaults($data, false);

		if ($_POST) {
			$entity = ORM::factory('Section');
			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/sections/edit/' . $entity->id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->operations(array('submit' => 'Добавить'))
			->errors($errors)
			->render();

		$this->template->title = 'Добавление раздела';
		$this->template->content = $form;
	}

	public function action_edit() {

		$id = $this->request->param('id');
		$entity = ORM::factory('Section', $id);
		if (!$entity->loaded()) {
			$this->redirect('content/sections');
		}

		$data = Arr::extract($entity->as_array(), $this->_form_fields);

		if ($_POST) {
			$data = Arr::extract($_POST, $this->_form_fields);
			if (empty($data['parent_id']))
				$data['parent_id'] = null;
			if (empty($data['menu_id']))
				$data['menu_id'] = null;
			$this->prepopulateDefaults($data, false);

			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/sections/edit/' . $entity->id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->errors($errors)
			->render();

		$this->template->title = 'Редактирование раздела';
		$this->template->content = $form;
	}

}
