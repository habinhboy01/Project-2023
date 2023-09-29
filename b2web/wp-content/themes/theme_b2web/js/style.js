

$('.icon-bar').on('click', function() {
	$('.menu-mobile').slideToggle();
});



// Questions 1

$('.questions-1').on('click', function() {
	$('.content-question1').slideToggle();
    $(".a-1").toggleClass("change_arrow");
});

// Questions 2

$('.questions-2').on('click', function() {
	$('.img-questions2').slideToggle();
    $(".a-2").toggleClass("change_arrow");
});


// Questions 3

$('.questions-3').on('click', function() {
	$('.display-questions').slideToggle();
    $(".a-3").toggleClass("change_arrow");
});


// Questions 4

$('.questions-4').on('click', function() {
	$('.content-questions4').slideToggle();
    $(".a-4").toggleClass("change_arrow");
});


// page graphic

var allSelect = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);

var buttonEvent = all('.button-event');
var contentEvent = all('.content-event');

buttonEvent.forEach((tab, index) => {
    var content = contentEvent[index];

    tab.onclick = function () {

        allSelect('.button-event.active-event').classList.remove('active-event');
        allSelect('.content-event.active-content').classList.remove('active-content');

        this.classList.add('active-event');
        content.classList.add('active-content');

    }
});


// trang chi tiết project

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='fas fa-chevron-left'></i></div>",
    "<div class='btn-next'><i class='fas fa-chevron-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})


// trang category

var reverse = document.getElementsByClassName('content-category');

for ( var i = 0; i < reverse.length; i++) {
    if (i % 2) {
        reverse[i].classList.add('content-category2');
    }
}