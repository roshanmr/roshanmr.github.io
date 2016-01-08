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
    } else {
      $(this).parents('.panel').find('.option-box').removeClass('active');
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

})