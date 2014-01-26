<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 10.09.13
 * Time: 16:34
  */ 
class Controller_Content_Ajax_Pages extends Controller_Content_Ajax{

	public function action_list() {
		$page_info = Session::instance()->get('pages');

		$page = isset($_POST['page']) ? $_POST['page'] : (isset($page_info['page']) ? $page_info['page'] : 1);
		$per_page = isset($_POST['per_page']) ? $_POST['per_page'] : (isset($page_info['per_page']) ? $page_info['per_page'] : 10);

		$page_info['page'] = $page;
		$page_info['per_page'] = $per_page;
		Session::instance()->set('pages', $page_info);

		$amount = ORM::factory('Page')->count_all();

		$entities = ORM::factory('Page')
			->order_by('title', 'asc')
			->offset(($page - 1) * $per_page)
			->limit($per_page)
			->find_all();

		foreach ($entities as $entity) {
			$data = $entity->as_array();
			$data['link'] = array(
				'title' => '/'.$data['url'].'.html',
				'link' => '/'.$data['url'].'.html'
			);
			$response['data'][] = $data;
		}
		$response['pagination'] = array(
			'page' => $page,
			'per_page' => $per_page,
			'amount' => $amount
		);
		$response['result'] = TRUE;
		echo json_encode($response);
	}

	public function action_delete() {
		$id = $this->request->param('id');
		$entity = ORM::factory('Page', $id);
		if ($entity->loaded()) {
			$entity->delete();
		}
	}

	public function action_enable(){
		$id = $this->request->param('id');
		$entity = ORM::factory('Page', $id);
		if ($entity->loaded()) {
			$entity->enabled = TRUE;
			$entity->save();
		}
	}

	public function action_disable(){
		$id = $this->request->param('id');
		$entity = ORM::factory('Page', $id);
		if ($entity->loaded()) {
			$entity->enabled = FALSE;
			$entity->save();
		}
	}
}
