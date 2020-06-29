import ScrollMagic from 'scrollmagic';
import { TweenMax, TimelineMax } from 'gsap';
import { ScrollMagicPluginGsap } from 'scrollmagic-plugin-gsap';

ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);
class Scroll {
	constructor() {
		this.controller = new ScrollMagic.Controller();
		this.scene = new ScrollMagic.Scene({ triggerElement: '#home-experience-routes', triggerHook: '0', duration: '100%' }).setPin('#home-experience-routes').setTween('.home-experience-slider', { transform: 'translateX(-50%)' }).addTo(this.controller);
		this.init();
	}

	init() {
		$(window).bind('load resize', function loadResize() {
			if ($(window).width() >= 1024) {
				this.scene.enabled(true);
			} else {
				this.scene.enabled(false);
			}
		});
	}
}

export default Scroll;
