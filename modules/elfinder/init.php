<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 07.04.13
 * Time: 5:12
  */

Route::set('elfinder_ajax', 'content/ajax/elfinder(/<action>(/<cmd>))')
	->defaults(array(
		'directory'  => 'Content/Ajax',
		'controller' => 'Elfinder',
		'action'     => 'index',
	));


