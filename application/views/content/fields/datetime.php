<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 28.03.13
 * Time: 12:40
  */
?>

<label><?=htmlspecialchars($title) ?></label>
<div id="<?=$name ?>" class="input-append date">
<input data-format="dd.MM.yyyy hh:mm:ss" name="<?=$name ?>" type="text" value="<?=htmlspecialchars($value)?>" class="input-block-level" />
<span class="add-on">
	<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
</span>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#<?=$name ?>').datetimepicker({language: 'ru'});
	})
</script>
