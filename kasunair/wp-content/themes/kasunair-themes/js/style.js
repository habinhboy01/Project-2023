// menu pc

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.bg-header').addClass('sticky-menu');
        }
        else {
            $('.bg-header').removeClass('sticky-menu');
        }
    })
})


// menu mobile

$('.icon-bar').on('click',function(){
 $('.menu-mobile').slideToggle();
});


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


// slider client

$('.carousel_2').owlCarousel({
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

// ----------------

var address = document.getElementsByClassName('address');

for (var i = 0; i < address.length; i++) {
    if (i % 2) {
        address[i].classList.add('address2');
    }
}

// slideshow gallery

var imgFeature = document.querySelector('.img-detail-product');
var listImg = document.querySelectorAll('.img-slideshow');

var currentIndex = 0;

function updateImageByIndex(index) {
    currentIndex = index;
    imgFeature.src = listImg[index].getAttribute('src');
}

listImg.forEach((imgElement, index) => {
    imgElement.addEventListener('click', e => {

        imgFeature.style.opacity = '0'

        setTimeout( () => {

            updateImageByIndex(index)

            imgFeature.style.opacity = '1'

        }, 400)

    })
})