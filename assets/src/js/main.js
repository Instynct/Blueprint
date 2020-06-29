import 'babel-polyfill';

import General from './_generalScripts';
import Slider from './_slider';
import Scroll from './_scroll';

const App = {
	/**
	 * App.init
	 */
	init() {
		// General scripts
		function initGeneral() {
			return new General();
		}
		function initSlider() {
			return new Slider();
		}
		function initScroll() {
			return new Scroll();
		}
		initGeneral();
		initSlider();
		initScroll();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
