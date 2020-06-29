import ScrollMagic from 'scrollmagic';
import { TweenMax, TimelineMax } from 'gsap';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);
console.log(ScrollMagic);
class Scroll {
	constructor() {
		this.testVariable = 'scrollmagic loading';
		this.init();
	}

	init() {
		var controller = new ScrollMagic.Controller();
		console.log(controller);
		$(function () {
			// wait for document ready
			// build scene
			var scene = new ScrollMagic.Scene({ triggerElement: '#home-experience-routes', triggerHook: '0', duration: '100%' }).setPin('#home-experience-routes').setTween('.home-experience-slider', { transform: 'translateX(-50%)' }).addTo(controller);
			$(window).bind('load resize', function () {
				if ($(window).width() >= 1024) {
					scene.enabled(true);
				} else {
					scene.enabled(false);
				}
			});
		});
	}
}

export default Scroll;
