jQuery(document).ready(function ($) {
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 50) {
			$('.header').addClass('active');
		} else {
			//remove the background property so it comes transparent again (defined in your css)
			$('.header').removeClass('active');
		}
	});

	$('.offer-slider').slick({
		centerMode: false,
		dots: false,
		slidesToShow: 3,
		infinite: false,
		adaptiveHeight: true,
		prevArrow:
			'<button type="button" class="slick-arrow slick-prev"><svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 10.9554V1.04464C0 0.212491 0.957082 -0.255603 1.61394 0.255286L7.98512 5.21065C8.49986 5.61101 8.49986 6.38899 7.98512 6.78935L1.61394 11.7447C0.957082 12.2556 0 11.7875 0 10.9554Z" fill="black" /></svg></button>',
		nextArrow:
			'<button type="button" class="slick-arrow slick-next"><svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 10.9554V1.04464C0 0.212491 0.957082 -0.255603 1.61394 0.255286L7.98512 5.21065C8.49986 5.61101 8.49986 6.38899 7.98512 6.78935L1.61394 11.7447C0.957082 12.2556 0 11.7875 0 10.9554Z" fill="black" /></svg></button>',
		responsive: [
			{
				breakpoint: 1350,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 790,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 470,
				settings: {
					slidesToShow: 1,
					// dots: true,
					arrows: false,
				},
			},
		],
	});

	$('.portfolio-slider').slick({
		centerMode: false,
		dots: false,
		slidesToShow: 1,
		infinite: true,
		adaptiveHeight: true,
		prevArrow:
			'<button type="button" class="slick-arrow slick-prev"><svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 10.9554V1.04464C0 0.212491 0.957082 -0.255603 1.61394 0.255286L7.98512 5.21065C8.49986 5.61101 8.49986 6.38899 7.98512 6.78935L1.61394 11.7447C0.957082 12.2556 0 11.7875 0 10.9554Z" fill="black" /></svg></button>',
		nextArrow:
			'<button type="button" class="slick-arrow slick-next"><svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 10.9554V1.04464C0 0.212491 0.957082 -0.255603 1.61394 0.255286L7.98512 5.21065C8.49986 5.61101 8.49986 6.38899 7.98512 6.78935L1.61394 11.7447C0.957082 12.2556 0 11.7875 0 10.9554Z" fill="black" /></svg></button>',
	});

	$('.portfolio-one-slider').each(function (i) {
		// console.log(this.childNodes.length);
		if (this.childNodes.length > 1) {
			$(this).slick({
				centerMode: false,
				dots: true,
				slidesToShow: 1,
				infinite: false,
				arrows: false,
				adaptiveHeight: true,
				prevArrow:
					'<button type="button" class="slick-arrow slick-prev"><svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 10.9554V1.04464C0 0.212491 0.957082 -0.255603 1.61394 0.255286L7.98512 5.21065C8.49986 5.61101 8.49986 6.38899 7.98512 6.78935L1.61394 11.7447C0.957082 12.2556 0 11.7875 0 10.9554Z" fill="black" /></svg></button>',
				nextArrow:
					'<button type="button" class="slick-arrow slick-next"><svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 10.9554V1.04464C0 0.212491 0.957082 -0.255603 1.61394 0.255286L7.98512 5.21065C8.49986 5.61101 8.49986 6.38899 7.98512 6.78935L1.61394 11.7447C0.957082 12.2556 0 11.7875 0 10.9554Z" fill="black" /></svg></button>',
			});
		}
	});

	$(document).on('click', 'a[href^="#"]', function (e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top - 100;

		// animated top scrolling
		$('body, html').animate({
			scrollTop: pos,
		});
	});
});
