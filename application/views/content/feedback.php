<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 12.04.13
 * Time: 2:43
 */
?>

<a class="btn btn-inverse" href="/content/feedbacks"><i class="icon-list"></i> К записям</a>

<table class="table">
	<thead>
	<tr>
		<th colspan="2">
			Сведения о клиенте
		</th>
	</tr>
	</thead>
	<tr>
		<td>Имя</td>
		<td><?=$feedback->name ?></td>
	</tr>
	<tr>
		<td>Телефон</td>
		<td><?=$feedback->phone ?></td>
	</tr>
	<tr>
		<td>Желаемое время приема</td>
		<td><?=$feedback->time ?></td>
	</tr>
	<tr>
		<th colspan="2">
			Сведения о животном
		</th>
	</tr>
	<tr>
		<td>Вид</td>
		<td><?=$feedback->type ?></td>
	</tr>
	<tr>
		<td>Пол</td>
		<td><?=$feedback->sex ?></td>
	</tr>
	<tr>
		<td>Возраст</td>
		<td><?=$feedback->years ?></td>
	</tr>
	<tr>
		<td>Кастрировано</td>
		<td><? if ($feedback->cut): ?> Да <? else: ?> Нет <? endif ?></td>
	</tr>
	<tr>
		<th colspan="2">
			Сведения о проблеме
		</th>
	</tr>
	<tr>
		<td>Описание</td>
		<td><?=$feedback->message ?></td>
	</tr>
	<tr>
		<td>Необходимый специалист</td>
		<td><?=$feedback->specialist ?></td>
	</tr>
	<tr>
		<td>Конкретный доктор</td>
		<td><?=$feedback->doctor ?></td>
	</tr>

</table>