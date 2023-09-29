// menu pc

// $(document).ready(function() {
//     $(window).scroll(function(event) {
//         var pos_body = $('html,body').scrollTop();
//         if (pos_body > 280) {
//             $('.bg-header-pc').addClass('sticky');
//         }
//         else {
//             $('.bg-header-pc').removeClass('sticky');
//         }
//     })
// })

// menu

var openMenu = document.getElementsByClassName('icon-bar')[0];

var closeMenu = document.getElementsByClassName('close-menu')[0];
var closeMenu2 = document.getElementsByClassName('bg-menu')[0];

var modalMenu = document.getElementsByClassName('modal-menu')[0];

openMenu.onclick = function() {
    modalMenu.classList.add('sticky-modal');
}

closeMenu.onclick = function() {
    modalMenu.classList.remove('sticky-modal');
}

closeMenu2.onclick = function() {
    modalMenu.classList.remove('sticky-modal');
}

// thanh tim kiếm

var openSearch = document.getElementsByClassName('search-menu')[0];
var closeSearch = document.getElementsByClassName('close-menu2')[0];

var search = document.getElementsByClassName('bg-search')[0];

openSearch.onclick = function() {
    search.classList.add('bg-search2');
}

closeSearch.onclick = function() {
    search.classList.remove('bg-search2');
}


// đảo chiều MARKET & REVIEW

var reverse = document.getElementsByClassName('border-market');

for ( var i = 0; i < reverse.length; i++) {
    if (i % 2) {
        reverse[i].classList.add('reverse-market');
    }
}

// đảo chiều PERSPECTIVE

var reverse2 = document.getElementsByClassName('border-perspective');

for ( var i = 0; i < reverse2.length; i++) {
    if (i % 2) {
        reverse2[i].classList.add('reverse-market');
    }
}

// đảo chiều feature

var reverse3 = document.getElementsByClassName('border-feature');

for ( var i = 0; i < reverse3.length; i++) {
    if (i % 2) {
        reverse3[i].classList.add('reverse-market');
    }
}


// slider 1

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><img src='http://artrepublik.vn/wp-content/themes/artrepublik_themes/images/prev.png'></div>",
    "<div class='btn-next'><img src='http://artrepublik.vn/wp-content/themes/artrepublik_themes/images/next.png'></div>"],

    autoplay:true,
    // autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

// slider bài viết

$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><img src='http://artrepublik.vn/wp-content/themes/artrepublik_themes/images/prev.png'></div>",
    "<div class='btn-next'><img src='http://artrepublik.vn/wp-content/themes/artrepublik_themes/images/next.png'></div>"],

    autoplay:true,
    // autoplayTimeout:8000,
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