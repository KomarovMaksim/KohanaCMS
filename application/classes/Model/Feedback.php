<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 11.04.13
 * Time: 21:19
  */
class Model_Feedback extends ORM {

	public function labels() {
		return array(
			'name' => 'Имя',
			'email' => 'E-mail',
			'company' => 'Компания',
			'dolj' => 'Должность',
			'phone' => 'Телефон',
			'pochta' => 'Адрес почтовый',
			'sub' => 'Тема письма',
			'message' => 'Текстовая форма',
		);
	}

	public function rules() {
		return array(
			'name' => array(
				array('not_empty'),
			),
			'email' => array(
				array('not_empty'),
				array('email'),
			),
			'message' => array(
				array('not_empty'),
			),
			'sub' => array(
				array('not_empty'),
			),
		);
	}

	public function filters() {
		return array(
			'name' => array(
				array('trim'),
				array('strip_tags'),
			),
			'email' => array(
				array('trim'),
				array('strip_tags'),
			),
				'company' => array(
				array('trim'),
				array('strip_tags'),
			),
				'dolj' => array(
				array('trim'),
				array('strip_tags'),
			),
				'phone' => array(
				array('trim'),
				array('strip_tags'),
			),
				'pochta' => array(
				array('trim'),
				array('strip_tags'),
			),
				'sub' => array(
				array('trim'),
				array('strip_tags'),
			),
			'message' => array(
				array('trim'),
				array('strip_tags'),
			),
		);
	}


}
