import '@babel/polyfill';

import Utils from './_utils';

const App = {
	/**
	 * App.init
	 */
	init() {
		// Utils Scripts
		const utils = new Utils();

		// Calculate True 100vh for Mobile on selected element
		const rootElements = document.querySelectorAll('[data-calc-mobile]');
		if (rootElements !== '') {
			for (let i = 0; i < rootElements.length; i += 1) {
				utils.calculateHeight(rootElements[i]);
			}
		}
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
