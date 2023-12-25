// body trang haiz quizz

// let showQuestion = document.getElementsByClassName('question-item');

// for(var h = 0; h < showQuestion.length; h++) {
//     showQuestion[0].classList.add('active-question');
// }

// $(document).ready(function() {
//     $('.question-item.active-question .accordion-body').slideDown();
//     $('.accordion-header').click(function() {
//         $(this).parent().toggleClass('active-question');
//         $(this).parent().children('.accordion-body').slideToggle();
//     });
// });

$(function() {
	
	//BEGIN
	$(".accordion-header").on("click", function(e) {

		e.preventDefault();
		var $this = $(this);

		if (!$this.hasClass("accordion-active")) {
			$(".accordion-body").slideUp(400);
			$(".accordion-header").removeClass("accordion-active");
			$('i.icon-arrow.far.fa-angle-down').removeClass('accordion__rotate');
		}

		$this.toggleClass("accordion-active");
		$this.next().slideToggle();
		$('i.icon-arrow.far.fa-angle-down',this).toggleClass('accordion__rotate');
	});
	//END
	
});


var faq = document.querySelector('.wrapper');
var faq_btn = document.querySelector('.faq');


if(faq){
    faq_btn.addEventListener("click", () => {
        faq.classList.toggle("show_faq");   
    })
    
}

var num = 0;

var previousButton = document.querySelector('.previous-button');
var nextButton = document.querySelector('.next-button');
var start = document.querySelector('.start');
 if (num == 0) {
        previousButton.style.display = 'none';
        nextButton.style.display = 'none';
 }




function showNextTab() {
  const currentTab = document.querySelector(".nav-link.active");
  const count = document.querySelector(".count span");
 
  
  const nextTab = currentTab.parentElement.nextElementSibling;
  if (nextTab) {
    if(num < 8 && num >=0){
        
        num++;
        count.innerHTML = num;
    };
     if (num == 0) {
        previousButton.style.display = 'none';
        nextButton.style.display = 'none';
        start.style.display = 'block';
        
    } else if(num==8){
        previousButton.style.display = 'block';
        nextButton.style.display = 'none';
        start.style.display = 'none';
    }
    else {
        previousButton.style.display = 'block';
        nextButton.style.display = 'block';
        start.style.display = 'none';
    }
    
    currentTab.classList.remove("active");
    currentTab.setAttribute("aria-selected", "false");
    nextTab.querySelector(".nav-link").classList.add("active");
    nextTab.querySelector(".nav-link").setAttribute("aria-selected", "true");

    const currentContent = document.querySelector(".tab-pane.active");
    currentContent.classList.remove("active");
    currentContent.classList.remove("show");

    const nextContentId = nextTab
      .querySelector(".nav-link")
      .getAttribute("data-bs-target")
      .substring(1);
    const nextContent = document.getElementById(nextContentId);
    nextContent.classList.add("active");
    nextContent.classList.add("show");
  }
}

function showPreviousTab() {
  const currentTab = document.querySelector(".nav-link.active");
  const count = document.querySelector(".count span");
  const previousTab = currentTab.parentElement.previousElementSibling;
  if (previousTab) {
       if(num > 0){
        
        num--;
        count.innerHTML = num;
       
    };
     if (num == 0) {
        previousButton.style.display = 'none';
        nextButton.style.display = 'none';
        start.style.display = 'block';
        
    } else if(num==8){
        previousButton.style.display = 'block';
        nextButton.style.display = 'none';
        start.style.display = 'none';
    }
    else {
        previousButton.style.display = 'block';
        nextButton.style.display = 'block';
        start.style.display = 'none';
    }
    currentTab.classList.remove("active");
    currentTab.setAttribute("aria-selected", "false");
    previousTab.querySelector(".nav-link").classList.add("active");
    previousTab
      .querySelector(".nav-link")
      .setAttribute("aria-selected", "true");

    const currentContent = document.querySelector(".tab-pane.active");
    currentContent.classList.remove("active");
    currentContent.classList.remove("show");

    const previousContentId = previousTab
      .querySelector(".nav-link")
      .getAttribute("data-bs-target")
      .substring(1);
    const previousContent = document.getElementById(previousContentId);
    previousContent.classList.add("active");
    previousContent.classList.add("show");
  }
}

var labels = document.querySelectorAll(".tab-pane label input[type='checkbox']");
var spans = document.querySelectorAll(".tab-pane label input[type='checkbox'] + span");
var labels2 = document.querySelectorAll(".tab-pane label input[type='radio']");
var spans2 = document.querySelectorAll(".tab-pane label span");



// labels.forEach(function (input, index) {
//   input.addEventListener("change", function () {
//     if (input.checked) {
//       spans[index].style.backgroundColor = "#green";
//     }
//   });
// });






  





