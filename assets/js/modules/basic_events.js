moduleTitle = document.querySelector('[data-interactive-text]');
moduleContainer = document.querySelector('[data-section]');

moduleTitle.addEventListener('mouseover', function (e) {
	moduleContainer.classList.toggle('blue');
});
