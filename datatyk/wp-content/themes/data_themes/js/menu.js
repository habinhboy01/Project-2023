// menu pc

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 55) {
            $('.bg-header3').addClass('sticky');
        }
        else {
            $('.bg-header3').removeClass('sticky');
        }
    })
})


// company

var rowMenu = document.querySelectorAll('ul.menu-pc2 > li.menu-item-561 > ul.sub-menu');

rowMenu.forEach(function (element) {
	element.classList.add('row-menu')
})

// --------------

var subMenu = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1454 > a');

subMenu.forEach(function (element) {
	element.classList.add('bg-sub-menu2')
})

// services

var rowMenu2 = document.querySelectorAll('ul.menu-pc2 > li.menu-item-563 > ul.sub-menu');

rowMenu2.forEach(function (element) {
	element.classList.add('row-menu')
})

// --------------

// DATA ANALYTICS

var subMenu2 = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1462 > a');

subMenu2.forEach(function (element) {
	element.classList.add('bg-sub-menu3')
})

// APPLICATIONS

var subMenu3 = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1469 > a');

subMenu3.forEach(function (element) {
	element.classList.add('bg-sub-menu3')
})

// cloud

var subMenu4 = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1475 > a');

subMenu4.forEach(function (element) {
	element.classList.add('bg-sub-menu3')
})

// TRAINING

var subMenu5 = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1479 > a');

subMenu5.forEach(function (element) {
	element.classList.add('bg-sub-menu3')
})

// LICENSING

var subMenu6 = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1487 > a');

subMenu6.forEach(function (element) {
	element.classList.add('bg-sub-menu3')
})

// MANAGE SERVICES

var subMenu7 = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1498 > a');

subMenu7.forEach(function (element) {
	element.classList.add('bg-sub-menu3')
})

// content services

var contentServices = document.querySelectorAll('ul.row-menu > li.sub-services > ul.sub-menu');

contentServices.forEach(function (element) {
	element.classList.add('content-sub-menu3')
})

var contentServices = document.querySelectorAll('ul.row-menu > li.menu-item-1454 > ul.sub-menu');

contentServices.forEach(function (element) {
	element.classList.remove('content-sub-menu3')
})

// firth content

var firthContent = document.querySelectorAll('ul.row-menu > li.menu-item-1462 > ul.sub-menu');

firthContent.forEach(function (element) {
	element.classList.add('content-sub-menu2')
})


let tabs = document.querySelectorAll(".sub-services");
let tabContents = document.querySelectorAll(".content-sub-menu3");

tabs.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabContents.forEach((content) => {
      content.classList.remove("content-sub-menu2");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("active-sub-menu");
    });
    tabContents[index].classList.add("content-sub-menu2");
    tabs[index].classList.add("active-sub-menu");
  });
});


// our case studies

var rowMenu3 = document.querySelectorAll('ul.menu-pc2 > li.menu-item-564 > ul.sub-menu');

rowMenu3.forEach(function (element) {
	element.classList.add('row-menu3')
})

var subMenu8 = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1505 > a');

subMenu8.forEach(function (element) {
	element.classList.add('bg-sub-menu3');
	
})


var subMenu9 = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1519 > a');

subMenu9.forEach(function (element) {
	element.classList.add('bg-sub-menu3')
})

var contentStudies = document.querySelectorAll('ul.row-menu3 > li.menu-item-1505 > ul.sub-menu');

contentStudies.forEach(function (element) {
	element.classList.add('content-sub-menu4');
	element.classList.add('content-sub-menu5');
})

var contentStudies2 = document.querySelectorAll('ul.row-menu3 > li.menu-item-1519 > ul.sub-menu');

contentStudies2.forEach(function (element) {
	element.classList.add('content-sub-menu4')
})


let tabs2 = document.querySelectorAll(".sub-services3");
let tabContents2 = document.querySelectorAll(".content-sub-menu4");

