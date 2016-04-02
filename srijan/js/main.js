$(document).ready(function() {
	var navTrigger	=	$('.nav-trigger'),
	navPanel	=	$('.off-canvas'),
	mainContent	=	$('.canvas');

	$(navTrigger).click(function(e) {
		e.preventDefault();
		$('body').toggleClass('reveal-nav');
		$(navPanel).toggleClass('show');
		$(this).toggleClass('clicked');
	});

	$(window).bind('scroll', function () {
		didScroll = true;
		var headerHeight = $('.page-header').outerHeight();
		if ($(window).scrollTop() > headerHeight) {
			$('.page-nav').addClass('fixed').addClass('nav-up');
			$('body').addClass('fixednav')
		} else {
			$('.page-nav').removeClass('fixed');
			$('body').removeClass('fixednav')
		}
	});

	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();
		if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
			$(".parallax").css('-webkit-transform', 'translate3d(0,' +  (scroll/4)  + 'px, 0)');
		}else {
			var scroll = $(window).scrollTop();
			$(".parallax").css('transform', 'translate3d(0,' +  (scroll/4)  + 'px, 0)');
		}

	})

	$('.video-play').click(function(e) {
		e.preventDefault();
		$(this).parents('.video-intro').find('.video-wrap').fadeIn();
		$(this).parents('.video-intro').addClass('video-playing')
		$(this).parents('.video-intro').find('.video-wrap #vid').html('<iframe width="600" height="338" id="ytvideo" frameborder="0" allowfullscreen src="http://www.youtube.com/embed/'+$(this).attr("data-vidid")+'?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1"></iframe>').show();
	});

	$('.close-btn').click(function(e) {
		e.preventDefault();
		$(this).parents('.video-intro').find('.video-wrap').fadeOut();
		$(this).parents('.video-intro').removeClass('video-playing')
		$(this).parents('.video-intro').find('.video-wrap #vid').html('').hide();
	});

	var counter = true;
	var didScroll;
	var lastScrollTop = 0;
	var navbarHeight = $('.page-nav').outerHeight();
	var mainnavHeight = $('.top-banner').outerHeight();
	var delta = navbarHeight/2;

	console.log(navbarHeight);


	setInterval(function() {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 120);

	function hasScrolled() {
		var st = $(this).scrollTop();

      // Make sure they scroll more than delta

      if(Math.abs(lastScrollTop - st) <= delta)
        return;

    if ($('body').hasClass('home-page')) {
    	if (st > lastScrollTop && st > mainnavHeight){
          // Scroll Down
          $('.top-banner').removeClass('nav-down').addClass('nav-up');
          //$('body').removeClass('nav-is-down');
      } else {
          // Scroll Up
          if(st + $(window).height() < $(document).height()) {
          	$('.top-banner').removeClass('nav-up').addClass('nav-down');
            //$('body').addClass('nav-is-down');
        }
    }
    } else
    	{
      if (st > lastScrollTop && st > navbarHeight){
          // Scroll Down
          $('.page-nav').removeClass('nav-down').addClass('nav-up');
          //$('body').removeClass('nav-is-down');
      } else {
          // Scroll Up
          if(st + $(window).height() < $(document).height()) {
          	$('.page-nav').removeClass('nav-up').addClass('nav-down');
            //$('body').addClass('nav-is-down');
        }
    }

    }

    lastScrollTop = st;
};


$('.animate').each(function(){
	var _this = this;
	var inview = new Waypoint({
		element: _this,
		handler: function (direction) {
			$(this.element).addClass('in-view');
		},
		offset: '70%'
	});
});



$('.box-animate').each(function(){
	var _this = this;
	var box = $(this).find('.box');
	var inview = new Waypoint({
		element: _this,
		handler: function (direction) {
			$(this.element).addClass('in-view');
			$(box).each(function(i) {
				$(this).clearQueue().delay(300*i).queue(function(){$(this).addClass('appear');});
			});

		},
		offset: '70%'
	});
});


$('.case-study').each(function(){
	var _this = this;
	var box = $(this).find('.item');
	var inview = new Waypoint({
		element: _this,
		handler: function (direction) {
			$(this.element).addClass('in-view');
			$(box).each(function(i) {
				$(this).clearQueue().delay(300*i).queue(function(){$(this).addClass('appear');});
			});

		},
		offset: '70%'
	});
});


window.setTimeout(function(){
  $('.animate-header').addClass("start-anim");
  $('.header-content h2 span').each(function(i) {
	$(this).clearQueue().delay(400*i).queue(function(){$(this).addClass('appear');});
 });

}, 500);


/*jQuery*/

$(function(){
	var ink, d, x, y;
	$(".btn, nav a").click(function(e){
    if($(this).find(".ink").length === 0){
        $(this).prepend("<span class='ink'></span>");
    }
         
    ink = $(this).find(".ink");
    ink.removeClass("animate");
     
    if(!ink.height() && !ink.width()){
        d = Math.max($(this).outerWidth(), $(this).outerHeight());
        ink.css({height: d, width: d});
    }
     
    x = e.pageX - $(this).offset().left - ink.width()/2;
    y = e.pageY - $(this).offset().top - ink.height()/2;
     
    ink.css({top: y+'px', left: x+'px'}).addClass("animate");
});
});

$('.home-slider').bxSlider({
	auto: true,
	mode: 'fade',
	nextText: '<i class="fa fa-angle-right"></i>',
    prevText: '<i class="fa fa-angle-left"></i>'
});


});

