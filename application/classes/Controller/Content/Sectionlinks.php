<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 11.04.13
 * Time: 17:28
 */
class Controller_Content_SectionLinks extends Controller_Content {
	protected $_form_fields = array('title', 'link', 'short_text');

	public function action_view() {
		$id = $this->request->param('id');

		$page_info = Session::instance()->get('sectionlinks');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/sectionlinks', '/content/ajax/sectionlinks')
			->columns(array(
				'title' => 'Заголовок',
				'link' => 'Ссылка'
			))
			->operations(array(
				'create' => array(
					'title' => 'Добавить',
					'url' => '/content/sectionlinks/create/' . $id
				),
				'back' => array(
					'title' => 'Назад',
					'url' => '/content/sections',
				),
				'drop' => 'Удалить',
//				'enable' => '',
				'sorting' => ''
			))
			->where('section_id', '=', $id)
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Ссылки раздела';
		$this->template->content = $table;
	}

	public function action_create() {
		$section_id = $this->request->param('id');

		$data = Arr::extract($_POST, $this->_form_fields);
		$data['section_id'] = $section_id;

		if ($_POST) {
			$entity = ORM::factory('SectionLink', array('section_id', '=', $section_id));
			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/sectionlinks/view/'.$section_id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = AdaptiveForm::factory(array(
			'title' => array(
				'type' => 'string',
				'title' => 'Заголовок',
				'value' => $data['title']
			),
			'link' => array(
				'type' => 'string',
				'title' => 'Ссылка',
				'value' => $data['link']
			),
			'short_text' => array(
				'type' => 'string',
				'title' => 'Описание',
				'value' => $data['short_text']
			),
		))
			->operations(array(
				'submit' => 'Добавить'
			))
			->errors($errors)
			->render();

		$this->template->title = 'Добавление ссылки';
		$this->template->content = $form;
	}
}
