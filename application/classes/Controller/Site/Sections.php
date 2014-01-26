<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 13.05.13
 * Time: 5:06
 */
class Controller_Site_Sections extends Controller_Site {

	public $template = 'site/section';

	public function action_view() {
		$url = $this->request->param('url');

		$section = ORM::factory('Section')->where('url', '=', $url)->find();
		if (!$section->loaded())
			$this->redirect('/');

		$this->template->section = $section;

		$this->template->articles = $section->articles
			->where('article.enabled', '=', TRUE)
			->join('articles_tags', 'LEFT OUTER')
			->on('article.id', '=', 'articles_tags.article_id')
			->join('tags', 'LEFT OUTER')
			->on('articles_tags.tag_id', '=', 'tags.id')
			->distinct('article.id')
			->order_by(DB::expr('ISNULL(tags.title)'))
			->order_by('tags.title', 'asc')
			->order_by('article.title', 'asc')
			->find_all();

		$this->template->links = $section->links->order_by('sort_order')->find_all();

$fliplab = $section->articles
			->where('article.enabled', '=', TRUE)
			->join('articles_tags', 'LEFT OUTER')
			->on('article.id', '=', 'articles_tags.article_id')
			->join('tags', 'LEFT OUTER')
			->on('articles_tags.tag_id', '=', 'tags.id')
			->distinct('article.id')
			->order_by(DB::expr('ISNULL(tags.title)'))
			->order_by('tags.title', 'asc')
			->order_by('article.title', 'asc')
			->find_all();
//$is_title_tag = $fliplab->get_tags_titles();
//$this->template->is_title_tag = $is_title_tag.'1';

		$images = $section->images->order_by('sort_order', 'asc')->find_all()->as_array();
		if (count($images) > 0)
			$this->template->slider_items = $images;
		elseif ($section->parent->loaded()) {
			$images = $section->parent->images->order_by('sort_order', 'asc')->find_all()->as_array();
			if (count($images) > 0)
				$this->template->slider_items = $images;
			elseif ($section->parent->parent->loaded()) {
				$images = $section->parent->parent->images->order_by('sort_order', 'asc')->find_all()->as_array();
				if (count($images) > 0)
					$this->template->slider_items = $images;
			}
		}

		$breadcrumbs = array();

		if ($section->parent->loaded()) {
			if ($section->parent->menu_item->loaded())
				$breadcrumbs[] = array(
					'title' => $section->parent->menu_item->title,
				);
			$breadcrumbs[] = array(
				'title' => $section->parent->title,
				'link' => $section->parent->get_url()
			);
		}
		else {
			if ($section->menu_item->loaded())
				$breadcrumbs[] = array(
					'title' => $section->menu_item->title,
				);
		}
		$breadcrumbs[] = array(
			'title' => $section->title
		);
		$this->template->breadcrumbs = $breadcrumbs;
	}
}
