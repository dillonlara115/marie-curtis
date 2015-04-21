(function($){

$(document).ready(function(){

  //slick on sub pages
  $('.inventory-main-image-container').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
  });

});



(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');


$("#simple-menu").sidr({
    side: "right"
})


// usage:
$(window).smartresize(function(){
    if ($(window).width() >= 968 ) {
        $.sidr('close');
        $('#simple-menu').removeClass('is-open');
    }
});

})(jQuery);