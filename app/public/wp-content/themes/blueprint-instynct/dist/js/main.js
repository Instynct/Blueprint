/*! snoros v0.0.1 | (c) 2020 Instynct | MIT License | http://link-to-your-git-repo.com */
// OPEN MENU

moduleTitle = document.querySelectorAll('.module-title');
moduleContainer = document.querySelectorAll('.module-container');
moduleTitle.addEventListener('mouseover', (function (e) {
	console.log('blue');
	moduleContainer.classList.toggle('blue');
}));
