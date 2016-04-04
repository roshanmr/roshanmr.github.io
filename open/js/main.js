$(document).ready(function() {
  $('.bxslider').bxSlider({
    mode: 'horizontal',
    useCSS: true,
    infiniteLoop: false,
    hideControlOnEnd: true,
    speed: 400,
    nextText: '<i class="fa fa-angle-right"></i>',
        prevText: '<i class="fa fa-angle-left"></i>'
  }); 

  // Hide Header on on scroll down
  var counter = true;
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('.top-header').outerHeight();

  $(window).scroll(function(event){
    didScroll = true;
    try{
      var elementFind = $("#recommendStory").offset();
      var elementPos = elementFind.top;
      var windowScroll = $(window).scrollTop();

      if(windowScroll > elementPos && counter == true) {      
        $(".subscribe-magazine").animate({right: "0"}, 500);
        counter = false;
      }
    }catch(e){}
  });

  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 120);

  function hasScrolled() {
    var st = $(this).scrollTop();

      // Make sure they scroll more than delta
      if (st > lastScrollTop && st > navbarHeight){
          // Scroll Down
          $('.top-header').removeClass('nav-down').addClass('nav-up');
          //$('body').removeClass('nav-is-down');
        } else {
          // Scroll Up
          if(st + $(window).height() < $(document).height()) {
            $('.top-header').removeClass('nav-up').addClass('nav-down');
            //$('body').addClass('nav-is-down');
          }
        }

        lastScrollTop = st;
      }



  $('.popular-tab ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })



  var element = document.querySelector('#primaryNav');
  if((element.offsetWidth < element.scrollWidth)){
    $(element).addClass('overflowing');
  }
  else{

  }

  var offsetMenu = $('.menu-wrap');
  var closeMenu = $('.menu-wrap .menu-close');

  $('.open-menu').click(function(e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $(offsetMenu).toggleClass('open');
    $('body').toggleClass('menu-opened');
  });

  $(closeMenu).click(function(e) {
    e.preventDefault();
    $(this).parent('.menu-wrap').removeClass('open');
    $('.open-menu').removeClass('active');
    $('body').removeClass('menu-opened');
  });

  /*subscribe magazine close*/

  $(".subscribe-magazine .close").click(function(){    
    $(".subscribe-magazine").fadeOut();
    return false;
  });

  /*$("#currentIssue").clone().appendTo(".current-issue-copy");*/

  /*side bar tab on Story pages*/
  $(".most-popular > ul li").click(function(){
    $(".panel .box").removeClass("active");
    $(".most-popular > ul li").removeClass("active");
    $(this).addClass("active");
    var indexValue = $(this).index();
    $(".panel .box").eq(indexValue).addClass("active");    
    return false;
  });
 

 $('.article-entry .content-detail').bind('inview', function (event, visible) {
      if (visible == true) {
       $(".social-share").addClass('sticky');
      } else {
         $(".social-share").removeClass('sticky');
      }
    });


$(".video-container video").hover(function() {
  $(this).prop("controls", true);
}, function() {
  $(this).prop("controls", false);

});


});