	const btnMobile = document.getElementById("js-btn-mobile");
	btnMobile.addEventListener("click", () => {
		btnMobile.classList.toggle("is-active");
		document.documentElement.classList.toggle("is-open");
	});

	const navLink = document.querySelectorAll('.menu-mobile__link')

	function linkAction(){
  	// When we click on each nav__link, we remove the show-menu class
		document.documentElement.classList.toggle('is-open');
		btnMobile.classList.toggle("is-active");
	}
	navLink.forEach(n => n.addEventListener('click', linkAction))
	
	const header = document.getElementById('js-header');
	function fixedMenu() {
		if (window.pageYOffset > 80) {
			header.classList.add("fixed-menu");
		} else {
			header.classList.remove("fixed-menu");
		}
	}
	document.addEventListener('scroll', fixedMenu);

