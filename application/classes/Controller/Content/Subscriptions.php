<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 15.12.13
 * Time: 23:08
  */ 
class Controller_Content_Subscriptions  extends Controller_Content{

	public function action_index(){

		$page_info = Session::instance()->get('subscriptions');
		$page = (!empty($page_info) && isset($page_info['page'])) ? $page_info['page'] : 1;
		$per_page = (!empty($page_info) && isset($page_info['per_page'])) ? $page_info['per_page'] : 10;

		$table = AJAXTable::factory('/content/subscriptions', '/content/ajax/subscriptions')
			->columns(array(
				'date' => 'Дата',
				'title' => '',
				'first_name' => 'Имя',
				'last_name' => 'Фамилия',
				'email' => 'E-Mail',
				'country' => 'Страна',
				'city' => 'Город',
				'street' => 'Улица',
				'postal_code' => 'Индекс',
			))
			->pagination($page, $per_page)
			->render();

		$this->template->title = 'Подписки';

		$toolbar = '<div class="btn-toolbar"><a class="btn btn-inverse" href="/content/subscriptions/export">Экспорт</a></div>';

		$this->template->content = $toolbar . $table;
	}

	public function action_export(){
		$subs = ORM::factory('Subscription')->find_all();
		$f = fopen('php://memory' , 'w');
		foreach($subs as $sub){
			$str = $sub->email . "\r\n";
			fputs($f, $str, strlen($str));
		}
		rewind($f);

		header('Content-Type: text/plain; charset=UTF-8');
		header('Content-Disposition: attachement; filename="emails.txt";');
		fpassthru($f);
		fclose($f);
		exit;
	}

}
 