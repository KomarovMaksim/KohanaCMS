<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 11.04.13
 * Time: 17:28
 */
class Controller_Content_ArticleImages extends Controller_Content {
	protected $_form_fields = array('image');

	public function action_view() {
		$id = $this->request->param('id');

		$page_info = Session::instance()->get('articleimages');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/articleimages', '/content/ajax/articleimages')
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
				'create' => array(
					'title' => 'Добавить',
					'url' => '/content/articleimages/create/' . $id
				),
				'back' => array(
					'title' => 'Назад',
					'url' => '/content/articles',
				),
				'drop' => 'Удалить',
				'enable' => '',
				'sorting' => ''
			))
			->where('article_id', '=', $id)
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Изображения статьи';
		$this->template->content = $table;
	}

	public function action_create() {
		$article_id = $this->request->param('id');

		$data = Arr::extract($_POST, $this->_form_fields);
		$data['article_id'] = $article_id;

		if ($_POST) {
			$entity = ORM::factory('ArticleImage', array('article_id', '=', $article_id));
			$entity->values($data);
			try {
				$entity->save();

				$this->redirect('/content/articleimages/view/'.$article_id);
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
