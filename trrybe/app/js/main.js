$(document).ready(function() {

  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
      $(".parallax").css('-webkit-transform', 'translate3d(0,' +  (scroll/3)  + 'px, 0)');
    }else {
     var scroll = $(window).scrollTop();
     $(".parallax").css('transform', 'translate3d(0,' +  (scroll/3)  + 'px, 0)');
   }
 })

  $('.plan-list .plan').click(function(e) {
  	e.preventDefault();
  	$(this).find('.choose-plan').toggleClass('checked');
  	$(this).siblings('.plan').find('.choose-plan').removeClass('checked');
  	if ($(this).find('.choose-plan.checked').hasClass('medium')) {
  		$('body').find('a.continue').attr('href', 'medium-business.html').removeClass('disabled').html('Proceed to Payment <i class="fa fa-shopping-cart"></i>');
  	} else if ($(this).find('.choose-plan.checked').hasClass('enterprise')) {
  		$('body').find('a.continue').attr('href', 'enterprise.html').removeClass('disabled').html('Proceed to Payment  <i class="fa fa-shopping-cart"></i>');
  	} else if ($(this).find('.choose-plan.checked').hasClass('free')) {
  		$('body').find('a.continue').attr('href', 'free.html').removeClass('disabled').html('Complete Registration  <i class="fa fa-chevron-circle-right"></i>');
  	} else {
  		$('body').find('a.continue').attr('href', '#nogo').addClass('disabled');
  	}
  });

  $('.channel-url-switch .toggle-field li a').click(function(e) {
  	e.preventDefault();
  	if ($(this).hasClass('active')) {
  		e.preventDefault
  	} else{
  		$(this).addClass('active')
  		$(this).parents('li').siblings('li').find('a.active').removeClass('active')
  	};
  	if ($(this).hasClass('sub-domain')) {
  		$('.field-item.channel-url-settings .free-channel').addClass('active')
  		$('.field-item.channel-url-settings .self-domain').removeClass('active')
  	} else if ($(this).hasClass('domain')){
  		$('.field-item.channel-url-settings .free-channel').removeClass('active')
  		$('.field-item.channel-url-settings .self-domain').addClass('active')
  	};
  });
 
  $('.tab-nav li:first-child').addClass('active');

  var tabnavItem  = $('.tab-nav li a'),
      tabItem     = $('.tab-wrap .tab'),
      firstTab    = $('.tab-wrap .tab:first-child');

  $(firstTab).addClass('active');

  $(tabnavItem).click(function(e) {
    e.preventDefault();
    $(this).parent('li').siblings('li.active').removeClass("active"); 
    $(this).parent('li').addClass("active"); 
    $(tabItem).removeClass('active');

    var activeTab = $(this).attr('href');
    $(activeTab).addClass('active');
    return false;
  });

  $('#addChannel .button-row .create-channel').click(function(e) {
    e.preventDefault();
    $(this).parents('.channel-form').addClass('done');
    $(this).parents('.channel-form').siblings('.channel-created').addClass('done');
  });

  $('.public-setting-toggle li a').click(function(e) {
    e.preventDefault();
    $(this).addClass('active');
    $(this).parents('li').siblings('li').children('a.active').removeClass('active');

    if ($(this).hasClass('some-private')) {
      $(this).parents('.panel').find('.option-box').addClass('active');
      $('#sitepreview-link').attr('href', 'http://srijanvideos.dev/restricted');
    } else if ($(this).hasClass('all-private')){
      $(this).parents('.panel').find('.option-box').removeClass('active');
      $('#sitepreview-link').attr('href', 'http://srijanvideos.dev/login.html');
    } else if ($(this).hasClass('all-public')){
      $(this).parents('.panel').find('.option-box').removeClass('active');
      $('#sitepreview-link').attr('href', 'http://srijanvideos.dev');
    }  
  });
  $('.channel-list li a span.channel-status').html('public');
  $('.channel-list li a.locked span.channel-status').html('Private');

  $('.channel-list li a').click(function(e) {
    e.preventDefault();
    if ($(this).hasClass('locked')) {
      $(this).removeClass('locked');
      $(this).children('.channel-status').html('Public');
      $(this).children('.fa').attr('class', 'fa fa-unlock');    
    } else{
      $(this).addClass('locked')
      $(this).children('.channel-status').html('Private')
      $(this).children('.fa').attr('class', 'fa fa-lock');    
    };
  });

   $('.radio-toggle li a').click(function(e) {
    e.preventDefault();
    if ($(this).hasClass('active')) {
      e.preventDefault
    } else{
      $(this).addClass('active')
      $(this).parents('li').siblings('li').find('a.active').removeClass('active')
    };
  });

   $('.check-toggle li a').click(function(e) {
    e.preventDefault();
    $(this).toggleClass('active')
  });

   $('.sort-btn').click(function(e) {
     e.preventDefault();
     $(this).toggleClass('active');
     $(this).siblings('a.sort-btn.active').removeClass('active');
   });

   $('.approvebtn').click(function(e) {
     e.preventDefault();
      $(this).parents('li').addClass("approved");
     
   });

  $('.rejectbutton').click(function(e) {
     e.preventDefault();
      $(this).parents('li').addClass("deleted");
     
   });
   
   $('#searchTrigger').click(function(e) {
     e.preventDefault();
     $(this).toggleClass('active');
     $('.app-search').toggleClass('open');
     if ($(this).hasClass('active')) {
      $('.app-search input').focus();
     }
   });

   $('.app-search .close-this').click(function(e) {
     $(this).parents('.app-search').removeClass('open');
     $('#searchTrigger').removeClass('active');
   });

   $('#videoURL').blur(function(e) {
     e.preventDefault();
     if ($(this).val().length === 0) {
      $('.video-preview .loading').html("Waiting")
     } else {
      $('.video-preview .loading').css("opacity", "0");
      $('.video-preview .video-poster').addClass('visible');
      $('#videoDescription').val("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus eleifend lectus a elementum. Quisque cursus felis ac risus aliquet vestibulum. Fusce consequat venenatis risus, et tempor tellus sagittis quis. ")
     };
   });

   if ($('.vid-service li a.allservices').hasClass('active')) {
      $('#serviceSelector .service-list li a').addClass('checked');
   } else{
      $('#serviceSelector .service-list li a').removeClass('checked');
   };

   $('.vid-service li a').click(function(e) {
      e.preventDefault();
      if ($('.vid-service li a.allservices').hasClass('active')) {
        $('#serviceSelector .service-list li a').addClass('checked');
      } else{
        $('#serviceSelector .service-list li a').removeClass('checked');
      };
   });

   $('#serviceSelector .service-list li a').click(function(e) {
     e.preventDefault();
     $(this).toggleClass('checked');
   });

   $('#serviceSearch').focusout(function(e) {
     $(this).next('.suggest-list').addClass('open');
   });

   $('.suggest-list li a').click(function(e) {
     e.preventDefault();
     var thisVal = $(this).text();
     $('#serviceSearch').val(thisVal);
     $(this).parents('.suggest-list').removeClass('open');
     $(this).parents('#serviceSelector').find('.service-list').append('<li><a href="#" class="checked"><span class="check"><i class="dot"></i></span>'+thisVal+'</a></li>')
   });

})