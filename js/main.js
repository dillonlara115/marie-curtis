(function($){

$(document).ready(function(){


  //slick on sub pages
   $('.main-sub-video').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.sub-video-container'
  });
  $('.sub-video-container').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.main-sub-video',
    arrows: true,
    focusOnSelect: true
  });
});


})(jQuery);