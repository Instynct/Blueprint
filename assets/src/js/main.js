import LocomotiveScroll from 'locomotive-scroll';
import Utils from './_utils';

const App = {
	/**
	 * App.init
	 */
	init() {
		// Utils Scripts
		const utils = new Utils();
		const scroll = new LocomotiveScroll({
			el: document.querySelector('[data-wolfpack]'),
			smooth: true,
			tablet: {
				smooth: true,
				direction: 'vertical',
				gestureDirection: 'vertical',
				breakpoint: 1024,
			},
		});
		console.log(scroll.tablet.smooth);
		console.log(scroll);
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
