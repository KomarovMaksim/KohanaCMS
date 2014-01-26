<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 25.03.13
 * Time: 0:18
  */
?>

<label for="<?=$name ?>"><?=htmlspecialchars($title) ?></label>
<textarea rows="<?=isset($options['rows']) ? $options['rows'] : 10 ?>" id="<?=$name ?>" name="<?=$name ?>" class="input-block-level" ><?=$value ?></textarea>
<? if ($options['ckeditor'] !== FALSE): ?>
<script type="text/javascript">
	$(document).ready(function(){
		CKEDITOR.replace('<?=$name ?>');
	})
</script>
<? endif ?>