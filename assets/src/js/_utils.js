export default class Utils {
	constructor() {
		this.element = '';
	}

	calculateHeight(element) {
		// Calculate height for mobile
		this.element = element;
		this.element.classList.add('height-calc');

		const viewPortH = this.element.getBoundingClientRect().height;
		const windowH = window.innerHeight;
		const browserUiBarsH = viewPortH - windowH;
		this.element.style.height = `calc(100vh - ${browserUiBarsH}px)`;
	}
}
