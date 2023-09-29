// menu pc

// thêm nút search vào menu

var html = '<li class="search-header"><i class="fas fa-search"></i></li>';

document.getElementsByClassName("menu-item-24")[0].insertAdjacentHTML('afterend',html);

// search pc

var openSearch = document.getElementsByClassName('search-header')[0];

var search_pc = document.getElementsByClassName('searchform')[0];

openSearch.onclick =function() {
    search_pc.classList.toggle('a');
}


$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.bg-menu-pc').addClass('sticky');
        }
        else {
            $('.bg-menu-pc').removeClass('sticky');
        }
    })
})


// menu mobile

var openMenu = document.getElementsByClassName('icon-bar')[0];


var closeMenu = document.getElementsByClassName('icon-close')[0];

var modalMenu = document.getElementsByClassName('bg-modal')[0];
var stopMenu = document.getElementsByClassName('modal-menu')[0];



openMenu.onclick = function() {
	modalMenu.classList.add('action-menu');
}

closeMenu.onclick = function() {
	modalMenu.classList.remove('action-menu');
}

modalMenu.onclick = function() {
	modalMenu.classList.remove('action-menu');
}

stopMenu.addEventListener('click', function(event) {
  event.stopPropagation();
});


// ----------------------

var openSearch = document.getElementsByClassName('icon-search')[0];
var modalSearch = document.getElementsByClassName('modal-search')[0];
var closeSearch = document.getElementsByClassName('icon-close2')[0];

openSearch.onclick = function() {
    modalSearch.classList.add('b');
}

closeSearch.onclick = function() {
    modalSearch.classList.remove('b');
}


// -----------------------


$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.bg-menu-mobile').addClass('sticky');
        }
        else {
            $('.bg-menu-mobile').removeClass('sticky');
        }
    })
})

// dropdowm menu

var dropdowm = document.querySelectorAll('ul.menu-mobile > li.menu-item-22');

dropdowm.forEach(function (element) {
    element.id = 'dropdown-menu';
})

var dropdowm2 = document.querySelectorAll('ul.menu-mobile > li.menu-item-22 > a');

dropdowm2.forEach(function (element) {
    element.id = 'dropdown-menu2';
})


var html2 = '<span class="arrow-dropdown"><i class="fas fa-chevron-down"></i></span>';

document.getElementById("dropdown-menu2").insertAdjacentHTML('afterend',html2);


var dropdownMenu = document.querySelectorAll('ul.menu-mobile > li.menu-item-22 > ul.sub-menu');

dropdownMenu.forEach(function (element) {
    element.id = 'ac';
})

var arrow_dropdown = document.getElementsByClassName('arrow-dropdown')[0];

arrow_dropdown.onclick =function() {
    arrow_dropdown.classList.toggle('change-arrow');
}


$('.arrow-dropdown').on('click',function(){
    $('#ac').slideToggle();
});



// slider carousel

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


$('.carousel_2').owlCarousel({
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
            items:2
        },
        1000:{
            items:3
        }
    }
})