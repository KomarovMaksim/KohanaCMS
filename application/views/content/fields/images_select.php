<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 14.04.13
 * Time: 6:24
 */
?>

<div id="<?=$name?>">
	<label><?=htmlspecialchars($title) ?></label>
	<a class="btn btn-inverse btn-add" href="#"><i class="icon-plus icon-white"></i> Add</a>
	<div class="images">
	</div>
	<div class="clearfix"></div>
</div>
<script type="text/javascript">

	$(document).ready(function () {
		var loaded_images = $.parseJSON('<?=json_encode($value)?>');
		_.each(loaded_images, function(image){
			var image = _.template($('#image-block-template').html(),{src: image, val: image});
			$('#<?=$name ?> .images').append(image);
		});

		$('#<?=$name?> .btn-add').click(function (e) {
			e.preventDefault();

			var image = _.template($('#image-block-template').html(),{src: '/assets/admin/images/empty.png', val:''});
			$('#<?=$name ?> .images').append(image);
		});

		$(document).on('click', '#<?=$name ?> .remove', function (e) {
			e.preventDefault();

			var image = $(this).closest('.image');
//			$('img', image).prop('src', '/assets/admin/images/empty.png');
//			$('input', image).val('');
			image.remove();
		})

		$(document).on('click', '#<?=$name ?> .choose', function (e) {
			e.preventDefault();

			var image = $(this).closest('.image');
			var id = Math.floor(Math.random() * (9000)) + 1000;
			$('input', image).prop('id', id);

			var form = $('<form></form>');
			form.prop('method', 'post');
			form.prop('target', 'elfinder_<?=$name ?>');
			form.prop('action', '/content/elfinder');
			form.append($('<input type="hidden" name="sender" value="'+id+'" />'));
			form.append($('<input type="hidden" name="folders" value="false" />'));
			form.append($('<input type="hidden" name="onlyMimes[]" value="image" />'));

			var root = $('#<?=$options['root']['dependency'] ?>').val();
			form.append($('<input type="hidden" name="root" value="'+root+'" />'));
			popup('about:blank', 'elfinder_<?=$name ?>');
			$('body').append(form);
			form.submit();
			form.remove();
		});
		<? if (isset($options['root']) && isset($options['root']['dependency'])): ?>
		/*
		 $('#<?=$name ?>').change(function(){
		 var value = $('#<?=$name ?>').val();
		 var root = $('#<?=$options['root']['dependency'] ?>').val();
		 value = value.replace(root, '');
		 $('#<?=$name ?>').val(value);
		 });
		 */
		setInterval(function () {
			$('#<?=$name ?> input').each(function(){
				var value = $(this).val();
				var root = $('#<?=$options['root']['dependency'] ?>').val();
				value = value.replace(root, '');
				$(this).val(value);
			})
		}, 1000);
		<? endif ?>

		$('#<?=$options['root']['dependency'] ?>').change(function(){
			if ($('#<?=$options['root']['dependency'] ?>').val() != '')
				$('#<?=$name ?>').show();
			$('#<?=$name?> .images').empty();
		});

		if ($('#<?=$options['root']['dependency'] ?>').val() == ''){
			$('#<?=$name ?>').hide();
		}


		setInterval(function () {
			$('#<?=$name ?> img').each(function(){
				var image = $(this).closest('.image');
				var root = $('#<?=$options['root']['dependency'] ?>').val();
				$(this).prop('src', root+$('input', image).val());
			});
		}, 1000);
	});
</script>
<script type="text/template" id="image-block-template">
	<div class="image" style="float: left; margin-left: 15px">
		<?php
		$style = '';
		$style = isset($options['width']) ? 'width: ' . $options['width'] . 'px;' : $style;
		$style = $style . 'display: table;';
		$img_style = 'style="' . $style . '"';
		$style = isset($options['height']) ? $style . 'height: ' . $options['height'] . 'px;' : $style;
		$style = 'style="' . $style . '"';
		?>
		<div class="thumbnail" <?=$img_style ?> >
			<img src="<%= src %>" <?=$img_style ?> />
		</div>
		<input name="<?=$name ?>[]" type="hidden" value="<%= val %>"/>
		<button class="btn btn-mini choose">Выбрать</button>
		<button class="btn btn-mini remove">Удалить</button>
	</div>
</script>