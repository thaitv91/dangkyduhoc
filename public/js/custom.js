$(document).ready(function() {
  $('input[type="range"]').rangeslider({
    polyfill: true
  });


	$('.slideddl').click(function(){
    $('#left-nav').css({
      left: -1124
    });
    if ($(this).hasClass('open')){
        $("#slide-panel").slideUp();
        $('.slide-section').hide();
        $(this).removeClass('open');
    }
    else{
      $('.slideddl').removeClass('open')
      $(this).addClass('open');
      if ($(this).hasClass('subjectddl')){
        $("#slide-panel").slideDown();
        $('.slide-section').hide();
        $('#subject').show();
      }
      else if ($(this).hasClass('universityddl')){
        $("#slide-panel").slideDown();
        $('.slide-section').hide();
        $('#university').show();
      }
      else if ($(this).hasClass('careerddl')){
        $("#slide-panel").slideDown();
        $('.slide-section').hide();
        $('#career').show();
      }

      // $("#slide-panel").slideToggle();
    }
    
  });

  

	$('.closepane').click(function(){		
		$("#slide-panel").slideUp();
		$('.slide-section').hide();
	});

	$('.open-user').click(function(){
    $('#left-nav').animate({
      left:-1124
    });
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
    responsive: [
      {
        breakpoint: 1023,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

   
  $("body").tooltip({ selector: '[data-toggle=tooltip]' });
  $('.tip').tooltip();

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

  // fillter subject
  $( "#fillter-subject" ).slider({
    range: true,
    min: 0,
    max: 10,
    values: [ 0, 10 ],
    slide: function( event, ui ) {
        // u could use this function
        $(".ui-slider-range + a").html(ui.values[ 0 ]);
        $(".ui-slider-range + a + a").html(ui.values[ 1 ]);
    },
    change: function(event, ui) {
        // or u could use this function
        $(".min-slider-value + a").html(ui.values[ 0 ]);
        $(".ui-slider-range + a + a").html(ui.values[ 1 ]);
    }
  });
 $(".ui-slider-range + a").html(0);
  $(".ui-slider-range + a + a").html(10);

  // compare

  $('.circliful').circliful({});

  $('.chart').each(function(){
    var feeValue = $(this).find('.fee').attr('data-value')
        feeTitle = $(this).find('.fee').attr('data-title')
        feeprefix = $(this).find('.fee').attr('data-prefix')
        feepostfix = $(this).find('.fee').attr('data-postfix');

    var livingExpensesValue = $(this).find('.living-expenses').attr('data-value')
        livingExpensesTitle = $(this).find('.living-expenses').attr('data-title')
        livingExpensesprefix = $(this).find('.living-expenses').attr('data-prefix')
        livingExpensespostfix = $(this).find('.living-expenses').attr('data-postfix');
    $(this).drawDoughnutChart([
        { title: feeTitle, value: parseInt(feeValue), color: "#A3CA5A", prefix: feeprefix, postfix: feepostfix },
        { title: livingExpensesTitle, value: parseInt(livingExpensesValue), color: "#4484B3", prefix: livingExpensesprefix, postfix: livingExpensespostfix}
    ]);
  });
  function AlignDiv() {
        var maxHeight = 0;
        var totalFeature = 21;
        for (var i = 1; i <= totalFeature; i++) {
            maxHeight = 0;
            $('.feature' + i).each(function () { maxHeight = Math.max(maxHeight, $(this).height()); }).height(maxHeight);
        }
    }

    // function AdjustHeight() {
    //     if (!isMobile()) {
    //         var winHeight = $(window).height();
    //         var h = winHeight - $('#headerMenu').height();
    //         $('#page_compare.compare-div').height(h);
    //     }
    // }
    AlignDiv();
    // AdjustHeight();

    function BindRowHighlight() {
        $(".feature-row").not(".feature-row-top").on("mouseenter", function () {
            var rowid = $(this).children('.feature').attr("data-rowno");
            $(".feature" + rowid).parent().not(".first-col").not(".feature-row-top").css("background-color", "#F8F8F8");
        });
        $(".feature-row").not(".feature-row-top").on("mouseleave", function () {
            var rowid = $(this).children('.feature').attr("data-rowno");
            $(".feature" + rowid).parent().not(".first-col").not(".feature-row-top").css("background-color", "#FFF");
        });
    }
    BindRowHighlight();
    $('.compare-div').sortable();
  // e: compare


  // homepage
  $('#closeRightNav').click(function(){
    $('#right-nav').animate({
      left: -1224
    })
  });
  $('.open-getstarted').click(function(){
    $('#right-nav').animate({
        left: 0
      })
  });

  $('#closeLeftNav').click(function(){
    $('#left-nav').animate({
      left: -1224
    })
  });

  $('#hamburgermenu').click(function(){
    $('#left-nav').animate({
      left: 0
    })
  });
  $('#closeSubNav').click(function(){
    $('#slide-panel').slideUp();
  });

  // chat 
  $('.open-chat').click(function(){
    $('.chatContainer').animate({
      right:0
    });
    $('.chatButton').hide();
  });
  $('.closeBtn').click(function(){
    $('.chatContainer').animate({
      right:-1024
    });
    $('.chatButton').show();
  });

  // guide list
  $('.choose-list-guide select').change(function(){
    var val = $(this).val();
    location.href = $(this).val();

  });

  function cutFromString(oldStr, fullStr) {
    return fullStr.split(oldStr).join('');
  }
  $('.choose-list-guide select option').each(function(){
    var val = cutFromString((location.protocol + "//" + location.host), window.location.href);
    if($(this).val() == val){
      $(this).prop("selected", "selected");
    }
  });

  // $('#dropzone').dropzone({ url: "/file/post" });

  function openRegister(){
    $('#login_drawer').slideDown();
    $('#nav-main').hide();
  }

  $(window).scroll(function(){
    if ($(this).scrollTop()){
      $('body').addClass('fixed-header');
    }
    else{
       $('body').removeClass('fixed-header');
    }
  });
});
