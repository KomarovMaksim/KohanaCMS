<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 23.11.13
 * Time: 18:30
 */
class Controller_Site_Articles extends Controller_Site {

	public $template = 'site/article';

	public function action_view() {
		$url = $this->request->param('url');
		$article = ORM::factory('Article')->where('url', '=', $url)->find();
		if (!$article->loaded())
			$this->redirect('/');
		$this->template->article = $article;

		$this->template->links = $article->links->order_by('sort_order')->find_all();

		$images = $article->images->order_by('sort_order', 'asc')->find_all()->as_array();
		if (count($images) > 0)
			$this->template->slider_items = $images;
		else {
			$images = $article->section->images->order_by('sort_order', 'asc')->find_all()->as_array();
			if (count($images) > 0)
				$this->template->slider_items = $images;
			elseif ($article->section->parent->loaded()) {
				$images = $article->section->parent->images->order_by('sort_order', 'asc')->find_all()->as_array();
				if (count($images) > 0)
					$this->template->slider_items = $images;
				elseif ($article->section->parent->parent->loaded()) {
					$images = $article->section->parent->parent->images->order_by('sort_order', 'asc')->find_all()->as_array();
					if (count($images) > 0)
						$this->template->slider_items = $images;
				}
			}
		}


		$breadcrumbs = array();

		if ($article->section->parent->loaded()) {
			if ($article->section->parent->menu_item->loaded())
				$breadcrumbs[] = array(
					'title' => $article->section->parent->menu_item->title,
				);

			$breadcrumbs[] = array(
				'title' => $article->section->parent->title,
				'link' => $article->section->parent->get_url()
			);
		}
		else {
			if ($article->section->menu_item->loaded())
				$breadcrumbs[] = array(
					'title' => $article->section->menu_item->title,
				);

		}
		$breadcrumbs[] = array(
			'title' => $article->section->title,
			'link' => $article->section->get_url()
		);
		$breadcrumbs[] = array(
			'title' => $article->title
		);
		$this->template->breadcrumbs = $breadcrumbs;
	}

}
 