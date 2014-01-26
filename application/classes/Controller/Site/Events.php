<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 23.11.13
 * Time: 18:30
 */
class Controller_Site_Events extends Controller_Site {

	public $template = 'site/event';

	public function action_index() {
		$this->template->set_filename('site/event_list');

		$this->template->categories = ORM::factory('Category')->find_all();
		$this->template->tags = ORM::factory('Tag')->order_by('title', 'asc')->find_all();

		$this->template->months = array(
			'Январь',
			'Февраль',
			'Март',
			'Апрель',
			'Май',
			'Июнь',
			'Июль',
			'Август',
			'Сентябрь',
			'Октябрь',
			'Ноябрь',
			'Декабрь'
		);


		$year = $this->request->query('y');
		$month = $this->request->query('m');

		$location = $this->request->query('location');
		$category = $this->request->query('category');

		if ($_GET) {
			if (!empty($location)) {
				$events = ORM::factory('Tag', $location);
				if ($events->loaded()){
					$events = $events->events;
					$this->template->location = $location;
				} else {
					$events = ORM::factory('Event');
				}
			}
			else {
				$events = ORM::factory('Event');
			}

			if (!empty($year)){
				$events = $events->where(DB::expr('YEAR(created)'), '=', $year);
				$this->template->year = $year;
			}
			if (!empty($month)){
				$events = $events->where(DB::expr('MONTH(created)'), '=', $month);
				$this->template->month = $month;
			}

			if (!empty($category)){
				$events = $events->where('category_id', '=', $category);
				$this->template->category = $category;
			}

			$events = $events->find_all();
			$this->template->events = $events;
		} else {
			$this->template->events = ORM::factory('Event')->order_by('created', 'asc')->find_all();
		}
	}

	public function action_view() {
		$url = $this->request->param('url');
		$event = ORM::factory('Event')->where('url', '=', $url)->find();
		if (!$event->loaded())
			$this->redirect('/');
		$this->template->event = $event;

	}
}
