<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 03.10.13
 * Time: 19:10
 *
 * Modified 28.11.2013
  */
?>

<label for="<?=$name ?>"><?=htmlspecialchars($title) ?></label>
<select class="input-block-level"<? if (isset($options['placeholder'])): ?> data-placeholder="<?=$options['placeholder'] ?>"<? endif ?> multiple="multiple" id="<?=$name ?>" name="<?=$name ?>[]" <? if (isset($options['size'])): ?>size="<?=$options['size'] ?>"<? endif ?>>
	<? foreach ($options['values'] as $key => $val): ?>
		<option value="<?=$key ?>"<?=(is_array($value) && in_array($key, $value)) ? ' selected="selected"' : '' ?>><?=htmlspecialchars($val)?></option>
	<? endforeach ?>
</select>
<script type="text/javascript">
	$(function(){
		$('#<?=$name ?>').chosen({

		});
	})
</script>