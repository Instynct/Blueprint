// Start Internet Explorer

class IsIE {
	constructor() {
		this.init();
	}

	init() {
		navigator.sayswho = (function isIE() {
			const ua = navigator.userAgent;
			let tem;
			let M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
			if (/trident/i.test(M[1])) {
				tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
				return {
					name: 'IE ',
					version: tem[1] || '',
				};
			}
			if (M[1] === 'Chrome') {
				tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
				if (tem != null) {
					return {
						name: tem.slice(1)[0],
						version: tem.slice(1).join(' ').replace('OPR', 'Opera'),
					};
				}
			}
			M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
			tem = ua.match(/version\/(\d+)/i);
			if (tem != null) {
				M.splice(1, 1, tem[1]);
			}
			return {
				name: M[0],
				version: M[1],
			};
		})();
		// Redurection internet explorer
		if (navigator.sayswho.name === 'IE ') {
			window.location.href = '/internet-explorer';
		}
		// End Internet Explorer
	}
}
export default IsIE;
