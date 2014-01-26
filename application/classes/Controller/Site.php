<?php
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 15.03.13
 * Time: 2:34
 */
class Controller_Site extends Controller_Template_Twig {

	public function before(){
		parent::before();

		$this->template->slider_items = ORM::factory('SliderItem')->where('enabled', '=', TRUE)->order_by('sort_order', 'ASC')->find_all();
        $this->template->banner_items = ORM::factory('BannerItem')->where('enabled', '=', TRUE)->where('id', '=', '7')->find_all();
        $this->template->bannermain_items = ORM::factory('BannerItem')->where('enabled', '=', TRUE)->where('id', '=', '8')->find_all();
        $this->template->bannerright_items = ORM::factory('BannerItem')->where('enabled', '=', TRUE)->where('id', '=', '9')->find_all();
        $this->template->bannerright2_items = ORM::factory('BannerItem')->where('enabled', '=', TRUE)->where('id', '=', '10')->find_all();
        		$this->template->event_all = ORM::factory('Event')->where('enabled', '=', TRUE)->order_by('created', 'desc')->find_all();

		$nav = array();
		$menu_items = ORM::factory('MenuItem')->order_by('sort_order', 'asc')->find_all();
		foreach($menu_items as $menu_item){
			$items = array();
			$sections = $menu_item->sections->order_by('sort_order', 'asc')->find_all();
			foreach($sections as $section){
				$subitems = array();
				$subsections = $section->subsections->order_by('sort_order', 'asc')->find_all();
				foreach($subsections as $subsection){
					$subitems[] = array(
						'title' => $subsection->title,
						'link' => $subsection->get_url(),
					);
				}
				$items[] = array(
					'title' => $section->title,
					'link' => $section->get_url(),
					'items' => $subitems,
				);
			}
			$nav[] = array(
				'title' => $menu_item->title,
				'items' => $items
			);
		}
		$this->template->nav = $nav;

	}

}
