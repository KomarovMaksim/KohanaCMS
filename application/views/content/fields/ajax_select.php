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
</select>
<script type="text/javascript">
	var loaded = false;
	$(document).ready(function(){
		$('[name="<?=$options['dependency'] ?>"]').change(function(){
			var data = {
				<?=$options['dependency'] ?>: $(this).val()
			};
			$.post('<?=$options['url'] ?>', data, function(response){
				if (response.result){
					var select = $('[name="<?=$name ?>"]');
					select.empty();
					select.append($('<option></option>'));
					for(key in response.data){
						select.append($('<option>'+response.data[key]+'</option>').prop('value', key));
					}
					if (!loaded){
						loaded = true;
						$('[name="<?=$name ?>"] option[value="<?=$value ?>"]').prop('selected', true);
					}
				}
			}, 'json')
		});

		$('[name="<?=$options['dependency'] ?>"]').trigger('change');

	});
</script>

