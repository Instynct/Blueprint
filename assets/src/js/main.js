import Utils from './_utils';
import SmoothScrollbar from './_wolfpack';

const scrollContainer = document.querySelector('[data-wolfpack]');
const domBody = document.querySelector('body');
const App = {
	/**
	 * App.init
	 */
	init(wolfpack) {
		// Utils Scripts
		const utils = new Utils();

		let scrollBar = '';
		scrollBar = wolfpack.scrollbar;
		scrollBar.options.speed = 0.01;
		scrollBar.options.damping = 0.1;

		// Calculate True 100vh for Mobile on selected element
		const rootElements = document.querySelectorAll('[data-calc-mobile]');
		if (rootElements !== '') {
			for (let i = 0; i < rootElements.length; i += 1) {
				utils.calculateHeight(rootElements[i]);
			}
		}

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
	let wolfpack = false;
	if (scrollContainer) {
		domBody.style.height = `${window.innerHeight}px`;
		scrollContainer.style.height = `${window.innerHeight}px`;
		wolfpack = new SmoothScrollbar(scrollContainer);
		wolfpack.init();
	}
	App.init(wolfpack);
});
