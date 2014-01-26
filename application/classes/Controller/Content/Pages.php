<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 06.04.13
 * Time: 20:54
  */ 
class Controller_Content_Pages extends Controller_Content {

	protected $_form_fields = array('title', 'url', 'text', 'meta_title', 'meta_keywords', 'meta_description');

	public function action_index(){

		$page_info = Session::instance()->get('pages');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/pages', '/content/ajax/pages')
			->columns(array(
				'title' => 'Заголовок',
				'link' => array(
					'title' => 'Адрес',
					'type' => 'link',
					'target' => '_blank',
				),
			))
			->operations(array(
				'create' => 'Создать',
				'edit' => 'Редактировать',
				'drop' => 'Удалить',
				'enable' => '',
			))
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Страницы';
		$this->template->content = $table;

	}

	protected function prepare_form($data){

		$form = AdaptiveForm::factory(array(
			'title' => array(
				'type' => 'string',
				'title' => 'Заголовок',
				'value' => $data['title']
			),
			'url' => array(
				'type' => 'string',
				'title' => 'Значимая часть URL',
				'value' => $data['url']
			),
			'text'  => array(
				'type' => 'text',
				'title' => 'Текст',
				'value' => $data['text']
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

	public function action_edit(){
		$id = $this->request->param('id');
		if (!is_numeric($id)){
			$page = ORM::factory('Page')->where('url', '=', $id)->find();
		} else {
			$page = ORM::factory('Page', $id);
		}

		if (!$page->loaded())
			$this->redirect('content/pages');

		$data = Arr::extract($page->as_array(), $this->_form_fields);

		if ($_POST){
			$data = Arr::extract($_POST, $this->_form_fields);
			$this->prepopulateDefaults($data, true);

			$page->values($data);
			try{
				$page->save();

				$this->redirect('content/pages/edit/'.$page->id);
			}catch (ORM_Validation_Exception $e){
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->errors($errors)
			->render();

		$this->template->title = "Редактирование страницы ({$page->url})";
		$this->template->content = $form;
	}

	public function action_create(){

		$data = Arr::extract($_POST, $this->_form_fields);

		if ($_POST){
			$this->prepopulateDefaults($data, true);

			$page = ORM::factory('Page');
			$page->values($data);
			try{
				$page->save();

				$this->redirect('content/pages/edit/'.$page->id);
			}catch (ORM_Validation_Exception $e){
				$errors = $e->errors('validation');
			}
		}

		$form = $this->prepare_form($data)
			->errors($errors)
			->render();

		$this->template->title = "Создание страницы";
		$this->template->content = $form;
	}


}
