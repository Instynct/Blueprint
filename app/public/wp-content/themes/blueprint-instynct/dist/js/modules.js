/*! snoros v0.0.1 | (c) 2020 Instynct | MIT License | http://link-to-your-git-repo.com */
$('.module-title').hover(
	(function () {
		$('.module-title').addClass('background');
	}),
	(function () {
		$('.module-title').removeClass('background');
	})
);

moduleTitle = document.querySelector('.module-title');
moduleContainer = document.querySelector('.module-container');

moduleTitle.addEventListener('mouseover', (function (e) {
	moduleContainer.classList.toggle('blue');
}));
