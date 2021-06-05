/* eslint-disable */
import Scrollbar from 'smooth-scrollbar';
import OverscrollPlugin from 'smooth-scrollbar/plugins/overscroll';
import TweenMax from 'gsap';

class NavPlugin extends ScrollbarPlugin {
	static pluginName = 'modal';

	static defaultOptions = {
		open: false,
	};

	transformDelta(delta) {
		return this.options.open ? { x: 0, y: 0 } : delta;
	}
}

Scrollbar.use(NavPlugin, OverscrollPlugin);

export default class SmoothScrollbar {
	constructor(scrollContainer) {
		this.container = scrollContainer;
		this.scrollbarOptions = {
			speed: 0.1,
			damping: 0.2,
			plugins: {
				overscroll: false,
			},
		};
		this.scrollbar = Scrollbar.init(this.container, this.scrollbarOptions);
	}

	init() {
		// Initialize Smooth Scrollbar

		this.scrollbar.track.xAxis.element.remove();
		const scrollbar = this.scrollbar;

		// MARQUEE
		const marqueeElements = document.querySelectorAll('[data-marquee]');
		if (marqueeElements.length > 0) {
			for (let i = 0; i < marqueeElements.length; i++) {
				const thisMarquee = marqueeElements[i];
				const marqueeSpeed = thisMarquee.getAttribute('data-marquee');
				if (marqueeSpeed === '') {
					const marqueeHTML = thisMarquee.innerHTML;
					const marqueeNewHTML = '<div class="marquee"><div class="marquee-content" style="animation-duration:20s"><p>' + marqueeHTML + '</p><p>' + marqueeHTML + '</p><p>' + marqueeHTML + '</p><p>' + marqueeHTML + '</p><p>' + marqueeHTML + '</p></div></div>';
					thisMarquee.innerHTML = marqueeNewHTML;
				} else {
					const marqueeHTML = thisMarquee.innerHTML;
					const marqueeNewHTML = '<div class="marquee"><div class="marquee-content" style="animation-duration:' + marqueeSpeed + 's"><p>' + marqueeHTML + '</p><p>' + marqueeHTML + '</p><p>' + marqueeHTML + '</p><p>' + marqueeHTML + '</p><p>' + marqueeHTML + '</p></div></div>';
					thisMarquee.innerHTML = marqueeNewHTML;
				}
			}
			const marqueeContainers = document.querySelectorAll('.marquee');
			for (let i = 0; i < marqueeContainers.length; i++) {
				const thisMarqueeContainer = marqueeContainers[i];
				const marqueeContainerHTML = thisMarqueeContainer.innerHTML;
				thisMarqueeContainer.innerHTML = marqueeContainerHTML + marqueeContainerHTML;
			}
		}

		// ANCHORS
		var anchorElements = document.querySelectorAll('a[href*="#"]');
		function wolfpackAnchors() {
			if (location.hash) {
				setTimeout(() => {
					window.scrollTo(0, 0);
					scrollbar.scrollIntoView(document.querySelector(location.hash));
					return false;
				}, 1);
			}
			var pathname = window.location.pathname;
			for (let i = 0; i < anchorElements.length; i++) {
				if (anchorElements[i].pathname == pathname) {
					anchorElements[i].onclick = function (event) {
						event.preventDefault();
						scrollbar.scrollIntoView(document.querySelector(anchorElements[i].getAttribute('href').replace('/', '')));
						return false;
					};
				}
			}
		}
		window.addEventListener('resize', wolfpackAnchors);
		setTimeout(() => {
			window.scrollTo(0, 0);
			scrollbar.scrollIntoView(document.querySelector('main'));
			wolfpackAnchors();
		}, 100);

		// PARALLAX
		const parallaxElements = document.querySelectorAll('[data-parallax]');
		if (parallaxElements.length > 0) {
			for (let i = 0; i < parallaxElements.length; i++) {
				const thisParallaxElement = parallaxElements[i];
				let scrollPoisition200;
				scrollbar.addListener(function scrollbarListener(status) {
					const parallaxOffset = thisParallaxElement.getAttribute('data-parallax');
					if (parallaxOffset === '') {
						const defaultOffset = 6;
						if (scrollbar.isVisible(thisParallaxElement)) {
							const scrollPositionGeneral = status.offset.y;
							if (scrollPoisition200 === undefined) {
								scrollPoisition200 = status.offset.y;
							}
							const parallaxTranslate = (scrollPositionGeneral - scrollPoisition200) / defaultOffset;
							thisParallaxElement.style.transform = `translateY(${parallaxTranslate}px`;
						}
					} else {
						if (scrollbar.isVisible(thisParallaxElement)) {
							const scrollPositionGeneral = status.offset.y;
							if (scrollPoisition200 === undefined) {
								scrollPoisition200 = status.offset.y;
							}
							const parallaxTranslate = (scrollPositionGeneral - scrollPoisition200) / parseFloat(parallaxOffset);
							thisParallaxElement.style.transform = `translateY(${parallaxTranslate}px`;
						}
					}
				});
			}
		}

		// TADAM
		const tadamElements = document.querySelectorAll('[data-tadam]');
		if (tadamElements.length > 0) {
			for (let i = 0; i < tadamElements.length; i++) {
				function wolfpackTadam() {
					var scrollPosition500 = 0;
					scrollbar.addListener(function scrollbarListener(status) {
						const { offset } = status;
						if (tadamElements[i].getAttribute('data-tadam') === '') {
							const defaultOffset = 300;
							if (scrollbar.isVisible(tadamElements[i])) {
								if (!tadamElements[i].classList.contains('tadam')) {
									tadamElements[i].classList.add('tadam');
									scrollPosition500 = parseFloat(status.offset.y) + parseFloat(defaultOffset);
								}
								if (tadamElements[i].getAttribute('data-tadam-repeat') === null) {
									if (parseFloat(status.offset.y) > scrollPosition500) {
										tadamElements[i].classList.add('animate');
									}
								} else {
									if (parseFloat(status.offset.y) > scrollPosition500) {
										tadamElements[i].classList.add('animate');
									} else {
										tadamElements[i].classList.remove('animate');
									}
								}
							}
						} else {
							if (scrollbar.isVisible(tadamElements[i])) {
								if (!tadamElements[i].classList.contains('tadam')) {
									tadamElements[i].classList.add('tadam');
									scrollPosition500 = parseFloat(status.offset.y) + parseFloat(tadamElements[i].getAttribute('data-tadam'));
								}
								if (tadamElements[i].getAttribute('data-tadam-repeat') === null) {
									if (parseFloat(status.offset.y) > scrollPosition500) {
										tadamElements[i].classList.add('animate');
									}
								} else {
									if (parseFloat(status.offset.y) > scrollPosition500) {
										tadamElements[i].classList.add('animate');
									} else {
										tadamElements[i].classList.remove('animate');
									}
								}
							}
						}
					});
				}
				wolfpackTadam();
			}
		}

		// FOLLOW ME
		const followMeElements = document.querySelectorAll('[data-follow-me]');
		const imageElements = document.querySelectorAll('[data-image]');
		if (followMeElements.length > 0) {
			for (let i = 0; i < followMeElements.length; i++) {
				function wolfpackFollowMe() {
					function followMe() {
						var elementOffsetTop = followMeElements[i].parentNode.offsetTop;
						var elementFollowMeStop = followMeElements[i].parentNode.offsetHeight;
						var elementHeight = followMeElements[i].offsetHeight;
						if (parseFloat(scrollbar.offset.y) >= elementOffsetTop && parseFloat(scrollbar.offset.y) < parseFloat(elementOffsetTop + elementFollowMeStop - followMeElements[i].offsetHeight)) {
							followMeElements[i].style.top = `${parseFloat(scrollbar.offset.y) - parseFloat(elementOffsetTop)}px`;
							followMeElements[i].style.position = 'absolute';
							followMeElements[i].style.setProperty('--scroll', parseFloat(scrollbar.offset.y - elementOffsetTop) / parseFloat(elementFollowMeStop - elementHeight));
							for (let i = 0; i < imageElements.length; i++) {
								imageElements[i].style.setProperty('--scroll', parseFloat(scrollbar.offset.y - elementOffsetTop) / parseFloat(elementFollowMeStop - elementHeight));
							}
						}
					}
					scrollbar.addListener(function scrollbarFollowListener() {
						followMe();
					});
					followMe();
				}
				window.addEventListener('resize', wolfpackFollowMe);
				wolfpackFollowMe();
			}
		}

		// STAY
		const stayElements = document.querySelectorAll('[data-stay]');
		function wolfpackStay() {
			for (let i = 0; i < stayElements.length; i++) {
				const thisStayElement = stayElements[i];
				const thisStayAttribute = thisStayElement.getAttribute('data-stay').split(',');
				scrollbar.addListener(function scrollbarListener(status) {
					const { offset } = status;
					if (thisStayAttribute[0] === '') {
						const stayOffsetTop = parseFloat(offset.y);
						const stayOffsetLeft = parseFloat(offset.x);
						thisStayElement.style.position = 'absolute';
						thisStayElement.style.top = `${stayOffsetTop}px`;
						thisStayElement.style.left = `${stayOffsetLeft}px`;
					} else {
						const stayOffsetTop = parseFloat(offset.y) + parseFloat(thisStayAttribute[0]);
						const stayOffsetLeft = parseFloat(offset.x) + parseFloat(thisStayAttribute[1]);
						thisStayElement.style.position = 'absolute';
						thisStayElement.style.top = `${stayOffsetTop}px`;
						thisStayElement.style.left = `${stayOffsetLeft}px`;
					}
				});
			}
		}
		if (stayElements.length > 0) {
			window.addEventListener('resize', wolfpackStay);
			wolfpackStay();
		}

		// CURSOR
		var offsetCursor = [];
		var offsetCursotTop = 0;
		const cursorPointers = document.querySelectorAll('.cursor__pointer');
		const cursor = document.querySelector('.cursor');
		//document.addEventListener('mousemove', (e) => {
		//moveCursor(e);
		//});
		function moveCursor(e) {
			cursor.classList.add('moving');
			for (let i = 0; i < cursorPointers.length; i++) {
				const thisCursorPointer = cursorPointers[i];
				const thisCursorPointerHeight = thisCursorPointer.offsetHeight;
				const thisCursorPointerWidth = thisCursorPointer.offsetWidth;
				if (thisCursorPointer.classList.contains('cursor__ball--big')) {
					TweenMax.to(thisCursorPointer, 0.5, {
						x: e.clientX - parseFloat(thisCursorPointerHeight / 2),
						y: e.clientY - parseFloat(thisCursorPointerWidth / 2) + offsetCursotTop,
					});
				} else {
					TweenMax.to(thisCursorPointer, 0.1, {
						x: e.clientX - parseFloat(thisCursorPointerHeight / 2),
						y: e.clientY - parseFloat(thisCursorPointerWidth / 2) + offsetCursotTop,
					});
				}
			}
		}
		const cursorElements = document.querySelectorAll('[data-cursor]');
		if (cursorElements.length > 0) {
			for (let i = 0; i < cursorElements.length; i++) {
				const thisCursorElement = cursorElements[i];
				const thisCursorAttribute = thisCursorElement.getAttribute('data-cursor');
				if (thisCursorAttribute === '') {
					thisCursorElement.addEventListener('mouseover', function () {
						document.querySelector('.cursor').classList.add('animate');
					});
					thisCursorElement.addEventListener('mouseleave', function () {
						document.querySelector('.cursor').classList.remove('animate');
					});
				} else {
					thisCursorElement.addEventListener('mouseover', function () {
						document.querySelector('.cursor').classList.add(thisCursorAttribute);
					});
					thisCursorElement.addEventListener('mouseleave', function () {
						document.querySelector('.cursor').classList.remove(thisCursorAttribute);
					});
				}
			}
		}

		// MOBILE PLUGIN
		function MobilePlugin(...args) {
			Scrollbar.ScrollbarPlugin.apply(this, args);
		}
		MobilePlugin.prototype = Object.create(Scrollbar.ScrollbarPlugin.prototype);
		MobilePlugin.prototype.transformDelta = function mobilePluginDelta(delta, fromEvent) {
			if (fromEvent.type !== 'touchend') {
				return delta;
			}
			return {
				x: delta.x * this.options.speed,
				y: delta.y * this.options.speed,
			};
		};
		MobilePlugin.pluginName = 'filterEvent';
		MobilePlugin.defaultOptions = {
			speed: 0.7,
			damping: 1,
		};
	}
}
