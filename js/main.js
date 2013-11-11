var WebFontConfig = {
	google: {
		families: [ 'Roboto:400,400italic,700,700italic,500,500italic:latin' ]
	}
};

(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
}());

;(function ($) {$(document).ready(function () {
	var submenus = $('#header_nav > nav > ul > li > .sub-menu'),
		submenuWrapper = $('.secondary-nav-bg'),
		primaryWrapper = $('.primary-nav-bg'),
		submenuHeight = null;


	// // event.preventDefault();
	// submenuHeight = submenus.filter( function (index) {
	// 	return $(this).is(':visible');
	// }).height();
	// submenuWrapper.height(primaryWrapper.height() + submenuHeight);



	// submenus.show().height(200);









});}(jQuery));
