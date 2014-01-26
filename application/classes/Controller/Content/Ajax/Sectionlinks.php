<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 11.04.13
 * Time: 17:35
  */ 
class Controller_Content_Ajax_SectionLinks extends Controller_Content_Ajax {
	public function action_list() {
		$page_info = Session::instance()->get('sectionlinks');

		$page = isset($_POST['page']) ? $_POST['page'] : (isset($page_info['page']) ? $page_info['page'] : 1);
		$per_page = isset($_POST['per_page']) ? $_POST['per_page'] : (isset($page_info['per_page']) ? $page_info['per_page'] : 10);

		$page_info['page'] = $page;
		$page_info['per_page'] = $per_page;
		Session::instance()->set('sectionlinks', $page_info);

		$entities = ORM::factory('SectionLink');

		if (isset($_POST['options']['where'])){
			foreach ($_POST['options']['where'] as $where)
				$entities = $entities->where($where['column'], $where['op'], $where['value']);
		}
		$es = clone $entities;
		$amount = $es->count_all();

		$entities = $entities
			->order_by('sort_order', 'asc')
			->offset(($page - 1) * $per_page)
			->limit($per_page)
			->find_all();

		foreach ($entities as $entity) {
			$response['data'][] = $entity->as_array();
		}
		$response['pagination'] = array(
			'page' => $page,
			'per_page' => $per_page,
			'amount' => $amount
		);
		$response['result'] = TRUE;
		echo json_encode($response);
	}

	public function action_sort_up() {
		$id = $this->request->param('id');
		$entity = ORM::factory('SectionLink', $id);

		$section_id = $entity->section_id;
		$entity = ORM::factory('SectionLink', array('section_id', '=', $section_id), $id);

		if ($entity->loaded()) {
			$entity->sort_up();
		}
	}

	public function action_sort_down() {
		$id = $this->request->param('id');
		$entity = ORM::factory('SectionLink', $id);

		$section_id = $entity->section_id;
		$entity = ORM::factory('SectionLink', array('section_id', '=', $section_id), $id);

		if ($entity->loaded()) {
			$entity->sort_down();
		}
	}

	public function action_delete() {
		$id = $this->request->param('id');
		$entity = ORM::factory('SectionLink', $id);

		$section_id = $entity->section_id;
		$entity = ORM::factory('SectionLink', array('section_id', '=', $section_id), $id);

		if ($entity->loaded()) {
			$entity->delete();
		}
	}

	public function action_enable(){
		$id = $this->request->param('id');
		$entity = ORM::factory('SectionLink', $id);
		if ($entity->loaded()) {
			$entity->enabled = TRUE;
			$entity->save();
		}
	}

	public function action_disable(){
		$id = $this->request->param('id');
		$entity = ORM::factory('SectionLink', $id);
		if ($entity->loaded()) {
			$entity->enabled = FALSE;
			$entity->save();
		}
	}
}
