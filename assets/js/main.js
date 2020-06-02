requirejs.config({
	baseUrl: 'wp-content/themes/blueprint-instynct/assets/js/',

	paths: {
		jquery: 'components/jquery-3.5.1',
		flickity: 'components/flickity',
		bridget: 'components/jquery-bridget',
		slick: 'components/slick',
	},
});

// DEFINE MODULE
require([
	'jquery',
	'modules/basic_events',
	'modules/jquery_events',
	'modules/slider',
	// 'modules/custom-module',   // require your modules here
], function ($) {
	$(document).ready(function () {
		// code that require jQuery selections should always be executed after the document is ready.
	});
}); // ... and that's about it for the main.js file.

// everything else should go under /modules and /plugins
