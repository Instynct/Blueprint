moduleTitle = document.querySelector('[data-title]');
moduleContainer = document.querySelector('[data-container]');

moduleTitle.addEventListener('mouseover', function (e) {
	moduleContainer.classList.toggle('blue');
});
