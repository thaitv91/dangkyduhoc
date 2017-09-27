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

$('#slider-img-fair').slick({
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

  $('.smoothScroll a').smoothScroll({offset: -100});

  // fixed column left guide detail
  $(window).scroll(function(){
    if ($('#guide-detail').length){
      var w_scroll = $(this).scrollTop()
          content_top = $('#guide-detail').offset().top;

      var top_1 = w_scroll+ 80 - content_top;
      
      if (content_top - w_scroll <= 80){
        $('#content-fixed').addClass('fixed');
        $('#content-fixed .left-guide-detail').css({
          top: top_1
        });
      }
      else{
        $('#content-fixed').removeClass('fixed');
      }

      var content_contact = $('#ask-us-a-question').offset().top;
      var top_2 = content_contact - w_scroll;
      if (top_2 <= 650){
        $('#content-fixed').removeClass('fixed');
      }
    }    
  });

  // apply
  $('#add-course-btn').click(function(){
    $('#add_course_dialog').slideToggle();
  });
});