// menu pc

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.bg-header').addClass('sticky');
        }
        else {
            $('.bg-header').removeClass('sticky');
        }
    })
})



// menu mobile

$('.icon-bar').on('click',function(){
    $('.model-mobile').slideToggle();
});


// sub menu design mobile

$('.open-design-mobile').on('click',function(){
    $('.menu-design-mobile').slideToggle();
});

// -------------

$('.btn-design-mobile').on('click',function(){
    $('.design-mobile').slideToggle();
});

// -----------

$('.btn-design-mobile2').on('click',function(){
    $('.design-mobile2').slideToggle();
});


// ---------------

$('.btn-design-mobile3').on('click',function(){
    $('.design-mobile3').slideToggle();
});

// ----------------


// sub menu design mobile

$('.open-deploy-mobile').on('click',function(){
    $('.menu-deploy-mobile').slideToggle();
});


// ------------

$('.btn-deploy-mobile').on('click',function(){
    $('.deploy-mobile').slideToggle();
});

// ------------

$('.btn-deploy-mobile2').on('click',function(){
    $('.deploy-mobile2').slideToggle();
});

// slider carousel

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='fas fa-angle-left'></i></div>","<div class='btn-next'><i class='fas fa-angle-right'></i></div>"],

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

$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fas fa-angle-left'></i></div>","<div class='btn-next2'><i class='fas fa-angle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:8000,
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

$('.carousel_3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev3'><i class='fas fa-angle-left'></i></div>","<div class='btn-next3'><i class='fas fa-angle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:8000,
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




