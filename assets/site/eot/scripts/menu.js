function enableSubmenu(boxId, itemId) {
	jQuery('#' + boxId + ' > div').hide();
	jQuery('#' + boxId + itemId).show();
	jQuery('#li' + boxId + itemId).parent().children('li').removeClass('menuSelected');
	jQuery('#li' + boxId + itemId).addClass('menuSelected');
}

function resetSubmenu(boxId) {
	enableSubmenu(boxId, '1');
}