// OPEN MENU

moduleTitle = document.querySelector('.module-title');
moduleContainer = document.querySelector('.module-container');
console.log(moduleTitle);

moduleTitle.addEventListener('mouseover', function (e) {
	console.log('What?');
	moduleContainer.classList.toggle('blue');
});
