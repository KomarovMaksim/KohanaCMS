<?php
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 09.03.13
 * Time: 22:08
 * Changed: 12.04.13
 */
class HTTP_Exception extends Kohana_HTTP_Exception {
	public function get_response() {
		Kohana_Exception::log($this);

		if (Kohana::$environment == Kohana::DEVELOPMENT) {
			return parent::get_response();
		}
		else {
			$view = View::factory('error');

			$response = Response::factory()
				->status($this->getCode())
				->body($view->render());

			return $response;
		}
	}
}
