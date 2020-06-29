import 'babel-polyfill';

import General from './_generalScripts';
import Slider from './_slider';
import Scroll from './_scroll';
import IsIE from './_is_ie';

const App = {
	/**
	 * App.init
	 */
	init() {
		// General scripts
		function checkIfIE() {
			return new IsIE();
		}
		function initGeneral() {
			return new General();
		}
		function initSlider() {
			return new Slider();
		}
		function initScroll() {
			return new Scroll();
		}
		checkIfIE();
		initGeneral();
		initSlider();
		initScroll();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
