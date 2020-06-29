import Flickity from 'flickity';

console.log(Flickity);
class Slider {
	constructor() {
		this.testVariable = 'slider loading';
		this.init();
	}

	init() {
		var flkty = new Flickity('.formation-carousel');
		console.log(flkty, {
			// options
			cellAlign: 'left',
			contain: true,
		});
		console.log(this.testVariable);
	}
}

export default Slider;
