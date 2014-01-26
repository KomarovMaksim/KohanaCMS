<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 20.03.13
 * Time: 13:41
 */
?>
<!DOCTYPE html>
<html>
<head>
	<? foreach ($scripts as $script): ?>
		<?= HTML::script($script) ?>
	<? endforeach ?>
	<? foreach ($styles as $style): ?>
		<?= HTML::style($style) ?>
	<? endforeach ?>
<script type="text/javascript" charset="utf-8">
	function getUrlParam(paramName) {
		var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
		var match = window.location.search.match(reParam) ;

		return (match && match.length > 1) ? match[1] : '' ;
	}

	$(document).ready(function() {
			var langCode = window.location.search.replace(/^.*langCode=([a-z]{2}).*$/, "$1");
			var funcNum = getUrlParam('CKEditorFuncNum');

			$('#finder').elfinder({
				height: $(window).height()-50,
				url: '/content/ajax/elfinder/cmd/',
				<? if ($options['ckeditor'] === TRUE): ?>
				getFileCallback : function(file) {
					window.opener.CKEDITOR.tools.callFunction(funcNum, file);
					window.close();
				},
				<? elseif ($options['sender'] !== FALSE): ?>
				getFileCallback : function(file) {
					var sender = $('#<?=$options['sender'] ?>', window.opener.document);
					sender.val(file);
					window.close();
				},
				<? endif ?>
				commandsOptions: {
					getfile: {
						onlyURL: <?=$options['onlyURL'] ? 'true' : 'false' ?>,
						folders: <?=$options['folders'] ? 'true' : 'false' ?>,
						multiple : <?=$options['multiple'] ? 'true' : 'false' ?>
					}
				},
				lang: 'ru'
			})
		}
	);


</script>
</head>
<body>
<div id="finder">finder</div>
</body>
</html>