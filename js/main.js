(function($){

$(document).ready(function(){


  //slick on sub pages
   $('.inventory-main-image-container').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.sub-image-container'
  });
  $('.sub-image-container').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.inventory-main-image-container',
    arrows: true,
    focusOnSelect: true
  });
});


})(jQuery);