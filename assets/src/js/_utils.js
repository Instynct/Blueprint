export default class Utils {
	constructor() {
		this.element = '';
	}

	calculateHeight(element) {
		// Calculate height for mobile
		const windowH = window.innerHeight;
		this.element = element;
		this.element.style.height = `${windowH}px`;
	}
}
