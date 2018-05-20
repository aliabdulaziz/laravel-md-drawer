
require('./jquery-color');

// Drawer Plugin
$.fn.useDrawer = function(drawerSelector) {
	let selector = drawerSelector;
	this.click(function (event) {
		$(selector).show();
		$(selector).find('.drawer-content').animate({
			margin: 0,
		}, 150);
		$(selector).animate({
			backgroundColor: 'rgba(0,0,0,0.7)',
		}, 150);
	});
}

$(document).click(function(event) {
	if ($(event.target).hasClass('drawer-left')) {
		$(event.target).find('.drawer-content').animate({
			marginLeft: '-250px',
		}, 150, function() {
			$(event.target).hide();
		});
		$(event.target).animate({
			backgroundColor: 'rgba(0,0,0,0)',
		}, 150);
	} else if ($(event.target).hasClass('drawer-right')) {
		$(event.target).find('.drawer-content').animate({
			marginRight: '-250px',
		}, 150, function() {
			$(event.target).hide();
		});
		$(event.target).animate({
			backgroundColor: 'rgba(0,0,0,0)',
		}, 150);
	}
});