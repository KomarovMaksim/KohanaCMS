<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 28.03.13
 * Time: 13:09
 */
class Controller_Content_Events extends Controller_Content {
	protected $_form_fields = array('title', 'short_text', 'category_id', 'image', 'text', 'url', 'meta_title', 'created', 'meta_keywords', 'meta_description', 'on_main', 'tags');

	public function before() {
		parent::before();

		$this->template->scripts[] = '/assets/content/js/bootstrap-datepicker.js';
		$this->template->styles[] = '/assets/content/css/bootstrap-datepicker.css';

		$this->template->scripts[] = '/assets/content/js/chosen.jquery.min.js';
		$this->template->styles[] = '/assets/content/css/chosen.min.css';
	}

	public function action_index() {

		$page_info = Session::instance()->get('events');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/events', '/content/ajax/events')
			->columns(array(
				'image' => array(
					'type' => 'image',
					'title' => 'Изображение',
					'options' => array(
						'width' => 140,
						'height' => 75
					)
				),
				'title' => 'Заголовок',

			))
			->operations(array(

				'create' => 'Создать',
				'edit' => 'Редактировать',
				'drop' => 'Удалить',
				'enable' => ''

			))
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'События';
		$this->template->content = $table;
	}

	protected function prepare_form($data) {
		$categories = array();
		$cs = ORM::factory('Category')->find_all();
		foreach ($cs as $c) {
			$categories[$c->id] = $c->title;
		}

		$tags = array();
		$ts = ORM::factory('Tag')->order_by('title', 'asc')->find_all();
		foreach ($ts as $t) {
			$tags[$t->id] = $t->title;
		}

		$form = AdaptiveForm::factory(array(
			'title' => array(
				'type' => 'string',
				'title' => 'Заголовок',
				'value' => $data['title']
			),
			'created' => array(
				'type' => 'date',
				'title' => 'Дата',
				'value' => $data['created']
			),
			'tags' => array(
				'type' => 'tags',
				'title' => 'Тэги',
				'value' => $data['tags'],
				'options' => array(
					'values' => $tags,
					'placeholder' => 'Укажите тэги',
				)
			),
			'url' => array(
				'type' => 'string',
				'title' => 'Значимая часть URL',
				'value' => $data['url']
			),

			'category_id' => array(
				'type' => 'select',
				'title' => 'Категория',
				'value' => $data['category_id'],
				'options' => array(
					'values' => $categories
				)
			),
			'short_text' => array(
				'type' => 'text',
				'title' => 'Краткое описание',
				'value' => $data['short_text'],
				'options' => array(
					'ckeditor' => FALSE,
					'rows' => 5
				)
			),
			'text' => array(
				'type' => 'text',
				'title' => 'Текст',
				'value' => $data['text'],
			),
			'image' => array(
				'type' => 'image',
				'title' => 'Изображение',
				'value' => $data['image'],
				'options' => array(
					'width' => 300,
					'height' => 160
				)
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

	protected function create_thumb($filepath, $width = 140, $height = 100) {
		if (!empty($filepath) && is_file(DOCROOT . $filepath)) {
			$pi = pathinfo($filepath);
			$filename = $pi['filename'];
			$filename = str_replace('_' . $width . 'x' . $height, '', $filename);
			$newpath = $pi['dirname'] . '/' . $filename . '_' . $width . 'x' . $height . '.' . $pi['extension'];
			ImageFile::autoformat($filepath, $newpath, $width, $height);
			return $newpath;
		}
		else
			return '';
	}

	public function action_create() {
		$data = Arr::extract($_POST, $this->_form_fields);
		$data['on_main'] = isset($data['on_main']) ? TRUE : FALSE;
		$this->prepopulateDefaults($data);

		if ($_POST) {
			$entity = ORM::factory('Event');
			$entity->values($data);
			try {
				$entity->save();

				if (!empty($data['image'])) {
					$entity->image = $this->create_thumb($data['image']);

					$entity->save();
				}
				if (is_array($data['tags'] && count($data['tags']) > 0))
					$entity->add('tags', $data['tags']);

				$this->redirect('/content/events/edit/' . $entity->id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->operations(array('submit' => 'Создать'))
			->errors($errors)
			->render();

		$this->template->title = 'Создание события';
		$this->template->content = $form;
	}

	public function action_edit() {

		$id = $this->request->param('id');
		$entity = ORM::factory('Event', $id);
		if (!$entity->loaded()) {
			$this->redirect('content/events');
		}

		$data = Arr::extract($entity->as_array(), $this->_form_fields);
		$current_tags = array();
		$ts = $entity->tags->find_all();
		foreach ($ts as $t) {
			$current_tags[] = $t->id;
		}
		$data['tags'] = $current_tags;
		if (isset($_POST['submitter'])) {
			$data = Arr::extract($_POST, $this->_form_fields);
			$data['on_main'] = isset($data['on_main']) ? TRUE : FALSE;
			$this->prepopulateDefaults($data);

			$entity->values($data);
			try {
				$entity->save();

				if (!empty($data['image'])) {
					$entity->image = $this->create_thumb($data['image']);

					$entity->save();
				}

				if (!is_array($data['tags']))
					$data['tags'] = array();
				$add_tags = array_diff($data['tags'], $current_tags);
				$remove_tags = array_diff($current_tags, $data['tags']);

				if (is_array($add_tags) && count($add_tags) > 0)
					$entity->add('tags', $add_tags);
				if (is_array($remove_tags) && count($remove_tags) > 0)
					$entity->remove('tags', $remove_tags);

				$this->redirect('/content/events/edit/' . $entity->id);
			} catch (ORM_Validation_Exception $e) {
				$errors = $e->errors('validation');
			}
		}
		$date = '';
		if (!empty($data['created'])){
			$date = DateTime::createFromFormat('d.m.Y H:i:s', $data['created']);
			if (is_object($date))
				$date = $date->format('d.m.Y');
		}
		$data['created'] = $date;

		$form = $this->prepare_form($data)
			->errors($errors)
			->render();

		$this->template->title = 'Редактирование события';
		$this->template->content = $form;
	}

}
