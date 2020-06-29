import 'babel-polyfill';

import General from './_generalScripts';
import Slider from './_slider';

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
		initGeneral();
		initSlider();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
