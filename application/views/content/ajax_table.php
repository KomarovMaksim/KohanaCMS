<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 18.03.13
 * Time: 13:49
  */
?>

<div id="<?=$options['id'] ?>">

</div>
<script type="text/javascript">
	$(document).ready(function(){
		window.table = new AJAXTable($.parseJSON('<?=json_encode($options) ?>'));
		window.table.getData(<?=$pagination['page']?>, <?=$pagination['per_page'] ?>);
		$(document).on('click', '.btn-ajax', function(e){
			e.preventDefault();
			$.post($(this).prop('href'),function(){
				window.table.getData();
			});
		})
		$(document).on('click', '.page', function(e){
			e.preventDefault();
			var page = $(this).prop('rel');
			window.table.getData(page);

		})
	})
</script>
