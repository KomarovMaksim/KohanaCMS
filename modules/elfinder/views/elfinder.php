<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Copyright 2013 Anatoliy Tszyan
 * Author: Anatoliy Tszyan
 * E-mail: anatoliy.tszyan@gmail.com
 * Date: 20.03.13
 * Time: 13:41
 */
?>
<script type="text/javascript" charset="utf-8">
	$(document).ready(function () {
		var langCode = window.location.search.replace(/^.*langCode=([a-z]{2}).*$/, "$1");
		$('#finder').elfinder({
			height: $(window).height() - 100,
			url: '/content/ajax/elfinder/cmd/',
			lang: langCode
		})
	})
</script>
<div id="finder">finder</div>

