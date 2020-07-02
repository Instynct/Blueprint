define(['jquery'], function ($) {
	$(document).ready(function () {
		$('[data-interactive-text]').hover(
			function () {
				$('[data-interactive-text]').addClass('background');
			},
			function () {
				$('[data-interactive-text]').removeClass('background');
			}
		);
	});
});
