let dropDownStatus = false;
let menuBtn = document.querySelector('.menu');

menuBtn.onclick = function(e) {
	let	nav = document.querySelector('nav');
	let navList = document.querySelector('nav ul');
	if(!dropDownStatus) {
		nav.style.height = "fit-content";
		nav.style.flexFlow = "column nowrap";
		navList.style.display = "flex";

		menuBtn.classList.add('menu-dropped');
		document.querySelector('.help').classList.add('help-dropped');

		dropDownStatus = true;
	} else {
		navList.style.display = "none";
		nav.style.height = "7vw";
		nav.style.flexFlow = "row nowrap";

		menuBtn.classList.remove('menu-dropped');
		document.querySelector('.help').classList.remove('help-dropped');

		dropDownStatus = false;
	}
};


