/*! snoros v0.0.1 | (c) 2020 Instynct | MIT License | http://link-to-your-git-repo.com */
moduleTitle = document.querySelector('[data-title]');
moduleContainer = document.querySelector('[data-container]');

moduleTitle.addEventListener('mouseover', (function (e) {
	moduleContainer.classList.toggle('blue');
}));

$('[data-title]').hover(
	(function () {
		$('[data-title]').addClass('background');
	}),
	(function () {
		$('[data-title]').removeClass('background');
	})
);
