$(function() {

	let toggle = document.querySelector('.nav-mob__btn')
	let navMob = document.querySelector('.nav-mob')
	toggle.addEventListener('click', function(e) {
		navMob.classList.toggle('show')
	})

	const navHeight = $('.nav').innerHeight()
	$('.height').css('margin-top', navHeight)

	if ($(window).width() < 768) {
		$('.nav-mob').css('height', 'calc(100vh - '+navHeight+'px)')
	}
	

	let toggleAdd = document.querySelector('.open-additional')
	let navAdd = document.querySelectorAll('.additional-menu')
	toggleAdd.addEventListener('click', function(e) {
		this.classList.toggle('open')

		for (let nav of navAdd) {
		  nav.classList.toggle('show');
		}
	})

	/*let clickNav = document.querySelectorAll('.nav-list__item .anchor')

	clickNav.forEach(el => {
		el.addEventListener("click", () => {
			toggle.classList.remove('opened')
			navMob.classList.remove('show')
		})
	})

	*/

	// Скролинг по якорям
	$('.anchor').bind("click", function(e){
		const anchor = $(this)
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top-navHeight // отступ от меню
		}, 500)
	e.preventDefault()
	})

	$('.achievement-item__text').matchHeight()

	$('.reviews-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		adaptiveHeight: true,
		arrows: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 5000
	})

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
