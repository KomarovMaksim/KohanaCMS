<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 15.12.13
 * Time: 23:25
  */ 
class Controller_Content_Ajax_Subscriptions extends Controller_Content_Ajax {
	
	public function action_list() {
		$page_info = Session::instance()->get('subscriptions');

		$page = isset($_POST['page']) ? $_POST['page'] : (isset($page_info['page']) ? $page_info['page'] : 1);
		$per_page = isset($_POST['per_page']) ? $_POST['per_page'] : (isset($page_info['per_page']) ? $page_info['per_page'] : 10);

		$page_info['page'] = $page;
		$page_info['per_page'] = $per_page;
		Session::instance()->set('subscriptions', $page_info);

		$amount = ORM::factory('Subscription')->count_all();

		$entities = ORM::factory('Subscription')
			->order_by('date', 'desc')
			->offset(($page - 1) * $per_page)
			->limit($per_page)
			->find_all();

		foreach ($entities as $entity) {
			$data = $entity->as_array();
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
}
 