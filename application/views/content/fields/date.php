<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 26.03.13
 * Time: 2:39
  */
?>

<label for="<?=$name ?>"><?=htmlspecialchars($title) ?></label>
<input id="<?=$name ?>" name="<?=$name ?>" type="text" value="<?=htmlspecialchars($value)?>" class="input-block-level" />
<script type="text/javascript">
	$(document).ready(function(){
		$('#<?=$name ?>').datepicker({format: 'dd.mm.yyyy'});
	})
</script>
