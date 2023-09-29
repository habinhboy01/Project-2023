// menu pc

// menu datatyk

var acc = document.getElementsByClassName("open-datatyk");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("text-menu3");
  });
}

var openCompany = document.getElementsByClassName("open-company")[0];
var menuCompany = document.getElementById("company");

var openSolution = document.getElementsByClassName("open-solution")[0];
var menuSolution = document.getElementById("solution");

var openServices = document.getElementsByClassName("open-services")[0];
var menuServices = document.getElementById("services");

var openStudies = document.getElementsByClassName("open-studies")[0];
var menuStudies = document.getElementById("studies");

var openResource = document.getElementsByClassName("open-resource")[0];
var menuResource = document.getElementById("resource");


openCompany.onclick = function() {
    menuCompany.classList.toggle('bg-sub-menu4');

    menuSolution.classList.remove('bg-sub-menu4');
    openSolution.classList.remove('text-menu3');

    menuServices.classList.remove('bg-sub-menu4');
    openServices.classList.remove('text-menu3');

    menuStudies.classList.remove('bg-sub-menu4');
    openStudies.classList.remove('text-menu3');

    menuResource.classList.remove('bg-sub-menu4');
    openResource.classList.remove('text-menu3');
}

openSolution.onclick = function() {
    menuSolution.classList.toggle('bg-sub-menu4');
    menuCompany.classList.remove('bg-sub-menu4');
    openCompany.classList.remove('text-menu3');

    menuServices.classList.remove('bg-sub-menu4');
    openServices.classList.remove('text-menu3');

    menuStudies.classList.remove('bg-sub-menu4');
    openStudies.classList.remove('text-menu3');

    menuResource.classList.remove('bg-sub-menu4');
    openResource.classList.remove('text-menu3');
}

openServices.onclick = function() {
    menuServices.classList.toggle('bg-sub-menu4');

    menuCompany.classList.remove('bg-sub-menu4');
    openCompany.classList.remove('text-menu3');

    menuSolution.classList.remove('bg-sub-menu4');
    openSolution.classList.remove('text-menu3');

    menuStudies.classList.remove('bg-sub-menu4');
    openStudies.classList.remove('text-menu3');

    menuResource.classList.remove('bg-sub-menu4');
    openResource.classList.remove('text-menu3');
}

openStudies.onclick = function() {
    menuStudies.classList.toggle('bg-sub-menu4');

    menuCompany.classList.remove('bg-sub-menu4');
    openCompany.classList.remove('text-menu3');

    menuSolution.classList.remove('bg-sub-menu4');
    openSolution.classList.remove('text-menu3');

    menuServices.classList.remove('bg-sub-menu4');
    openServices.classList.remove('text-menu3');

    menuResource.classList.remove('bg-sub-menu4');
    openResource.classList.remove('text-menu3');
}

openResource.onclick = function() {
    menuResource.classList.toggle('bg-sub-menu4');

    menuCompany.classList.remove('bg-sub-menu4');
    openCompany.classList.remove('text-menu3');

    menuSolution.classList.remove('bg-sub-menu4');
    openSolution.classList.remove('text-menu3');

    menuServices.classList.remove('bg-sub-menu4');
    openServices.classList.remove('text-menu3');

    menuStudies.classList.remove('bg-sub-menu4');
    openStudies.classList.remove('text-menu3');
}


// ----------------

var allSelect = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);


var button = all('.tab-sub-menu');
var button2 = all('.tab-sub-menu2');
var button3 = all('.tab-sub-menu3');
var contents = all('.content-sub-menu');
var contents2 = all('.content-sub-menu3');
var contents3 = all('.content-sub-menu4');

button.forEach((tab, index) => {
    var content = contents[index];

    tab.onclick = function () {

        allSelect('.tab-sub-menu.active-sub-menu').classList.remove('active-sub-menu');
        allSelect('.content-sub-menu.content-sub-menu2').classList.remove('content-sub-menu2');

        this.classList.add('active-sub-menu');
        content.classList.add('content-sub-menu2');

    }
});

button2.forEach((tab, index) => {
    var content = contents2[index];

    tab.onclick = function () {

        allSelect('.tab-sub-menu2.active-sub-menu').classList.remove('active-sub-menu');
        allSelect('.content-sub-menu3.content-sub-menu2').classList.remove('content-sub-menu2');

        this.classList.add('active-sub-menu');
        content.classList.add('content-sub-menu2');

    }
});

button3.forEach((tab, index) => {
    var content = contents3[index];

    tab.onclick = function () {

        allSelect('.tab-sub-menu3.active-sub-menu').classList.remove('active-sub-menu');
        allSelect('.content-sub-menu4.content-sub-menu2').classList.remove('content-sub-menu2');

        this.classList.add('active-sub-menu');
        content.classList.add('content-sub-menu2');

    }
}); 




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
var solutionMobile = document.getElementsByClassName('display-sub2')[0];
var servicesMobile = document.getElementsByClassName('display-sub3')[0];
var ourCaseStudiesMobile = document.getElementsByClassName('display-sub4')[0];
var resourceMobile = document.getElementsByClassName('display-sub5')[0];


var openCompanyMobile = document.getElementsByClassName('open-company-mobile')[0];
var openSolutionMobile = document.getElementsByClassName('open-solution-mobile')[0];
var openServicesMobile = document.getElementsByClassName('open-services-mobile')[0];
var openOurCaseStudiesMobile = document.getElementsByClassName('open-our-case-studies-mobile')[0];
var openResourceMobile = document.getElementsByClassName('open-resource-mobile')[0];


var closeCompanyMobile = document.getElementsByClassName('sub-company')[0];
var closeSolutionMobile = document.getElementsByClassName('sub-solution')[0];
var closeServicesMobile = document.getElementsByClassName('sub-services')[0];
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
// solution

openSolutionMobile.onclick = function() {
    solutionMobile.classList.add('sticky-menu');
}

closeSolutionMobile.onclick = function() {
    solutionMobile.classList.remove('sticky-menu');
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