import LocomotiveScroll from 'locomotive-scroll';
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

		const scroll = new LocomotiveScroll({
			el: document.querySelector('[data-wolfpack]'),
			smooth: true,
		});

		// Resize functions
		window.addEventListener('resize', () => {
			domBody.style.height = `${window.innerHeight}px`;
			scrollContainer.style.height = `${window.innerHeight}px`;
			for (let i = 0; i < rootElements.length; i += 1) {
				utils.calculateHeight(rootElements[i]);
			}
		});
	},
};

document.addEventListener('DOMContentLoaded', () => {
	App.init();
});
