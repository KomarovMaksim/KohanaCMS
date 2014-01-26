<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 24.11.13
 * Time: 12:55
 */
class Controller_Site_Search extends Controller_Site {

	public $template = 'site/search';

	public function action_index() {
		$page = $this->request->query('page');
		$page = is_numeric($page) ? (int)$page : 1;
		$per_page = $this->request->query('per_page');
		$per_page = is_numeric($per_page) ? (int)$per_page : 10;

		if (!empty($_POST['search_string'])) {
			$search_string = $_POST['search_string'];
			Session::instance()->set('search_string', $search_string);
		}
		else {
			$search_string = Session::instance()->get('search_string');
		}

		$results = array();
		$pages_amount = 1;
		$amount = 0;
		if (!empty($search_string)){
			$search = new Search();
			$query = ORM::factory('Section')
				->where('title', 'like', '%' . $search_string . '%')
				->and_where('text', 'like', '%' . $search_string . '%');
			$search->add($query);
			$query = ORM::factory('Article')
				->where('enabled', '=', TRUE)
				->where('title', 'like', '%' . $search_string . '%')
				->and_where('text', 'like', '%' . $search_string . '%');
			$search->add($query);
			$query = ORM::factory('Event')
				->where('title', 'like', '%' . $search_string . '%')
				->and_where('text', 'like', '%' . $search_string . '%');
			$search->add($query);

			$query = ORM::factory('Section')
				->where('title', 'like', '%' . $search_string . '%')
				->and_where('text', 'not like', '%' . $search_string . '%');
			$search->add($query);
			$query = ORM::factory('Article')
				->where('enabled', '=', TRUE)
				->where('title', 'like', '%' . $search_string . '%')
				->and_where('text', 'not like', '%' . $search_string . '%');
			$search->add($query);
			$query = ORM::factory('Event')
				->where('title', 'like', '%' . $search_string . '%')
				->and_where('text', 'not like', '%' . $search_string . '%');
			$search->add($query);

			$query = ORM::factory('Section')
				->where('text', 'like', '%' . $search_string . '%')
				->and_where('title', 'not like', '%' . $search_string . '%');
			$search->add($query);
			$query = ORM::factory('Article')
				->where('enabled', '=', TRUE)
				->where('text', 'like', '%' . $search_string . '%')
				->and_where('title', 'not like', '%' . $search_string . '%');
			$search->add($query);
			$query = ORM::factory('Event')
				->where('text', 'like', '%' . $search_string . '%')
				->and_where('title', 'not like', '%' . $search_string . '%');
			$search->add($query);

			$search->find($page, $per_page);
			$pages_amount = $search->total_pages();
			$amount = $search->total_entities();

			$results = $search->get_results();
		}

		$this->template->results = $results;
		/*
		if (!empty($search_string)) {
			$amount1 = ORM::factory('Section')
				->where('title', 'like', '%' . $search_string . '%')
				->or_where('text', 'like', '%' . $search_string . '%')
				->count_all();
			$amount2 = ORM::factory('Article')
				->where('enabled', '=', TRUE)
				->where('title', 'like', '%' . $search_string . '%')
				->or_where('text', 'like', '%' . $search_string . '%')
				->count_all();
			$amount3 = ORM::factory('Event')
				->where('title', 'like', '%' . $search_string . '%')
				->or_where('text', 'like', '%' . $search_string . '%')
				->count_all();
			$amount = $amount1 + $amount2 + $amount3;

			$pages_amount = ceil($amount / $per_page);

			$show1 = $amount1 > ($page - 1) * $per_page;
			$show2 = $amount1 < $page * $per_page;
			$show3 = $amount1 + $amount2 < $page * $per_page;
			$merge = $show1 && $show2;
			$merge2 = $show2 && $show3;

			if ($merge) {
				$results1 = ORM::factory('Section')
					->where('title', 'like', '%' . $search_string . '%')
					->or_where('text', 'like', '%' . $search_string . '%')
					->order_by('title', 'asc')
					->offset($per_page * ($page - 1))
					->limit($per_page)
					->find_all()->as_array();
				$limit2 = $page * $per_page - $amount1;
				$results2 = ORM::factory('Article')
					->where('enabled', '=', TRUE)
					->where('title', 'like', '%' . $search_string . '%')
					->or_where('text', 'like', '%' . $search_string . '%')
					->order_by('title', 'asc')
					->limit($limit2)
					->find_all()->as_array();
				$results = Arr::merge($results1, $results2);
			}
			elseif ($merge2) {
				$results2 = ORM::factory('Article')
					->where('enabled', '=', TRUE)
					->where('title', 'like', '%' . $search_string . '%')
					->or_where('text', 'like', '%' . $search_string . '%')
					->order_by('title', 'asc')
					->offset($per_page * ($page - 1) - $amount1)
					->limit($per_page)
					->find_all()->as_array();
				$limit3 = $page * $per_page - $amount1 - $amount2;
				$results3 = ORM::factory('Event')
					->where('title', 'like', '%' . $search_string . '%')
					->or_where('text', 'like', '%' . $search_string . '%')
					->order_by('title', 'asc')
					->limit($limit3)
					->find_all()->as_array();
				$results = Arr::merge($results2, $results3);

			}
			elseif ($show1) {
				$results = ORM::factory('Section')
					->where('title', 'like', '%' . $search_string . '%')
					->or_where('text', 'like', '%' . $search_string . '%')
					->order_by('title', 'asc')
					->offset($per_page * ($page - 1))
					->limit($per_page)
					->find_all()->as_array();
			}
			elseif ($show2) {
				$results = ORM::factory('Article')
					->where('enabled', '=', TRUE)
					->where('title', 'like', '%' . $search_string . '%')
					->or_where('text', 'like', '%' . $search_string . '%')
					->order_by('title', 'asc')
					->offset($per_page * ($page - 1) - $amount1)
					->limit($per_page)
					->find_all()->as_array();
			}
			elseif ($show3) {
				$results = ORM::factory('Event')
					->where('title', 'like', '%' . $search_string . '%')
					->or_where('text', 'like', '%' . $search_string . '%')
					->order_by('title', 'asc')
					->offset($per_page * ($page - 1) - $amount1 - $amount2)
					->limit($per_page)
					->find_all()->as_array();
			}

			$this->template->results = $results;
		}
		else {
			$this->template->results = array();
		}
		*/

		if ($pages_amount > 1)
			$this->template->pagination = array(
				'page' => $page,
				'per_page' => $per_page,
				'amount' => $amount,
				'pages_amount' => $pages_amount
			);
		$this->template->amount = $amount;

	}

	public function action_tag() {
		$id = $this->request->param('id');
		$tag = ORM::factory('Tag', $id);

		if (!$tag->loaded())
			$this->redirect('/');

		$page = $this->request->query('page');
		$page = is_numeric($page) ? (int)$page : 1;
		$per_page = $this->request->query('per_page');
		$per_page = is_numeric($per_page) ? (int)$per_page : 10;

		$tag = $tag->articles->where('enabled', '=', TRUE);

		$amount = clone($tag);
		$amount = $amount->count_all();
		$pages_amount = ceil($amount / $per_page);
		$results = $tag->order_by('created', 'desc')
			->offset($per_page * ($page - 1))
			->limit($per_page)
			->find_all();

		$this->template->results = $results;

		$this->template->pagination = array(
			'page' => $page,
			'per_page' => $per_page,
			'amount' => $amount,
			'pages_amount' => $pages_amount
		);
	}
}
