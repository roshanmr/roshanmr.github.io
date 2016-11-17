(function($) {
    function noop() {}
    var defaults = { delay: 100, attr: 'count', onItr: noop, onComplete: noop };
    $.fn.counterUpdate = function(options) {
        var config = $.extend({}, defaults, options);
        this.each(function() {
            var count = +$(this).attr('count');
            var start = 0;
            var iv = setInterval(function() {
                if (start > count) {
                    config.onComplete.call(this);
                    clearInterval(iv);
                    return;
                }
                config.onItr.call(this, start, count);
                $(this).text(start++);
            }.bind(this), config.delay);
        });
    };
})(jQuery);

$(document).ready(function() {


    $(".side-tabs li a").click(function() {
        var aherf = $(this).attr("rel");
        var targetEl = $(this).parents('.tab-links').siblings('.tab-content').find('.content-wrap');
        targetEl.removeClass("active");
        targetEl.each(function() {
            if ($(this).attr('id') === aherf) {
                $(this).toggleClass("active");
            }
        });
        $(this).parents(".side-tabs").find('li').removeClass('tab-active');
        $(this).parents('li').addClass('tab-active');

    });

    /* map location point hightlight based on location selected in tab*/
    $(".side-tabs li a").click(function() {
        var aherf = $(this).attr("rel");
        var aID = aherf + '-mark';
        var targetEl = $(this).parents('.side-tabs').siblings('.map').find('ul li');
        targetEl.removeClass("map-active");
        targetEl.each(function() {
            if ($(this).attr('id') === aID) {
                $(this).toggleClass("map-active");
            }
        });
    });

    $(".side-tabs .tab-content > h2").click(function() {
        var aherf = $(this).attr("rel");
        var targetEl = $(this).siblings('div');
        $(this).parents(".side-tabs").find('.tab-content > h2').removeClass("active");
        $(this).addClass("active");
        targetEl.hide();
        targetEl.each(function() {
            if ($(this).attr('id') === aherf) {
                $(this).toggle();
            }
        });
    });


    $(".become-speaker .page-wrap a.speaker-btn").click(function(e) {
        e.preventDefault();
        $(this).parents('.become-speaker').find('.speaker').toggleClass("speaker-form");
        $(this).toggleClass("close-btn");
    });


    var navTrigger = $('.mobile-nav'),
        navPanel = $('.off-canvas'),
        mainContent = $('.canvas'),
        body = $('body'),
        offCanvas = $('.off-canvas');

    $(navTrigger).click(function(e) {
        e.preventDefault();
        $('body').toggleClass('reveal-nav').toggleClass('fixednav');
        $(navPanel).toggleClass('show');

        $(this).delay(400).queue(function() {
            $(this).toggleClass('active');
            $(this).dequeue();
        });
    });

    $(window).bind('scroll', function() {
        didScroll = true;
        var headerHeight = $('.page-header').outerHeight();
        if ($(window).scrollTop() > headerHeight) {
            $('.page-nav').addClass('fixed').addClass('nav-up');
            $('body').addClass('fixednav');
        } else {
            $('.page-nav').removeClass('fixed');
            $('body').removeClass('fixednav');
        }
    });

    $('.video-play').click(function(e) {
        e.preventDefault();
        $(this).parents('.video-intro').find('.video-wrap').fadeIn();
        $(this).parents('.video-intro').addClass('video-playing')
        $(this).parents('.video-intro').find('.video-wrap #vid').html('<iframe width="600" height="338" id="ytvideo" frameborder="0" allowfullscreen src="/http://www.youtube.com/embed/' + $(this).attr("data-vidid") + '?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1"></iframe>').show();
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
    var delta = navbarHeight / 2;


    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 120);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta

        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        if (st > lastScrollTop && st > mainnavHeight) {
            // Scroll Down
            $('.top-banner').removeClass('nav-down').addClass('nav-up');
            $('.sticky').removeClass('nav-is-down');
            $('.sticky-tab-nav').addClass('tab-up');
            //$('body').removeClass('nav-is-down');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('.top-banner').removeClass('nav-up').addClass('nav-down');
                $('.sticky').addClass('nav-is-down');
                $('.sticky-tab-nav').removeClass('tab-up');
                //$('body').addClass('nav-is-down');
            }


        }

        lastScrollTop = st;


    };


    $('.box-animate').each(function() {
        var _this = this;
        var box = $(this).find('.box');
        var inview = new Waypoint({
            element: _this,
            handler: function(direction) {
                $(this.element).addClass('in-view');
                $(box).each(function(i) {
                    $(this).clearQueue().delay(300 * i).queue(function() { $(this).addClass('appear'); });
                });

            },
            offset: '70%'
        });
    });


    $('.case-study').each(function() {
        var _this = this;
        var box = $(this).find('.item');
        var inview = new Waypoint({
            element: _this,
            handler: function(direction) {
                $(this.element).addClass('in-view');
                $(box).each(function(i) {
                    $(this).clearQueue().delay(300 * i).queue(function() { $(this).addClass('appear'); });
                });

            },
            offset: '70%'
        });
    });


    window.setTimeout(function() {
        $('.animate-header').addClass("start-anim");
        $('.header-content h2 span').each(function(i) {
            $(this).clearQueue().delay(400 * i).queue(function() { $(this).addClass('appear'); });
        });

    }, 500);


    /*jQuery*/

    $(function() {
        var ink, d, x, y;
        $(".btn, nav a, button").click(function(e) {
            if ($(this).find(".ink").length === 0) {
                $(this).prepend("<span class='ink'></span>");
            }

            ink = $(this).find(".ink");
            ink.removeClass("animate");

            if (!ink.height() && !ink.width()) {
                d = Math.max($(this).outerWidth(), $(this).outerHeight());
                ink.css({ height: d, width: d });
            }

            x = e.pageX - $(this).offset().left - ink.width() / 2;
            y = e.pageY - $(this).offset().top - ink.height() / 2;

            ink.css({ top: y + 'px', left: x + 'px' }).addClass("animate");
        });
    });

    if ($('.home-slider').length) {
        $('.home-slider').bxSlider({
            auto: true,
            mode: 'fade',
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>'
        });
    };

    if ($('.feature-slider').length) {
        $('.feature-slider').bxSlider({
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>'
        });
    };


    var $window = $(window);
    var windowsize = $window.width();

    function checkWidth() {
        if (windowsize > 700) {
            $('.home-header .parallax').html("<figure class='bg-video'><video src='/img/bg_1.mp4' autoplay loop> Sorry, your browser doesn't support embedded videos</video></figure>");
            $(window).on("scroll", function() {
                var scroll = $(window).scrollTop();
                if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
                    $(".parallax").css('-webkit-transform', 'translate3d(0,' + (scroll / 4) + 'px, 0)');
                } else {
                    var scroll = $(window).scrollTop();
                    $(".parallax").css('transform', 'translate3d(0,' + (scroll / 4) + 'px, 0)');
                }

            });
        }

    }
    checkWidth();
    $(window).load(checkWidth);

    if ($('.sticky').length) {
        var stickyNavTop = $('.sticky').offset().top;
    }

    var stickyNav = function() {
        var scrollTop = $(window).scrollTop();

        if ($(window).width() > 700) {

            if (scrollTop > stickyNavTop) {
                $('.sticky').addClass('is-stuck');
                $('body').addClass('sticky-on');
            } else {
                $('.sticky').removeClass('is-stuck');
                $('body').removeClass('sticky-on');
            }
        }
    };

    stickyNav();

    var pageHeight = $(".ps-main").outerHeight();

    $(window).scroll(function() {
        stickyNav();
        if ($('.top-banner').hasClass('nav-up')) {
            $('.pagination-nav').addClass('fixed-bottom');
        } else {
            $('.pagination-nav').removeClass('fixed-bottom');
        }

        if ($(window).scrollTop() > (pageHeight - 500)) {
            $('.pagination-nav').removeClass('fixed-bottom');
        }

        if (windowsize < 1024) {
            $('.pagination-nav').removeClass('fixed-bottom');
        }


        // distance from top of footer to top of document
        footertotop = ($('.page-footer').position().top);
        // distance user has scrolled from top, adjusted to take in height of sidebar (570 pixels inc. padding)
        scrolltop = $(document).scrollTop() + 200;
        // difference between the two

        // if user has scrolled further than footer,
        // pull sidebar up using a negative margin

        if (scrolltop > footertotop) {

            $('.bottom-float').addClass('no-float');
        } else {
            $('.bottom-float').removeClass('no-float');
        }

        if (windowsize < 1024) {
            $('.bottom-float').addClass('no-sticky');
        }

    });



    $(window).scroll(function() {
        var windowPos = $(window).scrollTop() + 250; // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

    });


    $('.search-trigger').click(function(e) {
        e.preventDefault;
        $(this).parent('li').siblings('li.search').toggleClass('show');
    });

    $('.secondary-nav .search .search-bar input').keypress(function(e) {
        $(this).parents('.search').addClass('search-active');
    });

    $('.secondary-nav .search .search-bar .search-icon').click(function(e) {
        $(this).parent('.search-bar').toggleClass('opened');
        if ($(this).parent('.search-bar').hasClass('opened')) {
            $(this).parent('.search-bar').find('input').focus();
        } else {
            $(this).parent('.search-bar').find('input').focusout();
        }
    });

    $('.secondary-nav .search .search-bar input').on('focusout', function(e) {
        $(this).parents('.search').removeClass('search-active');
        $(this).val('');
    });

    $('ul.child-menu > li > a[href^="' + location.pathname.split("/")[2] + '"]').parent('li').addClass('active');

    $('.secondary-nav .nav-list > li > a[href^="' + location.pathname.split("/")[2] + '"]').parent('li').addClass('active');

    if ($('.child-menu > li').hasClass('active')) {
        //do nothing
        //this is temporary code. do not use these
    } else {
        $('.child-menu > li:first-child').addClass('active');
    }

    $(document).activeNavigation(".main-nav");

    if (windowsize > 1024) {
        $('.process-side-nav').Stickyfill();
    };

    if (windowsize < 700) {
        $('aside.process-nav .page-side-nav h3').click(function(e) {
            e.preventDefault();
            $(this).parents('.process-nav').toggleClass('expanded');
            $('body').toggleClass('expanded-menu');
        });
    }

    $('.accordion-nav > li > a').click(function(e) {
        e.preventDefault();
        if ($(this).parent('li').hasClass('active')) {
            $(this).addClass('opened-active');
        } else {
            $(this).addClass('opened');
        };

        $(this).parent('li').siblings('li').children('a').removeClass('opened');
        $(this).next('ul.child-menu').addClass('expand');
        $(this).parents('li').siblings('li').children('ul.child-menu').removeClass('expand')
    });

    $('.accordion-nav > li.active').children('ul.child-menu').addClass('expand');

    $('.download-form button').click(function(e) {
        e.preventDefault();
        $(this).parents('.download-form').find('.confirm-txt').addClass('show');
    });

    $('.download-form input').keypress(function(e) {
        $(this).next('button').removeClass('disabled');
    });

    $(".text-rotator .text-rotate").textrotator({
        animation: "fade",
        speed: 1500
    });


    $('.reg-form input[type="submit"]').click(function(e) {
        e.preventDefault();
        $(this).parents('.reg-form').find('.confirm-txt').addClass('show');
        $(this).parents('.reg-form').addClass('registered');
    });


    $('.team-count .count').counterUpdate({
        onItr: function(counter, count) {
            $(this).parent().css('opacity', counter / count);
        },
        delay: 40,
        onComplete: function() { $(this).parent().addClass('animate') }
    });


    /* Smooth Scroll */

    $(".tab-content .links a").click(function() {
        $('html, body').animate({
            scrollTop: $("#writetous").offset().top
        }, 1000);
    });

    $(".webinar-wrapper .about-speaker a").click(function() {
        $('html, body').animate({
            scrollTop: $("#webinar-form").offset().top
        }, 1000);
        $(this).parents(".page-wrap").find('.reg-form').addClass("focus");
    });

    $('.top-band a.accessibility-btn').click(function() {
        $(this).parents('body').toggleClass('accessible');
    });

    var pgurl = window.location.href.split("/");
    pgurl = "/" + pgurl[3];

    $(".secondary-nav ul li > a").each(function() {

        if ($(this).attr("href") == pgurl) {
            $(this).addClass("active");
        }
    });


});


// Check if localStorage is supported
if ('localStorage' in window && typeof localStorage == 'object') {
    $(document).ready(function() {
        // Set the class if greyscale is set
        // Note that localStorage saves everything as strings
        if (localStorage["accessible"] == "1") {
            $('body').addClass('accessible');
        }
        // Register click listener for the button
        $('a.accessibility-btn').click(function() {
            // Toggle greyscale on and off
            if (localStorage["accessible"] != "1") {
                $('body').addClass('accessible');
                localStorage["accessible"] = "1";
            } else {
                $('body').removeClass('accessible');
                localStorage["accessible"] = "0";
            }
        }); // - button click
    }); // - doc ready
}
