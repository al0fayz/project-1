$(document).ready(function(){
    /* portfolio item */
      $('.portfoilo_list').mixItUp({
      animation: {
        effects:'fade rotateX(-10deg)'
      }
    });
    $(".portfolio_detils").hover(function(){
        $(".portfolio_detils").slideDown();
    });
     new BoxesFx( document.getElementById('boxgallery') );   
    /* fliex slider */
    $(window).load(function() {
        $("#flexiselDemo3").flexisel({
          visibleItems: 5,
          animationSpeed: 1000,
          autoPlay: true,
          autoPlaySpeed: 3000,
          pauseOnHover: true,
          enableResponsiveBreakpoints: true,
          responsiveBreakpoints: {
              portrait: {
                  changePoint:480,
                  visibleItems: 1
              },
              landscape: {
                  changePoint:640,
                  visibleItems: 2
              },
              tablet: {
                  changePoint:768,
                  visibleItems: 3
              }
          }
        });
    });
    /* stickup navigation */
    jQuery(function($) {
        $(document).ready( function() {
            $('.navbar-wrapper').stickUp({
                parts: {
                  0:'home',
                  1:'features',
                  2: 'portfolio',
                  3: 'service',
                  4: 'about',
                  5: 'team',
                  6: 'blog',
                  7: 'contact'
                },
                itemClass: 'menuItem',
                itemHover: 'active',
                topMargin: 'auto'
            });
        });
    });
    /* window load */
    $(window).load(function() {
	    $('#loading-image').hide();
    });
    /* map & contact form */
    $("#map-btn").click(function(){
        $(".conatct_section").slideUp();
        $("#contact-btn").slideUp().show();
    });
    $("#contact-btn").click(function(){
        $(".conatct_section").slideDown();
        $("#contact-btn").hide(200);
    });
    /* prettyPhoto activation  */
    $("area[rel^='prettyPhoto']").prettyPhoto();
    $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:3000, autoplay_slideshow: false});
    $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
    /* slider */


    //Check to see if the window is top if not then display button
  	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

    /* jquery parallax */
    $('.about_area').parallax("50%", 0.4);
    $('.tesimainal_aera').parallax("50%", 0.4);
    $('.fun_facts_area').parallax("50%", 0.4);

     wow = new WOW(
          {
            animateClass: 'animated',
            offset:       100,
            callback:     function(box) {
            }
          }
        );
        wow.init();
     $('.menuItem a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
    });
});

/* counter js */
(function($) {
    "use strict";
    function count($this){
    var current = parseInt($this.html(), 10);
    current = current + 1; /* Where 50 is increment */
    $this.html(++current);
    if(current > $this.data('count')){
    $this.html($this.data('count'));
    } else {
    setTimeout(function(){count($this)}, 50);
    }
    }
    $(".stat-count").each(function() {
    $(this).data('count', parseInt($(this).html(), 10));
    $(this).html('0');
    count($(this));
    });
})(jQuery);

/* prettyPhoto */
api_gallery=['images/fullscreen/1.JPG','images/fullscreen/2.jpg','images/fullscreen/3.JPG'];
api_titles=['API Call Image 1','API Call Image 2','API Call Image 3'];
api_descriptions=['Description 1','Description 2','Description 3'];
/* slider  */


