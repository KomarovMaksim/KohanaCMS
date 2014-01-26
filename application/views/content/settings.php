<?if ($errors): ?>
		<? foreach ($errors as $error): ?>
			<div class="alert alert-error"><b>Ошибка: </b><?=$error?></div>
		<? endforeach ?>
	<? endif?>

	<?=Form::open() ?>
	<?=Form::label('newpass', 'Новый пароль')?><?=Form::password('newpass', $newpass, array('class' => 'input-block-level'))?>
	<?=Form::label('confpass', 'Подтвердите пароль')?><?=Form::password('confpass', $confpass, array('class' => 'input-block-level'))?>
	<?=Form::label('email', 'E-mail')?><?=Form::input('email', $email, array('class' => 'input-block-level'))?>
	<br />
	<?=Form::label('reminder', 'E-mail для оповещений')?><?=Form::input('reminder', $reminder, array('class' => 'input-block-level'))?>
	<br />
	<?=Form::submit('submit', 'Сохранить', array('class' => 'btn btn-primary pull-right'))?>
	<?=Form::close()?>
	<div class="extra"></div>
