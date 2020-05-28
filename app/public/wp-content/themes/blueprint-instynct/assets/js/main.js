// OPEN MENU

moduleTitle = document.querySelectorAll('.module-title');
moduleContainer = document.querySelectorAll('.module-container');
moduleTitle.addEventListener('mouseover', function (e) {
	console.log('blue');
	moduleContainer.classList.toggle('blue');
});
