document.addEventListener("DOMContentLoaded", function () {
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

	// new Splide("#servicos", {
	// 	perPage: 3,
	// 	pagination: false,
	// 	breakpoints: {
	// 		1140: {
	// 			perPage: 2,
	// 		},
	// 		540: {
	// 			perPage: 1,
	// 		},
	// 	},
	// }).mount();

});

