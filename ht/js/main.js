$(document).ready(function(){
  
    $('.primary-cta').click(function(e) {
    	e.preventDefault();
    	$(this).find('.fa-chevron-down').toggleClass('reverse');
    	$(this).next('.sub-menu').toggleClass('closed');
    });

	$('.user-trigger').click(function(e) {
    	e.preventDefault();
    	$(this).find('.fa-chevron-down').toggleClass('reverse');
    	$(this).next('.sub-menu').toggleClass('closed');
    });


    $('.alert-trigger').click(function(e) {
    	e.preventDefault();
    	$(this).next('.alert-list').toggleClass('closed');
    });

    $(window).load(function(){
				
		$(".scroll-panel").mCustomScrollbar({
			autoHideScrollbar:true,
			theme:"rounded-dark",
			scrollbarPosition: "inside"
		});

		$(".nav-scroll").mCustomScrollbar({
			autoHideScrollbar:true,
			scrollbarPosition: "inside"
		});
				
	});

	$('.context-actions li .add-trigger').click(function(e) {
		e.preventDefault();
		$(this).parent('li').toggleClass('active');
	});

	$('.primary-nav > li > a').click(function(e) {
		e.preventDefault();
		$(this).parents('li').toggleClass('active');
	});
});