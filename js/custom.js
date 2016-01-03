
$(document).ready(function(){

	/*================= Search form toggle ==================*/
	$(".search-btn-top").click(function(){
		$(".search-box").slideToggle();
	});
	
	$("#closeBTN").click(function(){
		$(".search-box").slideUp();
	});
	
	$("#loginButton").click(function(){
		location.href = "dashboard.html";			
	});
	
	/*================ Extra link in header section nav ==================*/
	$(".more-link-btn").click(function(){
		$(".More-links").slideToggle();	
	});

	$(".close-menu").click(function(){
		$(".More-links").slideUp();
	});

	/*================ Login section ==================*/
	
	$("#forgotPasswordLink").click(function(){
		$(".forgot-password").slideToggle();
		return false;	
	});

	$(".close-pop").click(function(){
		$(".login-wrap").show();
		$(".popup-wrapper").hide();
		$(".register-wrap").hide();	
		return false;
	});

	$("#joinLink").click(function(){
		$(".login-wrap").hide();
		$(".register-wrap").show();
		return false;
	});

	$("#LoginInLink").click(function(){		
		$(".register-wrap").hide();
		$(".login-wrap").show();
		return false;
	});	

	
	$("#signUpForm").click(function(){			
		$(".login-form-wrapper").fadeIn();
		return false;
	});

	$(".login-link").click(function(){
		$(".register-wrap").hide();
		$(".login-wrap").show();
		$(".login-form-wrapper").fadeIn();
		return false;
	});


	/*================ Price section on click on top nav link ==================*/
	$(".priceSectionLink").click(function(){
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 500);
		return false;
	});

	/*================ Welcome Pop ==================*/
	$("#login-welcome").click(function(){
		$(".welcome-screen").fadeIn();
		return false;	
	});

	/*================ custom tab pannel for dashboard ==================*/
	$(".custom-tab > ul li").click(function(){
		$(".custom-tab > ul li").removeClass("active");
		$(".content-tabs > div").removeClass("active");
		$(this).addClass("active");
		var liIndex = $(this).index();
		$(".content-tabs > div").eq(liIndex).addClass("active");
		return false;
	});


	/*================ add new field in edit profile info section ==================*/	
	$(".add-new-record-link").click(function(){
		$(this).next().slideToggle("slow");
		return false
	});


	/*================ Login section ==================*/
	$("#proceed").click(function(){
		$(".checkout").slideDown("slow");
		return false;
	});


	/*================ Select package for upgrade ==================*/
	$("#trrybeStandard, #trrybeStandard, #trrybePro").change(function(){
		if($(this).is(":checked") ==  true){
			$(".user-info-block").show();
		} else {
			$(".user-info-block, .checkout").hide();
		}
	});


	$(".own-domain-check").change(function(){
		if($(this).is(":checked") == true){
		$(".own-domain-text").show();
		} else {
			$(".own-domain-text").hide();
		}
	});
	

	$(".checkout input[type='radio']").change(function(){
		if($(this).attr("id") == "paypalPayment") {
			$(".card-payment-block").hide();
			$(".paypal-payment-block").show();
		} else {
			$(".card-payment-block").show();
			$(".paypal-payment-block").hide();
		}
	});


	/*Reply link click on video detail page comment reply form toggle*/
	$(".commentReplyLink").click(function(){
		$(this).siblings(".comment-reply-form").toggle();
		return false;
	});

	$(".comment-reply-form .btn-default").click(function(){
		$(this).parents(".comment-reply-form").hide();
		return false;
	});


	/*add channel and add video block hide show*/
	$("#addNewChannelLink").click(function(){
		$(".upload-video-form").hide();
		$(".create-channel-block").slideToggle("slow");
		return false;
	});
	$("#addNewVideoLink").click(function(){
		$(".create-channel-block").hide();
		$(".upload-video-form").slideToggle("slow");
		return false;
	});
	
});