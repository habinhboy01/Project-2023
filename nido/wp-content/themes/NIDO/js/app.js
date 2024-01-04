var swiper = new Swiper(".readingSlider", {
  navigation: {
    nextEl: "#next",
    prevEl: "#prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

var swiper = new Swiper(".reviewSlider", {
  freeMode: true,
  slidesPerView: 2.5,
  breakpoints: {
    300: {
      slidesPerView: 1,
    },
    800: {
      slidesPerView: 2.5,
    },
    1500: {
      slidesPerView: 3.5,
    },
  },
});

var bars = document.querySelector(".bars");
var menuMobile = document.querySelector(".menu-mobile");

if (bars) {
  bars.addEventListener("click", () => {
    menuMobile.classList.add("show");
  });
  window.addEventListener("click", (e) => {
    if (!(menuMobile.contains(e.target) || bars.contains(e.target))) {
      menuMobile.classList.remove("show");
    }
  });
}

var program = document.querySelector("#menu-item-224");
var programlink = document.querySelector("#menu-item-224 a");
if (programlink) {
  programlink.href = "#";
}
var subProgram = document.querySelector(
  ".m-mobile #menu-item-224 > ul.sub-menu"
);

if (program) {
  program.addEventListener("click", () => {
    subProgram.classList.toggle("showw");
  });
}

document.addEventListener("DOMContentLoaded", function () {
  var targetItem = document.querySelector(
    ".group-cards .card-item:first-child .single-card.chichBong"
  );
  var targetItem2 = document.querySelector(
    ".group-cards .card-item:nth-child(2) .single-card.seHong"
  );
  var targetItem3 = document.querySelector(
    ".group-cards .card-item:last-child .single-card.boCau"
  );

  if (targetItem) {
    targetItem.classList.add("hovered");
  }
  if (targetItem2) {
    targetItem2.classList.add("hovered");
  }
  if (targetItem3) {
    targetItem3.classList.add("hovered");
  }
});

$(".gallery-img").magnificPopup({
  delegate: "a",
  type: "image",
  gallery: {
    enabled: true,
  },
  zoom: {
    enabled: true,

    duration: 300,
    easing: "ease-in-out",
  },
});

document.addEventListener("DOMContentLoaded", function () {
  var backToTopButton = document.querySelector(".backToTop");

  window.addEventListener("scroll", function () {
    if (
      document.body.scrollTop > 500 ||
      document.documentElement.scrollTop > 500
    ) {
      backToTopButton.style.opacity = "1";
    } else {
      backToTopButton.style.opacity = "0";
    }
  });
});

const link = encodeURI(window.location.href);
const fb = document.querySelector(".facebook");
if (fb) {
  fb.href = `https://www.facebook.com/share.php?u=${link}`;
}

document.addEventListener("DOMContentLoaded", function () {
  var copyLinkButton = document.querySelector(".link-post");

  copyLinkButton.addEventListener("click", function () {
    var currentPageURL = window.location.href;

    var tempInput = document.createElement("input");
    tempInput.value = currentPageURL;
    document.body.appendChild(tempInput);

    tempInput.select();
    tempInput.setSelectionRange(0, 99999);

    document.execCommand("copy");

    document.body.removeChild(tempInput);

    copyLinkButton.classList.add("copied");
    setTimeout(function () {
      copyLinkButton.classList.remove("copied");
    }, 1000);
  });
});
