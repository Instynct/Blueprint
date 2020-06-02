define(['jquery', 'flickity', 'bridget'], function ($, Flickity) {
	$(document).ready(function () {
		$.bridget('flickity', Flickity, $);
		$('.formation-carousel').flickity({
			// options
			cellAlign: 'left',
			contain: true,
		});
	});
});
