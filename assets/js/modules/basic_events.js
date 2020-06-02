//
//
// DEFINE MODULE
define(['jquery', 'flickity'], function ($) {
	$('.formation-carousel').flickity({
		cellAlign: 'left',
		contain: true,
		prevNextButtons: false,
		pageDots: false,
		wrapAround: true,
	});
});
