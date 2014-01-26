<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 05.04.13
 * Time: 2:01
 */
?>

<label for="<?=$name ?>"><?=htmlspecialchars($title) ?></label>
<select id="<?=$name ?>" name="<?=$name ?>">
	<option value=""></option>
	<? foreach ($options['values'] as $key => $val): ?>
		<option value="<?=$key ?>"<?=$key==$value ? ' selected="selected"' : '' ?>><?=htmlspecialchars($val)?></option>
	<? endforeach ?>
</select>

