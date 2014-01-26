<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?=$site_name ?> | <?=$title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<? foreach ($scripts as $script): ?>
		<?= HTML::script($script) ?>
	<? endforeach ?>
	<? foreach ($styles as $style): ?>
		<?= HTML::style($style) ?>
	<? endforeach ?>
	<link rel="shortcut icon" href="/assets/content/content.ico"/>
	<style type="text/css">
		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>

<div class="container">
	<?=Form::open('content/auth/login', array('class' => 'auth-form')) ?>
	<h3><?=$page_title ?></h3>
	<?=Form::input('username', '', array('class' => 'input-block-level', 'placeholder' => 'Имя пользователя')) ?>
	<?=Form::password('password', '', array('class' => 'input-block-level', 'placeholder' => 'Пароль')) ?>
	<label class="checkbox">
		<?=Form::checkbox('remember') ?>
		Запомнить меня
	</label>
	<?=Form::submit('submit', 'Войти', array('class' => 'btn btn-large btn-primary')) ?>
	<?=Form::close() ?>

	<?if ($errors): ?>
		<? foreach ($errors as $error): ?>
			<div style="width: 640px; margin: 0 auto;" class="alert alert-error"><b>Ошибка: </b><?=$error ?></div>
		<? endforeach ?>
	<? endif ?>
</div>

</body>
</html>