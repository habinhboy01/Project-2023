// menu pc

var dropdowm = document.querySelectorAll('ul.menu-pc > li.menu-item-234 > ul');

dropdowm.forEach(function (element) {
    element.id = 'dropdown-menu';
})


var dropdowm2 = document.querySelectorAll('ul.menu-pc > li.menu-item-235 > ul');

dropdowm2.forEach(function (element) {
    element.id = 'dropdown-menu2';
})


var dropdowm3 = document.querySelectorAll('ul.menu-pc > li.menu-item-252 > ul');

dropdowm3.forEach(function (element) {
    element.id = 'dropdown-menu3';
})


var dropdowm4 = document.querySelectorAll('ul.menu-pc > li.menu-item-295 > ul');

dropdowm4.forEach(function (element) {
    element.id = 'dropdown-menu4';
})


// menu mobile

var openMenu = document.getElementsByClassName('bar-menu')[0];
var closeMenu = document.getElementsByClassName('close-menu')[0];

var menuMobile = document.getElementsByClassName('modal-menu')[0];
var stopMenu = document.getElementsByClassName('bg-mobile')[0];

openMenu.onclick = function() {
	menuMobile.classList.add('action-menu');
}

closeMenu.onclick = function() {
	menuMobile.classList.remove('action-menu');
}

menuMobile.onclick = function() {
    menuMobile.classList.remove('action-menu');
}


stopMenu.addEventListener('click', function(event) {
  event.stopPropagation();
});


// ----------------

// giới thiệu

var dropdowm_mobile = document.querySelectorAll('ul.menu-mobile > li.menu-item-234 > ul');


dropdowm_mobile.forEach(function (element) {
    element.classList.add('dropdown-menu-mobile');
})

$('.menu-item-234').on('click',function(){
    $('.dropdown-menu-mobile').toggleClass("a");
});

// -----------------

// dịch vụ

var dropdowm_mobile2 = document.querySelectorAll('ul.menu-mobile > li.menu-item-235 > ul');

dropdowm_mobile2.forEach(function (element) {
    element.classList.add('dropdown-menu-mobile2');
})

$('.menu-item-235').on('click',function(){
    $('.dropdown-menu-mobile2').toggleClass("a");
});

// -----------------

// Đào tạo và tuyển dụng

var dropdowm_mobile3 = document.querySelectorAll('ul.menu-mobile > li.menu-item-252 > ul');

dropdowm_mobile3.forEach(function (element) {
    element.classList.add('dropdown-menu-mobile3');
})


$('.menu-item-252').on('click',function(){
    $('.dropdown-menu-mobile3').toggleClass("a");
});

// -----------------------

// tin tức và sự kiện

var dropdowm_mobile4 = document.querySelectorAll('ul.menu-mobile > li.menu-item-295 > ul');

dropdowm_mobile4.forEach(function (element) {
    element.classList.add('dropdown-menu-mobile4');
})


$('.menu-item-295').on('click',function(){
    $('.dropdown-menu-mobile4').toggleClass("a");
});




// slider hình ảnh học viên

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
            items:2
        },
        600:{
            items:2
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
            items:3
        }
    }
})

// hình ảnh banner trang home

$('.carousel_4').owlCarousel({
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


// đặt lịch makeup footer

var openBook = document.getElementsByClassName('open-book')[0];
var closeBook = document.getElementsByClassName('close-book')[0];
var closeModal = document.getElementsByClassName('book-footer2')[0];

var modalBook = document.getElementsByClassName('book-footer')[0];

openBook.onclick = function() {
    modalBook.classList.add('a');
}

closeBook.onclick = function() {
    modalBook.classList.remove('a');
}

modalBook.onclick = function() {
    modalBook.classList.remove('a');
}

closeModal.addEventListener('click', function(event) {
  event.stopPropagation();
});


// liên hệ

var allSelect = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);


var tabs = all('.btn-address');
var contents = all('.map-contact');


tabs.forEach((tab, index) => {
    var content = contents[index];

    tab.onclick = function () {

        allSelect('.btn-address.active-branch').classList.remove('active-branch');
        allSelect('.map-contact.active-map').classList.remove('active-map');

        this.classList.add('active-branch');
        content.classList.add('active-map');

    }
});


// slider hình ảnh

var modalViews = document.querySelectorAll('.modal-slider');
var modalViews2 = document.querySelectorAll('.modal-slider2');

var modalBtns = document.querySelectorAll('.img-thumbnail-page');


var closeModals = document.querySelectorAll(".close-modal-slider");
var sliderModals = document.querySelectorAll(".modal-slider");

var modalImage = function(modalImageClick) {
    modalViews[modalImageClick].classList.add('active-modal-slider');
}

modalBtns.forEach((modalBtn, i) => {
    modalBtn.addEventListener("click", () => {
        modalImage(i);
    });
});

closeModals.forEach((closeModal) => {
    closeModal.addEventListener("click", () => {
        modalViews.forEach((modalView) => {
            modalView.classList.remove('active-modal-slider');
        });
    });
});


sliderModals.forEach((sliderModal) => {
    sliderModal.addEventListener("click", () => {
        modalViews.forEach((modalView) => {
            modalView.classList.remove('active-modal-slider');
        });
    });
});

// ------------

for(var i = 0; i < modalViews2.length; i++) {
    modalViews2[i].addEventListener('click', function(event) {
      event.stopPropagation();
    });
}



// --------------------


$('.carousel_5').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='far fa-chevron-left'></i></div>",
    "<div class='btn-next'><i class='far fa-chevron-right'></i></div>"],

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

// dịch vụ makeup

$('.carousel_6').owlCarousel({
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


// nút cantact footer

var btnContact = document.getElementsByClassName('btn-contact')[0];

var closeBtnContact = document.getElementsByClassName('close-btn-contact')[0];

var displayContactFooter = document.getElementsByClassName('display-contact-footer')[0];

btnContact.onclick = function() {
    displayContactFooter.style.display = "block";
}

closeBtnContact.onclick = function() {
    displayContactFooter.style.display = "none";
}


// bộ lọc tìm kiếm

$(document).ready(function() {

    $('.selectFilter').on('change', function(){

        let url =  window.location.href; //www.abc.com/post

        var cleanUrl = url.split('?')[0];

        let valueSelect = $(this).val(); //popular-post

        var newUrl = cleanUrl + '?filter=' + valueSelect;
        
        window.location.href = newUrl;
    })

});


