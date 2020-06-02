/*! snoros v0.0.1 | (c) 2020 Instynct | MIT License | http://link-to-your-git-repo.com */
if (typeof jQuery === 'function')
	define('jquery', (function () {
		return jQuery;
	}));

requirejs.config({
	baseUrl: 'wp-content/themes/blueprint-instynct/assets/js/',
	path: {
		config: 'config/rjs-config.js',
		flickity: 'components/flickity.js',
		jquery: 'components/jquery-3.5.1.js',
	},
});

// DEFINE MODULE
require([
	'config',
	'jquery',
	'modules/jquery_events.js',
	'modules/basic_events.js',
	// 'modules/custom-module',   // require your modules here
], (function ($) {
	$(document).ready((function () {
		// code that require jQuery selections should always be executed after the document is ready.
	}));
}));
