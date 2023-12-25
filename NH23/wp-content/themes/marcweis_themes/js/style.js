// menu pc

var subProduct = document.querySelectorAll('ul.menu-pc > li.menu-item-161 > ul');

subProduct.forEach(function (element) {
    element.id = 'sub-product';
})

// ------

var subHome = document.querySelectorAll('ul.menu-pc > li.menu-item-28 > ul');

subHome.forEach(function (element) {
    element.id = 'sub-home';
})

// -------------

var subNH23 = document.querySelectorAll('ul.menu-pc > li.menu-item-27 > ul');

subNH23.forEach(function (element) {
    element.id = 'sub-NH23';
})


// menu mobile

var iconBar = document.getElementsByClassName('icon-bar')[0];

var menuMobile = document.getElementsByClassName('bg-mobile')[0];
var menuMobile2 = document.getElementsByClassName('menu-mobile2')[0];

var closeMenu = document.getElementsByClassName('close-menu')[0];

iconBar.onclick = function() {
    menuMobile.classList.add('sticky-menu');
}

closeMenu.onclick = function() {
    menuMobile.classList.remove('sticky-menu');
}

menuMobile.onclick = function() {
    menuMobile.classList.remove('sticky-menu');
}

menuMobile2.addEventListener('click', function(event) {
  event.stopPropagation();
});


// ------------

var subProductMobile = document.querySelectorAll('ul.menu-mobile2 > li.menu-item-161 > ul');

subProductMobile.forEach(function (element) {
    element.id = 'sub-product-mobile';
})

$('.menu-item-161').on('click',function(){
 $('#sub-product-mobile').slideToggle();
});

// ---------------

var subHomeMobile = document.querySelectorAll('ul.menu-mobile2 > li.menu-item-28 > ul');

subHomeMobile.forEach(function (element) {
    element.id = 'sub-home-mobile';
})

$('.menu-item-28').on('click',function(){
 $('#sub-home-mobile').slideToggle();
});

// -------------------------

var subNH23Mobile = document.querySelectorAll('ul.menu-mobile2 > li.menu-item-27 > ul');
console.log(subNH23Mobile);

subNH23Mobile.forEach(function (element) {
    element.id = 'sub-NH23-mobile';
})

$('.menu-item-27').on('click',function(){
 $('#sub-NH23-mobile').slideToggle();
});

var subNH23Mobile = document.querySelectorAll('ul.menu-mobile2 > li.menu-item-24');

$('.menu-item-24').on('click',function(){
 $('ul.menu-mobile2 > li.menu-item-24 > .sub-menu').slideToggle();
});

// search 

var openSearch = document.getElementsByClassName('open-search')[0];
var openSearchMobile = document.getElementsByClassName('open-search-mobile')[0];

var formSearch = document.getElementsByClassName('bg-search-form')[0];
var formSearchMobile = document.getElementsByClassName('bg-search-form-mobile')[0];

var closeSearch = document.getElementsByClassName('close-search')[0];
var closeSearchMobile = document.getElementsByClassName('close-search-mobile')[0];

openSearch.onclick = function() {
    formSearch.style.display = "block";
}

openSearchMobile.onclick = function() {
    formSearchMobile.style.display = "block";
}


closeSearch.onclick = function() {
    formSearch.style.display = "none";
}

closeSearchMobile.onclick = function() {
    formSearchMobile.style.display = "none";
}

// // slider banner

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

// slider img home

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


// Accordion

$(function() {
	
	//BEGIN
	$(".accordion__title").on("click", function(e) {

		e.preventDefault();
		var $this = $(this);

		if (!$this.hasClass("accordion-active")) {
			$(".accordion__content").slideUp(400);
			$(".accordion__title").removeClass("accordion-active");
			$('.accordion__arrow').removeClass('accordion__rotate');
		}

		$this.toggleClass("accordion-active");
		$this.next().slideToggle();
		$('.accordion__arrow',this).toggleClass('accordion__rotate');
	});
	//END
	
});


// đảo chiều feature

var reverse = document.getElementsByClassName('list-technology');

for ( var i = 0; i < reverse.length; i++) {
    if (i % 2) {
        reverse[i].classList.add('list-technology2');
    }
}


// -----------------

var reverse2 = document.getElementsByClassName('bg-product-nh23');

for ( var l = 0; l < reverse2.length; l++) {
    if (l % 2) {
        reverse2[l].classList.add('bg-product-nh23-2');
    }
}












