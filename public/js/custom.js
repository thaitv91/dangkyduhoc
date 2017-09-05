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

});