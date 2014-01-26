<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 24.03.13
 * Time: 22:29
  */?>

<div id="side_accordion" class="accordion">

	<div class="accordion-group">
		<div class="accordion-heading">
			<a href="#collapseCatalog" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
				<i class="icon-th"></i> Контент
			</a>
		</div>
		<div class="accordion-body collapse<? if ($active_menu == 'content'): ?> in<? endif ?>" id="collapseCatalog">
			<div class="accordion-inner">
				<ul class="nav nav-list">
					<li><a href="/content/menu">Меню</a></li>
					<li><a href="/content/sections">Разделы</a></li>
					<li><a href="/content/articles">Статьи</a></li>
					<li><a href="/content/pages">Страницы</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a href="#collapseMedia" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
				<i class="icon-film"></i> Медиа
			</a>
		</div>
		<div class="accordion-body collapse<? if ($active_menu == 'media'): ?> in<? endif ?>" id="collapseMedia">
			<div class="accordion-inner">
				<ul class="nav nav-list">
				    <li><a href="/content/events">События</a></li>
					<li><a href="/content/slider">Слайдер</a></li>
					<li><a href="/content/splash">Картинка на главной</a></li>
				    <li><a href="/content/banner">Баннеры</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div class="accordion-heading">
			<a href="#collapseDicts" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
				<i class="icon-book"></i> Справочники
			</a>
		</div>
		<div class="accordion-body collapse<? if ($active_menu == 'dicts'): ?> in<? endif ?>" id="collapseDicts">
			<div class="accordion-inner">
				<ul class="nav nav-list">
					<li><a href="/content/tags">Тэги</a></li>
				</ul>
			</div>
		</div>
	</div>
		<div class="accordion-group">
		<div class="accordion-heading">
			<a href="#collapseClients" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
				<i class="icon-group"></i> Клиенты
			</a>
		</div>
		<div class="accordion-body collapse<? if ($active_menu == 'clients'): ?> in<? endif ?>" id="collapseClients">
			<div class="accordion-inner">
				<ul class="nav nav-list">
					<li><a href="/content/subscriptions">Подписки</a></li>
					<li><a href="/content/feedbacks">Обратная связь</a></li>
				</ul>

			</div>
		</div>
	</div>
	<div class="accordion-group sys-menu">
		<div class="accordion-heading">
			<a href="#collapseSystem" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
				<i class="icon-cogs"></i> Система
			</a>
		</div>
		<div class="accordion-body collapse<? if ($active_menu == 'system'): ?> in<? endif ?>" id="collapseSystem">
			<div class="accordion-inner">
				<ul class="nav nav-list">
					<li><a href="/content/files">Файлы</a></li>
					<li><a href="/content/settings">Настройки</a></li>
					<li><a href="/content/about">О системе</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>