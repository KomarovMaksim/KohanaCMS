<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 12.04.13
 * Time: 2:43
 */
?>

<a class="btn btn-inverse" href="/content/orders"><i class="icon-list"></i> К заказам</a>

<table class="table">
	<thead>
	<tr>
		<th colspan="2">
			Сведения о покупателе
		</th>
	</tr>
	</thead>
	<tr>
		<td>Имя</td>
		<td><?=$order->name ?></td>
	</tr>
	<tr>
		<td>Телефон</td>
		<td><?=$order->phone ?></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td><?=$order->email ?></td>
	</tr>
	<tr>
		<th colspan="2">
			Сведения о мероприятии
		</th>
	</tr>
	<tr>
		<td>Дата проведения</td>
		<td><?=$order->date ?></td>
	</tr>
	<tr>
		<td>Площадка</td>
		<td><?=$order->area->title ?></td>
	</tr>
	<tr>
		<td>Кол-во человек</td>
		<td><?=$order->amount ?></td>
	</tr>

</table>