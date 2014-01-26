<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 24.03.13
 * Time: 23:49
  */
?>

<?foreach ($errors as $error):?>
	<div class="alert alert-error"><b>Ошибка: </b><?=$error?></div>
<?endforeach?>

<form method="post">
	<? foreach($fields as $field): ?>
		<?=$field ?>
	<? endforeach ?>
	<div class="form-actions">
		<? $caption = (isset($operations['back']) && isset($operations['back']['title'])) ? $operations['back']['title'] :'К списку'; ?>
		<? $action = (isset($operations['back']) && isset($operations['back']['url'])) ? $operations['back']['url'] :'./'; ?>
		<a href="<?=$action ?>" class="btn pull-right"><i class="icon-list"></i> <?=$caption ?></a>
		<? $caption = isset($operations['submit']) ? $operations['submit'] : 'Сохранить';?>
		<button class="btn btn-inverse pull-right" type="submit" value="submitted" name="submitter"><i class="icon-save"></i> <?=$caption ?></button>
	</div>
</form>