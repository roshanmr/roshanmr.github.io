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
  		$('body').find('a.continue').attr('href', 'creator-pro.html').removeClass('disabled').html('Proceed to Payment <i class="fa fa-shopping-cart"></i>');
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
 

})