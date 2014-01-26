<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 11.04.13
 * Time: 3:40
  */
?>

<label class="checkbox" for="<?=$name ?>">
<input id="<?=$name ?>" name="<?=$name ?>" type="checkbox" <?=$value ? 'checked="checked"' : ''?> />
<?=htmlspecialchars($title) ?>
</label>
