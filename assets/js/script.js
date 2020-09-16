$('.owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	pagination: false,
	autoplay: 1000,
	responsive: {
		0: {
			items: 1
		},
		300: {
			items: 2
		},
		600: {
			items: 3
		},
		1000: {
			items: 5
		}
	}
});

jQuery(document).ready(function () {
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
});

AOS.init();