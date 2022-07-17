$(function() {

	/*let toggle = document.querySelector('.nav-toggle')
	let navMob = document.querySelector('.nav-mob')
	toggle.addEventListener('click', function(e) {
		this.classList.toggle('opened')
		navMob.classList.toggle('show')
	})

	let clickNav = document.querySelectorAll('.nav-list__item .anchor')

	clickNav.forEach(el => {
		el.addEventListener("click", () => {
			toggle.classList.remove('opened')
			navMob.classList.remove('show')
		})
	})*/

	const navHeight = $('.nav').innerHeight()
	$('.height').css('margin-top', navHeight)

	// Скролинг по якорям
	$('.anchor').bind("click", function(e){
		const anchor = $(this)
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top-navHeight // отступ от меню
		}, 500)
	e.preventDefault()
	})

	/*$('.clients-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 4,
		adaptiveHeight: true,
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 576,
				settings: {
					rows: 3,
					slidesPerRow: 1,
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			},
		]
	})*/

	// Инит фансибокса
	$('.fancybox').fancybox({
		margin: 0,
		padding: 0,
		touch: false
	})

	// Отправка формы
	$('form').submit(function() {
		let data = $(this).serialize()
		data += '&ajax-request=true'
		$.ajax({
			type: 'POST',
			url: '/mail.php',
			dataType: 'json',
			data: data,
			success: (function() {
				$.fancybox.close()
				$.fancybox.open({src:'#thn'})
			})()
		})
		return false
	})

})
