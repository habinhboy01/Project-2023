// ứng tuyển

$('.recruitment').on('click',function(){
    var inputText = $('.bg-recruitment2');
        if(inputText.css('display') == 'none'){
            $('.bg-recruitment2').show(300);
    
        }else{
            $('.bg-recruitment2').hide(300); 
        }    
})


// slider technology
var allSelect = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);

var logoTechnology = all('.logo-technology');
var contentTechnology = all('.mySlides');

logoTechnology.forEach((tab, index) => {
    var content = contentTechnology[index];

    tab.onclick = function () {

        allSelect('.logo-technology.active-slide').classList.remove('active-slide');
        allSelect('.mySlides.fade-slide').classList.remove('fade-slide');

        this.classList.add('active-slide');
        content.classList.add('fade-slide');

    }
});


// language

var a = document.querySelectorAll('.trp-language-switcher > div');

a.forEach(function (element) {
  element.id = 'language';
})

// slider our client

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><img src='https://website.datatyk.com/wp-content/themes/data_themes/images/prev.png'></div>",
    "<div class='btn-next'><img src='https://website.datatyk.com/wp-content/themes/data_themes/images/next.png'></div>"],

    autoplay:true,
    // autoplayTimeout:8000,
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


$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><img src='https://website.datatyk.com/wp-content/themes/data_themes/images/prev.png'></div>",
    "<div class='btn-next'><img src='https://website.datatyk.com/wp-content/themes/data_themes/images/next.png'></div>"],

    autoplay:true,
    // autoplayTimeout:8000,
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

// Food & Beverage

const accordionTitles = document.querySelectorAll(".text-food2");

accordionTitles.forEach((accordionTitle) => {
  accordionTitle.addEventListener("click", () => {
    if (accordionTitle.classList.contains("active-accordion")) {
      accordionTitle.classList.remove("active-accordion");
    } else {
      const accordionTitlesWithIsOpen = document.querySelectorAll(".active-accordion");
      accordionTitlesWithIsOpen.forEach((accordionTitleWithIsOpen) => {
        accordionTitleWithIsOpen.classList.remove("active-accordion");
      });
      accordionTitle.classList.add("active-accordion");
    }
  });
});




