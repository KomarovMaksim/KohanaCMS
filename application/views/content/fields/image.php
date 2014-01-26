<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 25.03.13
 * Time: 0:19
 * Changed: 12.04.13
 */
?>

<? $id = rand(10000, 99999) ?>
<br/>
<label><?=htmlspecialchars($title) ?></label>
<?php
$style = '';
$style = isset($options['width']) ? 'width: ' . $options['width'] . 'px;' : $style;
$style = isset($options['height']) ? $style . 'height: ' . $options['height'] . 'px;' : $style;
$style = $style . 'display: table;';
$style = 'style="' . $style . '"';
?>
<div class="thumbnail" <?=$style ?> >
	<img id="img<?=$id ?>" src="<?=empty($value) ? '/assets/content/images/empty.png' : $value ?>" <?=$style ?> />
</div>
<input id="<?=$id ?>" name="<?=$name ?>" type="hidden" value="<?=$value ?>"/>
<? if (!isset($options['changeable']) || $options['changeable']): ?>
	<button id="btn<?=$id?>" class="btn btn-mini">Выбрать</button>
	<button id="remove<?=$id?>" class="btn btn-mini">Убрать</button>
<? endif ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#remove<?=$id ?>').click(function (e) {
			e.preventDefault();
			$('#img<?=$id ?>').prop('src', '/assets/content/images/empty.png');
			$('#<?=$id ?>').val('');
		})

		$('#btn<?=$id ?>').click(function (e) {
			e.preventDefault();

			var form = $('<form></form>');
			form.prop('method', 'post');
			form.prop('target', 'elfinder_<?=$id ?>');
			form.prop('action', '/content/elfinder');
			form.append($('<input type="hidden" name="sender" value="<?=$id ?>" />'));
			popup('about:blank', 'elfinder_<?=$id ?>');
			$('body').append(form);
			form.submit();
			form.remove();
		});


		setInterval(function () {
			$('#img<?=$id ?>').attr('src', $('#<?=$id ?>').val());
		}, 1000);
		$('#<?=$id?>').on('custom', function () {
			console.log('change');
			$('#img<?=$id ?>').attr('src', $(this).val());
		});
	})
</script>
