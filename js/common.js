$(document).ready(function() {

//прелоадер

$(window).on('load', function () {//preloader function

	$('#p_loader').delay(1000).fadeOut('slow');

});



//плагин на счетчик времени

var clock;
clock = $('#clock').FlipClock({
	clockFace: "DailyCounter",
	autoStart: false,
	language: 'ru',
	callbacks : {
		stop : function() {
			$('#message').html('Время прошло');
		}
	}
});


var dt = "May 21 2018 20:22:48";
var first = new Date(dt);
var last = Date.now();
var remaining = first - last;
remaining /= 1000;

clock.setTime(remaining);
clock.setCountdown(true);
clock.start();


//функиия смены БГ и сдвига ссылок в хедере

$(window).scroll(function() {
	if($(window).scrollTop() > 200 && $(window).width() > 1024) {
		$('#header').addClass('headerColor');
		$('.phone').css({
			"-webkit-transform":"translateY(-23px)",
			"-ms-transform":"translateY(-23px)",
			"transform":"translateY(-23px)"
		});

		$('.callMe').css({
			"-webkit-transform":"translateY(-34px)",
			"-ms-transform":"translateY(-34px)",
			"transform":"translateY(-34px)"
		});

	} else {
		$('#header').removeClass('headerColor');
		$('.phone').css({
			"-webkit-transform":"translateY(0px)",
			"-ms-transform":"translateY(0px)",
			"transform":"translateY(0px)"
		});
		$('.callMe').css({
			"-webkit-transform":"translateY(px)",
			"-ms-transform":"translateY(0px)",
			"transform":"translateY(0px)"
		});
	}
});


//бургер мобильной версии

if($(window).width() < 1025) {
	var menuItem = $('nav a');
	var menu = $('nav');

	$('#burger').click(function() {
		menu.toggleClass('showNav');
	});

	menuItem.bind('click', function() {
		menu.toggleClass('showNav');
	})
}



// функции прокрутки

$('a[href^="#"]').bind('click.smoothscroll',function (e) {
	e.preventDefault();
	var target = this.hash,
	$target = $(target);
	$('html, body').stop().animate({
		'scrollTop': $target.offset().top + -100
	}, 1000, 'swing', function () {
		window.location.hash = target;
	});
});


//скрипты для открытия модалки с полной информацией по спикеру

var name;
var description;
var avatar;
var modal = $('.modal');

var fullPhoto = $('#fullPhoto');
var modalName = $('#name');
var biography = $('#biography');

//отлключение скролла

function stopScrolling(bool) {
	if(bool == true) {
		$('body').css({
			'overflow' : 'hidden'
		});
		$('html').css({
			'overflow' : 'hidden'
		});
	} else {
		$('body').css({
			'overflow' : 'auto'
		});
		$('html').css({
			'overflow' : 'auto'
		});
	}
}


$('.speaker').click(function() {
	name = $(this).find('.item__name').text();
	description = $(this).find('.item__fullDescription').text();
	avatar = $(this).find('img').attr("src");

	stopScrolling(true);

	$('#speakerFullInfo').show();
	fullPhoto.attr('src', avatar);
	modalName.text(name);
	biography.text(description);
	modal.show();

})

//закрытие модалки

$('.close').click(function() {
	modal.hide();
	$('.modalContent').hide();
	stopScrolling(false);
})

$('.modal').click(function(){
	modal.hide();
	$('.modalContent').hide();
	stopScrolling(false);
});


$('.modal .modalContent').click(function(e) {
	e.stopPropagation();
});

//открытие модалок через кнопки на первом экране

$('#actor').click(function() {
	modal.show();
	$('#forActors').show();
	stopScrolling(true);
});

$('#producer').click(function() {
	modal.show();
	$('#forProducer').show();
	stopScrolling(true);
});

$('.callMe').click(function(){
	modal.show();
	$('#callModal').show();
	stopScrolling(true);
})


$('.btn_accept').click(function(){
	modal.show();
	$('#mainForm').show();
	stopScrolling(true);
});


//показать больше

$('.fifthBlock__content .speaker').slice(0, 4).show();
$('.teamBlock .speaker').slice(0, 4).show();
$('.sovietBlock .speaker').slice(0, 4).show();



$('.moreBtn').click(function(){
	if($(this).text() == 'Показать больше') {
		$(this).text('Скрыть');
		$(this).parent().find('.speaker').slice(0, -1).show();
	} else {
		$(this).text('Показать больше');
		$(this).parent().find('.speaker').slice(0, -1).hide();
		$(this).parent().find('.speaker').slice(0, 4).show();

		$('html, body').stop().animate({
			'scrollTop': $(this).parent().offset().top -50
		}, 500)

	}

});





// magnific popup
$('.popUp').magnificPopup({type:'image'});




//функция перехада на спонсорскую страницу

$('.partnerItem').click(function(e){
	e.preventDefault();
	var href = $(this).attr('href');
	window.open(href, '_black').focus();

});



//аккардеон с FAQ



$('.accardeon dd').hide().prev().click(function(){
	$('.accardeon dd').not(this).slideUp();
	$(this).next().not(":visible").slideDown();
});
$("dt").click(function(){
	$("dt").removeClass("act")
	$(this).addClass("act");
});




});




//слайдер расписание

/*var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("slideElem");

	if(n > slides.length){
		slideIndex = 1
	}
	if(n < 1) {
		slideIndex = slides.length
	}
	for (i=0; i < slides.length; i++) {
		slides[i].style.display="none";
	}

	slides[slideIndex-1].style.display= "flex";
	document.getElementById('day').innerHTML = "ДЕНЬ " + slideIndex;

}

document.getElementById('prev').onclick = function() {
	plusSlides(-1);
}

document.getElementById('next').onclick = function() {
	plusSlides(1);
}
*/
//google map

function initMap() {
	var uluru = {lat: 43.670408, lng:  39.610376};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 8,
		center: uluru,
		zoomControl: true,
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
		rotateControl: false,
		fullscreenControl: false
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});

}

// load teachers

$(document).ready(function(){
	console.log( "ready!" );
});
