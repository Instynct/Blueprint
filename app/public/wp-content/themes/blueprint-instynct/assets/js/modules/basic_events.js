moduleTitle = document.querySelector('.module-title');
moduleContainer = document.querySelector('.module-container');

moduleTitle.addEventListener('mouseover', function (e) {
	moduleContainer.classList.toggle('blue');
});
