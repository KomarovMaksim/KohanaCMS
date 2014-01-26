<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 12.04.13
 * Time: 3:09
  */
class Controller_Content_Feedbacks extends Controller_Content {

	public function action_index(){

		$page_info = Session::instance()->get('feedbacks');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/feedbacks', '/content/ajax/feedbacks')
			->columns(array(
				'date' => 'Дата',
				'name' => 'Имя',
				'email' => 'E-mail',
				'sub' => 'Тема',
				'message' => 'Сообщение'
			))
			->operations(array(
				'viewed' => ''
			))
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Обратная связь';
		$this->template->content = $table;
	}

}
