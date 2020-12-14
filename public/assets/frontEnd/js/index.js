
 // tabbed content
    // http://www.entheosweb.com/tutorials/css/tabs.asp
    $(".tab_content").hide();
    $(".tab_content:first").show();

  /* if in tab mode */
    $("ul.tabs li").click(function() {
		
      $(".tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
		
      $("ul.tabs li").removeClass("active");
      $(this).addClass("active");

	  $(".tab_drawer_heading").removeClass("d_active");
	  $(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	  
    });
	/* if in drawer mode */
	$(".tab_drawer_heading").click(function() {
      
      $(".tab_content").hide();
      var d_activeTab = $(this).attr("rel"); 
      $("#"+d_activeTab).fadeIn();
	  
	  $(".tab_drawer_heading").removeClass("d_active");
      $(this).addClass("d_active");
	  
	  $("ul.tabs li").removeClass("active");
	  $("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
    });
	
	
	/* Extra class "tab_last" 
	   to add border to right side
	   of last tab */
	$('ul.tabs li').last().addClass("tab_last");
	
	
	$(document).ready(function() { 
  $('.xd-accordion .side-links').click(function(e) {
    var xd_menu = $(this).closest('li').find('ul');

    $(this).closest('.xd-accordion').find('ul').not(xd_menu).slideUp();

    if ($(this).hasClass('up')) {
      $(this).removeClass('up');
    } else {
      $(this).closest('.xd-accordion').find('.side-links .up').removeClass('up');
      $(this).addClass('up');
    }

    xd_menu.stop(false, true).slideToggle();

    e.preventDefault();
  });
  
});




$(document).ready(function() {
  $('.popup-btn').click(function(e) {
    $('.popup-wrap').fadeIn(500);
    $('.popup-box').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap').fadeOut(500);
    $('.popup-box').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});
$(document).ready(function() {
  $('.popup-btn1').click(function(e) {
    $('.popup-wrap1').fadeIn(500);
    $('.popup-box1').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap1').fadeOut(500);
    $('.popup-box1').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});

$(document).ready(function() {
  $('.popup-btn2').click(function(e) {
    $('.popup-wrap2').fadeIn(500);
    $('.popup-box2').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap2').fadeOut(500);
    $('.popup-box2').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});
$(document).ready(function() {
  $('.popup-btn3').click(function(e) {
    $('.popup-wrap3').fadeIn(500);
    $('.popup-box3').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap3').fadeOut(500);
    $('.popup-box3').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});

$(document).ready(function() {
  $('.popup-btn5').click(function(e) {
    $('.popup-wrap5').fadeIn(500);
    $('.popup-box5').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap5').fadeOut(500);
    $('.popup-box5').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});

$(document).ready(function() {
  $('.popup-btn10').click(function(e) {
    $('.popup-wrap10').fadeIn(500);
    $('.popup-box10').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap10').fadeOut(500);
    $('.popup-box10').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});

$(document).ready(function() {
  $('.popup-btn11').click(function(e) {
    $('.popup-wrap11').fadeIn(500);
    $('.popup-box11').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap11').fadeOut(500);
    $('.popup-box11').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});

$(document).ready(function() {
  $('.popup-btn12').click(function(e) {
    $('.popup-wrap12').fadeIn(500);
    $('.popup-box12').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap12').fadeOut(500);
    $('.popup-box12').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});
$(document).ready(function() {
  $('.popup-btn13').click(function(e) {
    $('.popup-wrap13').fadeIn(500);
    $('.popup-box13').removeClass('transform-out').addClass('transform-in');

    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
    $('.popup-wrap13').fadeOut(500);
    $('.popup-box13').removeClass('transform-in').addClass('transform-out');

    e.preventDefault();
  });
});




