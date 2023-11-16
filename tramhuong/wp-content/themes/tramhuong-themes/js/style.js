
// slider banner

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='far fa-chevron-left'></i></div>",
    "<div class='btn-next'><i class='far fa-chevron-right'></i></div>"],

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
    navText:["<div class='btn-prev-2'><i class='far fa-chevron-left'></i></div>",
    "<div class='btn-next-2'><i class='far fa-chevron-right'></i></div>"],

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
            items:4
        }
    }
})

// slider feedback

$('.carousel_3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev-2'><i class='far fa-chevron-left'></i></div>",
    "<div class='btn-next-2'><i class='far fa-chevron-right'></i></div>"],

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


// menu pc

var subProduct = document.querySelectorAll('ul.menu-pc > li.menu-item-236 > ul');

subProduct.forEach(function (element) {
    element.id = 'sub-product';
})


// -----------------

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 400) {
            $('.display-pc').addClass('sticky-menu');
        }
        else {
            $('.display-pc').removeClass('sticky-menu');
        }
    })
})


// // menu mobile

var iconBar = document.getElementsByClassName('icon-bar')[0];

var menuMobile = document.getElementsByClassName('bg-menu-mobile')[0];
var menuMobile2 = document.getElementsByClassName('menu-mobile')[0];


iconBar.onclick = function() {
    menuMobile.classList.add('active-mobile');
}

menuMobile.onclick = function() {
    menuMobile.classList.remove('active-mobile');
}

menuMobile2.addEventListener('click', function(event) {
  event.stopPropagation();
});

// --------------

var subProductMobile = document.querySelectorAll('ul.menu-mobile > li.menu-item-236 > ul');

subProductMobile.forEach(function (element) {
    element.id = 'sub-product-mobile';
})

var html2 = '<span class="arrow-dropdown"><i class="fas fa-chevron-down"></i></span>';

document.getElementById("sub-product-mobile").insertAdjacentHTML('afterend',html2);

// --------------

$('.menu-item-236').on('click',function(){
 $('#sub-product-mobile').slideToggle();
});


// -----------------

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 300) {
            $('.display-mobile').addClass('sticky-menu');
        }
        else {
            $('.display-mobile').removeClass('sticky-menu');
        }
    })
})
