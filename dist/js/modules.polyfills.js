/*! snoros v0.0.1 | (c) 2020 Instynct | MIT License | http://link-to-your-git-repo.com */
moduleTitle = document.querySelector('[data-interactive-text]');
moduleContainer = document.querySelector('[data-section]');

moduleTitle.addEventListener('mouseover', (function (e) {
	moduleContainer.classList.toggle('blue');
}));

$('[data-interactive-text]').hover(
	(function () {
		$('[data-interactive-text]').addClass('background');
	}),
	(function () {
		$('[data-interactive-text]').removeClass('background');
	})
);
