$(document).ready(function() {
	$('.slideddl').click(function(){		
		if ($(this).hasClass('subjectddl')){
			$('.slide-section').hide();
			$('#subject').show();
		}
		else if ($(this).hasClass('universityddl')){
			$('.slide-section').hide();
			$('#university').show();
			if ($('#slide-panel').css('display') == 'block'){
				console.log('123');
				$('#slide-panel').css({
					display:'block',
					height: 'auto'
				});
			}
		}
		else if ($(this).hasClass('careerddl')){
			$('.slide-section').hide();
			$('#career').show();
		}

		// $("#slide-panel").animate({
  //        height: 'toggle'
  //    });
  $("#slide-panel").slideToggle();
	});

	$('.closepane').click(function(){		
		$("#slide-panel").slideUp();
		$('.slide-section').hide();
	});

	$('.open-user').click(function(){
		$('#login_drawer').slideDown();
		$('#nav-main').hide();
	});

   $(".login_footer.cancel").on("click", function () {
       $('#login_drawer').slideUp();
		$('#nav-main').show();
   });

   $(".login_footer.back-to-login").on("click", function () {
       $('.login_drawers').hide();
       $('#facebook_login').show();
   });

   $("#create_account_success button.sign-in-btn").on("click", function () {
       $('.login_drawers').hide();
       $('#email_login').show();
   });

   $("#create_account #txtPassword").keyup(function () {
       //console.log($(this).val());
       $("#create_account #txtConfirmPassword").val($(this).val());
   });

   $("#facebook_login .sign-in-screen").on("click", function () {
       $('#facebook_login').hide();
       $('#email_login').show();
       $('#email_login #Email').focus();
   });

   $(".create-account-screen").on("click", function () {
       $('.login_drawers').hide();
       $('#create_account').show();
       $('#create_account #newEmail').focus();
   });

   $(".forgot-password-screen").on("click", function () {
       $('.login_drawers').hide();
       $('#forgot_password').show();
   });


   $('.reviews .slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    autoplay: true,
    arrows: false,
    dots: true,
    responsive:[
      {
        breakpoint: 767,
        setting:{
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

   
  $("body").tooltip({ selector: '[data-toggle=tooltip]' });

  $('#slider-img-uni').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    dots: false,
    fade: true
  });

  $('.whichroute').click(function(){
    $(this).parent().find('#faq-list').show();
  });

  $('.course-progression i').click(function(){
    $(this).parents('.item').find('.arrow-box').slideToggle();
  });

  // scroll smooth
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top -130
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
});