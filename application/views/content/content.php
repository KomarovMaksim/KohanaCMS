<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 18.03.13
 * Time: 13:49
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$site_name ?> | <?=$title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<? foreach ($scripts as $script): ?>
		<?= HTML::script($script) ?>
	<? endforeach ?>
	<? foreach ($styles as $style): ?>
		<?= HTML::style($style) ?>
	<? endforeach ?>
	<link rel="shortcut icon" href="/assets/content/content.ico"/>
</head>
<body>
<div class="main-container clearfix">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a href="/" class="brand"><i class="icon-home"></i> <?=$site_name ?></a>
				<ul class="nav user-menu pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i>
							<?=$user->username ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><?=HTML::anchor('content/auth/logout', 'Выход <i class="icon-signout"></i>') ?></li>
						</ul>
					</li>
				</ul>
				<?=$topmenu ?>
			</div>
		</div>
	</div>
	<div class="content-wrapper">
		<div class="main-content">
			<div class="row-fluid">
				<div>
					<h3><?=$title ?></h3>
					<?=$content ?>
				</div>
			</div>
		</div>
	</div>
	<a class="sidebar-switch" href="#"><i class="icon-list"></i></a>
	<div class="sidebar">
		<div class="sidebar-info">
			<ul class="unstyled">
				<li>
					<a href="/content/feedbacks" class="warning"><?=$new_feedbacks ?></a>
					Обратная связь
				</li>
			</ul>
		</div>
		<?=$menu ?>
	</div>
	<script type="text/javascript">
		$(document).ready(function () {

			$('.dropdown-toggle').dropdown();

			$('.sidebar-switch').click(function(){
				var d = $('.sidebar').css('display');
				if (d == 'none'){
					$('.sidebar').show();
					$(this).removeClass('switch-on');
					$('body').removeClass('sidebar-hidden');
				}else{
					$('.sidebar').hide();
					$(this).addClass('switch-on');
					$('body').addClass('sidebar-hidden');
				}

			});
		});
	</script>
</div>
</body>
</html>