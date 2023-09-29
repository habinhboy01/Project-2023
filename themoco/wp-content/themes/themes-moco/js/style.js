// menu pc

let bar = document.getElementsByClassName('icon-bar')[0];
let closeMenu = document.getElementsByClassName('icon-close')[0];

let hidden = document.getElementsByClassName('header-menu2')[0];
let stopHidden = document.getElementsByClassName('bg-menu')[0];

bar.onclick = function() {
	hidden.classList.add('sticky-menu');
}

closeMenu.onclick = function() {
	hidden.classList.remove('sticky-menu');
}

hidden.onclick = function() {
	hidden.classList.remove('sticky-menu');
}

stopHidden.addEventListener('click', function(event) {
  event.stopPropagation();
});

// ---------------

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 150) {
            $('.bg-header').addClass('active-header');
        }
        else {
            $('.bg-header').removeClass('active-header');
        }
    })
})




// form tìm kiếm

let openSearch = document.getElementsByClassName('icon-search')[0];

let openSearch2 = document.getElementsByClassName('icon-search2')[0];

let modalSearch = document.getElementsByClassName('modal-search')[0];
let modalSearch2 = document.getElementsByClassName('searchform')[0];

openSearch.onclick = function() {
	modalSearch.classList.add('displsy-search');
}

openSearch2.onclick = function() {
	modalSearch.classList.add('displsy-search');
}

modalSearch.onclick = function() {
	modalSearch.classList.remove('displsy-search');
}

modalSearch2.addEventListener('click', function(event) {
  event.stopPropagation();
});


// slider category

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



