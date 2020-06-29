import Flickity from 'flickity';

class Slider {
	constructor() {
		this.elem = document.querySelector('.formation-carousel');
		this.flkty = '';
		this.init();
	}

	init() {
		this.flkty = new Flickity(this.elem, {
			// options
			cellAlign: 'left',
			contain: true,
		});
	}
}

export default Slider;
