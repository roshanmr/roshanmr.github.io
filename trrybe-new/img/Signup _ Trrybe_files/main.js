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

})