
// menu pc

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 34) {
            $('.bg-header').addClass('sticky-menu');
            $('.a').removeClass('menu-home');
            $('.sticky-logo').removeClass('sticky-logo-3');
            $('.sticky-logo-2').addClass('sticky-logo-3');
        }
        else {
            $('.bg-header').removeClass('sticky-menu');
            $('.a').addClass('menu-home');
            $('.sticky-logo').addClass('sticky-logo-3');
            $('.sticky-logo-2').removeClass('sticky-logo-3');
        }
    })
})


// menu mobile

var openMenu = document.getElementsByClassName('icon-bar')[0];


var modalMenu = document.getElementsByClassName('modal-menu')[0];
var stopMenu = document.getElementsByClassName('menu-mobile')[0];


openMenu.onclick = function() {
	modalMenu.classList.add('action-menu');
}

modalMenu.onclick = function() {
	modalMenu.classList.remove('action-menu');
}

stopMenu.addEventListener('click', function(event) {
  event.stopPropagation();
});



// slider banner

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='fas fa-chevron-square-left'></i></div>",
    "<div class='btn-next'><i class='fas fa-chevron-square-right'></i></div>"],

    autoplay:true,
    // autoplayTimeout:5000,
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

// slider partner

$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='fas fa-chevron-square-left'></i></div>",
    "<div class='btn-next'><i class='fas fa-chevron-square-right'></i></div>"],

    autoplay:true,
    // autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


// slide news

$('.carousel_3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev-2'><i class='fas fa-chevron-square-left'></i></div>",
    "<div class='btn-next-2'><i class='fas fa-chevron-square-right'></i></div>"],

    autoplay:true,
    // autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

// background

var strength = document.getElementsByClassName('list-strength');

for ( var i = 0; i < strength.length; i++) {
    if (i % 2) {
        strength[i].classList.add('list-strength-2');
    }
}

// ứng tuyển

$('.button-apply').on('click',function(){
 $('.bg-apply').slideToggle();
});