
// Accordion

$( document ).ready(function() {
    
	$(function() {
	
		//BEGIN
		$(".title-list").on("click", function(e) {

			e.preventDefault();
			var $this = $(this);

			if (!$this.hasClass("accordion-active")) {
				$(".content-list").slideUp(400);
				$(".title-list").removeClass("accordion-active");
				$('.accordion__arrow').removeClass('accordion__rotate');
			}

			$this.toggleClass("accordion-active");
			$this.next().slideToggle();
			$('.accordion__arrow',this).toggleClass('accordion__rotate');
		});
		//END
	
	});

});


// scroll class

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 900) {
            $('.sticky-siderbar').addClass('sticky-siderbar-2');
        }
        else {
            $('.sticky-siderbar').removeClass('sticky-siderbar-2');
        }
    })
})