<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 15.12.13
 * Time: 22:48
  */ 
class Model_Subscription extends ORM {
    protected $_table_name = 'subscriptions';

	public function labels() {
		return array(
			'title' => 'Обращение',
			'first_name' => 'Имя',
			'last_name' => 'Фамилия',
			'email' => 'E-Mail',
			'country' => 'Страна',
			'city' => 'Город',
			'street' => 'Улица',
			'postal_code' => 'Индекс',
		);
	}
	
	public function rules() {
		return array(
			'first_name' => array(
				array('not_empty'),
			),
			'email' => array(
				array('not_empty'),
				array(array($this, 'unique'), array('email', ':value')),
			),
		);
	}
	
	public function filters() {
		return array(
			'title' => array(
				array('trim'),
				array('strip_tags'),
			),
			'first_name' => array(
				array('trim'),
				array('strip_tags'),
			),
			'last_name' => array(
				array('trim'),
				array('strip_tags'),
			),
			'email' => array(
				array('trim'),
				array('strip_tags'),
			),
			'country' => array(
				array('trim'),
				array('strip_tags'),
			),
			'city' => array(
				array('trim'),
				array('strip_tags'),
			),
			'street' => array(
				array('trim'),
				array('strip_tags'),
			),
			'index' => array(
				array('trim'),
				array('strip_tags'),
			),
		);
	}


}