tabs2.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    tabContents2.forEach((content) => {
      content.classList.remove("content-sub-menu5");
    });
    tabs2.forEach((tab) => {
      tab.classList.remove("active-sub-menu");
    });
    tabContents2[index].classList.add("content-sub-menu5");
    tabs2[index].classList.add("active-sub-menu");
  });
});


// INSIGHTS

var rowMenu4 = document.querySelectorAll('ul.menu-pc2 > li.menu-item-565 > ul.sub-menu');

rowMenu4.forEach(function (element) {
	element.classList.add('row-menu')
})

// --------------

var subMenu10 = document.querySelectorAll('ul.menu-pc2 > li > ul.sub-menu > li.menu-item-1526 > a');

subMenu10.forEach(function (element) {
	element.classList.add('bg-sub-menu2')
})


// menu mobile

var openMenu = document.getElementsByClassName('bar-menu')[0];
var closeMenu = document.getElementsByClassName('close-menu')[0];
var menuMobile = document.getElementsByClassName('bg-header-mobile')[0];

openMenu.onclick = function() {
	menuMobile.classList.add('sticky-menu');
}

closeMenu.onclick = function() {
	menuMobile.classList.remove('sticky-menu');
}

// menu đa cấp mobile

var companyMobile = document.getElementsByClassName('display-sub')[0];

var servicesMobile = document.getElementsByClassName('display-sub3')[0];
var ourCaseStudiesMobile = document.getElementsByClassName('display-sub4')[0];
var resourceMobile = document.getElementsByClassName('display-sub5')[0];


var openCompanyMobile = document.getElementsByClassName('open-company-mobile')[0];

var openServicesMobile = document.getElementsByClassName('open-services-mobile')[0];
var openOurCaseStudiesMobile = document.getElementsByClassName('open-our-case-studies-mobile')[0];
var openResourceMobile = document.getElementsByClassName('open-resource-mobile')[0];


var closeCompanyMobile = document.getElementsByClassName('sub-company')[0];

var closeServicesMobile = document.getElementsByClassName('sub-services-mobile')[0];
var closeOurCaseStudiesMobile = document.getElementsByClassName('sub-our-case-studies')[0];
var closeResourceMobile = document.getElementsByClassName('sub-resource')[0];

// ---------------
// company

openCompanyMobile.onclick = function() {
    companyMobile.classList.add('sticky-menu');
}

closeCompanyMobile.onclick = function() {
    companyMobile.classList.remove('sticky-menu');
}



// -----------------------
// services

openServicesMobile.onclick = function() {
    servicesMobile.classList.add('sticky-menu');
}

closeServicesMobile.onclick = function() {
    servicesMobile.classList.remove('sticky-menu');
}

// ------------------------
// resource

openResourceMobile.onclick = function() {
    resourceMobile.classList.add('sticky-menu');
}

closeResourceMobile.onclick = function() {
    resourceMobile.classList.remove('sticky-menu');
}



// -------------------------
// open-our-case-studies-mobile

openOurCaseStudiesMobile.onclick = function() {
    ourCaseStudiesMobile.classList.add('sticky-menu');
}

closeOurCaseStudiesMobile.onclick = function() {
    ourCaseStudiesMobile.classList.remove('sticky-menu');
}



// ---------------------

$('.open-solution-mobile').on('click', function() {
    $('.border-content-mobile').slideToggle();
})

$('.open-solution-mobile2').on('click', function() {
    $('.border-content-mobile2').slideToggle();
})

$('.open-solution-mobile3').on('click', function() {
    $('.border-content-mobile3').slideToggle();
})

$('.open-solution-mobile4').on('click', function() {
    $('.border-content-mobile4').slideToggle();
})

$('.open-solution-mobile5').on('click', function() {
    $('.border-content-mobile5').slideToggle();
})

$('.open-solution-mobile6').on('click', function() {
    $('.border-content-mobile6').slideToggle();
})

