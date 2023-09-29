// menu pc

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 40) {
            $('.bg-header2').addClass('sticky-pc');
            $('.img_logo').addClass('sticky-logo');
        }
        else {
            $('.bg-header2').removeClass('sticky-pc');
            $('.img_logo').removeClass('sticky-logo');
        }
    })
})

// menu mobile

var iconBar = document.getElementsByClassName('icon-bar')[0];

var menuMobile = document.getElementsByClassName('bg-mobile')[0];
var menuMobile2 = document.getElementsByClassName('bg-mobile2')[0];

var closeMenu = document.getElementsByClassName('close-menu')[0];

iconBar.onclick = function() {
    menuMobile.classList.add('active-mobile');
}

closeMenu.onclick = function() {
    menuMobile.classList.remove('active-mobile');
}

menuMobile.onclick = function() {
    menuMobile.classList.remove('active-mobile');
}

menuMobile2.addEventListener('click', function(event) {
  event.stopPropagation();
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

// ĐỘI NGŨ BÁC SĨ

$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fal fa-long-arrow-left'></i></div>",
    "<div class='btn-next2'><i class='fal fa-long-arrow-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})

// tin tức

$('.carousel_3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fal fa-long-arrow-left'></i></div>",
    "<div class='btn-next2'><i class='fal fa-long-arrow-right'></i></div>"],

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
            items:3
        }
    }
})

// kiến thức

var allSelect = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);


var tabs = all('.tab-knowledge');
var contents = all('.content-knowledge');


tabs.forEach((tab, index) => {
    var content = contents[index];

    tab.onclick = function () {

        allSelect('.tab-knowledge.active-tab').classList.remove('active-tab');
        allSelect('.content-knowledge.active-knowledge').classList.remove('active-knowledge');

        this.classList.add('active-tab');
        content.classList.add('active-knowledge');

    }
});


// trải nghiệm khách hàng

$('.carousel_4').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fal fa-long-arrow-left'></i></div>",
    "<div class='btn-next2'><i class='fal fa-long-arrow-right'></i></div>"],

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


// Đơn Vị - Tổ Chức Mà Chúng Tôi Liên Kết

$('.carousel_5').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fal fa-long-arrow-left'></i></div>",
    "<div class='btn-next2'><i class='fal fa-long-arrow-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
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



