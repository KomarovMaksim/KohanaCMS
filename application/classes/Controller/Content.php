<?php
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 18.03.13
 * Time: 14:01
  */
class Controller_Content extends Controller_Base{
	public $template = 'content/content';

	protected $_menu_items = array(
		'Articles' => 'content',
		'Menu' => 'content',
		'Sections' => 'content',
		'Pages' => 'content',

		'Slider' => 'media',
		'Splash' => 'media',
		'Banner' => 'media',
		'Events' => 'media',

		'Tags' => 'dicts',

		'Files' => 'system',
		'About' => 'system',

		'Feedbacks' => 'clients',
		'Subscriptions' => 'clients',

	);

	protected function get_active_menu(){
		$controller = $this->request->controller();

		return isset($this->_menu_items[$controller]) ? $this->_menu_items[$controller] : FALSE;
	}

	public function before(){
		parent::before();

		if (!Auth::instance()->logged_in('content')){
			$this->redirect('content/auth');
		}

		$this->template->scripts[] = '/assets/content/js/jquery-1.8.2.js';
		$this->template->scripts[] = '/assets/content/js/bootstrap.js';
		$this->template->scripts[] = '/assets/content/js/mahaon-components.js';
		$this->template->scripts[] = '/assets/content/ckeditor/ckeditor.js';

		$this->template->styles[] = '/assets/content/css/bootstrap.css';
//		$this->template->styles[] = '/assets/content/css/bootstrap-responsive.css';
		$this->template->styles[] = '/assets/content/css/font-awesome.css';
		$this->template->styles[] = '/assets/content/css/style.css';

		$this->template->user = Auth::instance()->get_user();

      	$this->template->new_feedbacks = ORM::factory('Feedback')->where('viewed', '=', FALSE)->count_all();
		$this->template->topmenu = View::factory('content/components/topmenu');
		$this->template->menu = View::factory('content/components/menu')
			->set('active_menu', $this->get_active_menu());
	}

	protected function getDefaultUrl($title){

		$url = mb_convert_case($title, MB_CASE_LOWER, "UTF-8");
		$cyr  = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у',
			'ф','х','ц','ч','ш','щ','ъ','ы', 'ь', 'э', 'ю','я');
		$lat = array( 'a','b','v','g','d','e','yo','zh','z','i','y','k','l','m','n','o','p','r','s','t','u',
			'f' ,'h' ,'ts' ,'ch','sh' ,'shch' ,'' , 'i' ,'' ,'e' ,'yu' ,'ya');
		$url = str_replace($cyr, $lat, $url);
		$url = preg_replace('/\W/', ' ', $url);
		$url = trim($url);
		$url = preg_replace('/\s+/', '_', $url);
		return $url;
	}

	protected function getDefaultKeywords($title){
		$result = preg_replace("/&#?[a-z0-9а-я]+;/iu", "", $title);
		$result = preg_replace("/[[:punct:]]/iu", " ", $result);
		$result = preg_replace("/\s+/", " ", $result);
		$result = preg_replace("/ /",", ",$result);
		return $result;
	}

	protected function getDefaultDescription($text){
		$text = preg_replace('/\n/', ' ', $text);
		$text = preg_replace('/\r/', ' ', $text);
		$text = preg_replace('/(<\/[^>]+?>)(<[^>\/][^>]*?>)/', '$1 $2', $text);
		$text = strip_tags($text);
		$text = preg_replace("/\s+/", " ", $text);
		$text = explode(' ', $text);
		$count = count($text);
		$text = array_slice($text, 0, 40);
		$text = implode(' ', $text);
		if ($count > 40)
			$text .= '...';
		return preg_replace("/&#?[a-z0-9а-я]+;/iu", "", $text);
	}

	protected function prepopulateDefaults(&$data, $prep_url = TRUE){

		if ($prep_url){
			$data['url'] = empty($data['url']) ? $this->getDefaultUrl($data['title']) : $this->getDefaultUrl($data['url']) ;
		}
		$data['meta_title'] = empty($data['meta_title']) ? $data['title'] : $data['meta_title'];
		$data['meta_keywords'] = empty($data['meta_keywords']) ? $this->getDefaultKeywords($data['title']) : $this->getDefaultKeywords($data['meta_keywords']);
		$data['meta_description'] = empty($data['meta_description']) ? $this->getDefaultDescription($data['text']) : $this->getDefaultDescription($data['meta_description']);
	}

}
