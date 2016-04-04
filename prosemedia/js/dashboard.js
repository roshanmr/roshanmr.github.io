$(document).ready(function() {
	if ( $( ".page-nav" ).length ) {
		$('body').addClass('has-page-nav');
	}
	preloader = new $.materialPreloader({
		position: 'top',
		height: '5px',
		col_1: '#0b6cb7',
		col_2: '#ff7b7b',
		col_3: '#8a00ff',
		col_4: '#4ada5f',
		fadeIn: 200,
		fadeOut: 200
	});
	preloader.on();
	
	$('body').addClass('loading');

	$('.tab-options input:checked').parent('label').addClass('active');

	$('#oneTimeTab').addClass('active')

	$('.tab-options input[type=radio]').click(function() {
		$('input[name="' + this.name + '"]').each(function(){
			$(this.parentNode).toggleClass('active', this.checked);
		});

		if ($(this).is("#oneTime")) {
			$('#oneTimeTab').addClass('active');
			$('#recurringTab').removeClass('active');
		} else if ($(this).is("#recurring")){
			$('#recurringTab').addClass('active');
			$('#oneTimeTab').removeClass('active');
		}

	});


	var navTrigger = $('.nav-trigger a');

	$(navTrigger).click(function(e) {
		e.preventDefault();
		$(this).children('span.nav-icon')
		$(this).parents('.sidebar').toggleClass('opened');
		$('body').toggleClass('nav-opened');
	});

	$('.callout-wrap a').on('mouseover', function(e) {
		e.preventDefault();
		$(this).siblings('.callout').fadeIn();
	});

	$('.callout .close-btn').on('click', function(e){
		e.preventDefault();
		$(this).parents('.callout').fadeOut();
	});

	$('.box-select input[type="checkbox"]:checked').parents('li').addClass('selected');

	var boxSelect = $('.box-select input[type="checkbox"]');
	var boxRadio = $('.box-select input[type="radio"]');
	var cartPreview = $('.cart-preview');

	$(boxSelect).on('change', function(e) {
		if ($(this).prop('checked') == true) {
			$(this).parents('li').addClass('selected');
			$(cartPreview).addClass('has-order');
		} else{
			$(this).parents('li').removeClass('selected');
		};
	});

	$('.form-section .trigger-callout').mouseover(function() {
		var target = "#" + $(this).data("target");
		$(target).addClass('visible');
	});

	$('.form-section .trigger-callout').mouseout(function() {
		var target = "#" + $(this).data("target");
		$(target).removeClass('visible');
	});

	var tagSelect		= $('.tag-input'),
		tagField		= $(tagSelect).children('.tag-input-field'),
		tagMenu			= $(tagSelect).children('.tag-menu'),
		tagList			= $(tagSelect).children('.tag-list'),
		parentTagList	= $(tagList).children('.parent-list'),
		subTagList		= $(parentTagList).children('.sub-list'),
		tagCat			= $('.tag-input .tag-list .parent-list>li>a'),
		tagSub			= $('.tag-input .tag-list .parent-list>li>.sub-list>li a'),
		firstParentTag	= $('.tag-input .tag-list .parent-list>li:first-child');

	$(tagList).hide();
	$(firstParentTag).addClass('active')

	$(tagMenu).click(function(e) {
		e.preventDefault();
		$(this).siblings('.tag-list').fadeToggle(100, 'swing', function(){
		})
	});


	$(tagCat).click(function(e) {
		e.preventDefault();
		$(this).parent('li').addClass('active');
		$(this).parent('li').siblings('li.active').removeClass('active');
	})

	$('.tag-input .tag-list .parent-list>li>.sub-list>li input').on('change', function(e) {
		e.preventDefault();
		if ($(this).is(':checked')) {
			$(this).parents('.tag-input').children('.tag-input-field').append("<label for=" + $(this).attr("id") + ">"+ $(this).parent('.check-box-icon').parent('li').children('label').text() +" <span class='glyphicon glyphicon-remove'></span> </label>");
			$(this).parents('li').addClass('selected');
		} else if ($(this).not(':checked')){
			$(this).parents('.tag-input').children('.tag-input-field').children("label[for=" + $(this).attr("id") + "]").remove();
			$(this).parents('li').removeClass('selected');
		};
	});

	$('.tag-input .tag-list .parent-list li .sub-list li input:checked').parent('li').addClass('selected');

	var checkedTag = $('.tag-input .tag-list .parent-list li .sub-list li input:checked');

	$(checkedTag).parents().parents('.tag-input').children('.tag-input-field').append("<label for=" + $(checkedTag).attr("id") + ">"+ $(checkedTag).parent('.check-box-icon').parent('li').children('label').text() +" <span class='glyphicon glyphicon-remove'></span> </label>");
	$(checkedTag).parents('li').addClass('selected');

	$('.tag-input .done-btn').click(function(e) {
		e.preventDefault();
		$(this).parents('.tag-list').fadeOut('100', function() {
			
		});
	});

	$('.tag-input .clear-btn').click(function(e) {
		e.preventDefault();
		$(this).parents('.tag-list').find("input:checked").click()
		$(this).parents('.tag-list').fadeOut('100', function() {
		});
	});

	$('.nested-trigger').click(function(e) {
		e.preventDefault();
		$(this).parents('tr').next('.sub-table').toggleClass('collapsed').toggleClass('expanded');
		$(this).toggleClass('opened');
	});

});


$(window).load(function() {
	preloader.off();
	$('body').removeClass('loading').addClass('loaded');
});