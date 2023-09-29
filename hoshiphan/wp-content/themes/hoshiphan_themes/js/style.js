// menu pc

// kháo học

var subMenu = document.querySelectorAll('ul.menu-pc > li.sub-course > ul.sub-menu');

subMenu.forEach(function (element) {
	element.classList.add('menu-course');
})

// sản phẩm

var subMenu2 = document.querySelectorAll('ul.menu-pc > li.sub-product  > ul.sub-menu');

subMenu2.forEach(function (element) {
	element.classList.add('menu-product');
})


// $(document).ready(function() {
//     $(window).scroll(function(event) {
//         var pos_body = $('html,body').scrollTop();
//         if (pos_body > 40) {
//             $('.bg-header2').addClass('sticky-pc');
//             $('.img_logo').addClass('sticky-logo');
//         }
//         else {
//             $('.bg-header2').removeClass('sticky-pc');
//             $('.img_logo').removeClass('sticky-logo');
//         }
//     })
// })

// // menu mobile

$('.btn-bar').on('click',function(){
    $('.menu-mobile').slideToggle();
});


var subMenu3 = document.querySelectorAll('ul.menu-mobile > li.sub-course > ul.sub-menu');

subMenu3.forEach(function (element) {
	element.classList.add('menu-course-mobile');
})

$('.sub-course').on('click',function(){
    $('.menu-course-mobile').slideToggle();
});


// sản phẩm

var subMenu4 = document.querySelectorAll('ul.menu-mobile > li.sub-product  > ul.sub-menu');

subMenu4.forEach(function (element) {
	element.classList.add('menu-product-mobile');
})

$('.sub-product').on('click',function(){
    $('.menu-product-mobile').slideToggle();
});




// slider banner

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='far fa-chevron-left'></i></div>",
    "<div class='btn-next'><i class='far fa-chevron-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
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


// tiệc trình diễn

$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='far fa-chevron-left'></i></div>",
    "<div class='btn-next'><i class='far fa-chevron-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
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

// slider intro

$('.carousel_3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='far fa-chevron-left'></i></div>",
    "<div class='btn-next'><i class='far fa-chevron-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
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




