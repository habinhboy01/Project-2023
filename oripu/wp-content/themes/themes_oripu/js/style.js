// menu pc

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 34) {
            $('.header-pc2').addClass('sticky');
        }
        else {
            $('.header-pc2').removeClass('sticky');
        }
    })
})

// ---------------------

var dropdowm = document.querySelectorAll('ul.menu-pc > li.menu-item-21 > ul');

dropdowm.forEach(function (element) {
    element.id = 'dropdown-menu';
})

// thêm nút search vào menu

var html = '<li class="search-header"><i class="fas fa-search"></i></li>';

document.getElementsByClassName("menu-item-24")[0].insertAdjacentHTML('afterend',html);

const openSearch = document.getElementsByClassName('search-header')[0];
const closeSearch = document.getElementsByClassName('close-search')[0];

var searchform = document.getElementsByClassName('searchform')[0];


openSearch.onclick = function() {
    searchform.classList.add('active-search');
};

closeSearch.onclick = function() {
    searchform.classList.remove('active-search');
};



// menu mobile

$('.icon-search-mobile').on('click',function(){
    var inputText = $('.bg-search-mobile');
        if(inputText.css('display') == 'none'){
            $('.bg-search-mobile').show(300);
    
        }else{
            $('.bg-search-mobile').hide(300); 
        }    
})

$('.close-search').on('click',function(){
    var inputText = $('.bg-search-mobile');
        if(inputText.css('display') == 'none'){
            $('.bg-search-mobile').show(300);
    
        }else{
            $('.bg-search-mobile').hide(300); 
        }    
})


// mở menu mobile

var openMenuMobile = document.getElementsByClassName('icon-bar')[0];
var menuMobile = document.getElementsByClassName('bg-menu-mobile')[0];

openMenuMobile.onclick = function() {
    menuMobile.classList.toggle('a');
}

// --------------------


$('.menu-item-21').on('click',function(){
    $('.sub-menu').slideToggle();
});


// footer

var openContact = document.getElementsByClassName('btn-contact-footer')[0];
var closeContact = document.getElementsByClassName('close-contact-footer')[0];

var contactFooter = document.getElementsByClassName('contact-footer')[0];

openContact.onclick = function() {
    contactFooter.style.display = 'block';
    openContact.style.display = 'none';
}

closeContact.onclick = function() {
    contactFooter.style.display = 'none';
    openContact.style.display = 'block';
}


// slider trang home


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


// thông tin hỗ trợ

var allSelect = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);


var tabs = all('.tab-item');
var contents = all('.content-support');


tabs.forEach((tab, index) => {
    var content = contents[index];

    tab.onclick = function () {

        allSelect('.tab-item.active-item').classList.remove('active-item');
        allSelect('.content-support.active-content').classList.remove('active-content');

        this.classList.add('active-item');
        content.classList.add('active-content');

    }
});


// sản phẩm mới

$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fas fa-chevron-left'></i></div>",
    "<div class='btn-next2'><i class='fas fa-chevron-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:8000,
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


// slider partner

$('.carousel_3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev2'><i class='fas fa-chevron-left'></i></div>",
    "<div class='btn-next2'><i class='fas fa-chevron-right'></i></div>"],

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
            items:4
        }
    }
})

// slideshow gallery

for (var i = 0; i < document.getElementsByClassName("img-product-oripu3").length; i++) { 
    document.getElementsByClassName("img-product-oripu3")[i].srcset = "";
}

var imgFeature = document.querySelector('.img-product-oripu3');
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


var activeModal = document.getElementById("modalImg");
var closeModal = document.getElementById("close-modal-img");

var modalImg = document.getElementById("modal-content");

imgFeature.onclick = function() {
    activeModal.style.display = "block";
    modalImg.src = this.src;
}

closeModal.onclick = function() {
    activeModal.style.display = "none";
}

activeModal.onclick = function() {
    activeModal.style.display = "none";
}

modalImg.addEventListener('click', function(event) {
  event.stopPropagation();
});
