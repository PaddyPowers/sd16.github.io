$(document).ready(function(){

  var $container = $('.students');

  // initialize Packery after all images have loaded
  $container.imagesLoaded( function() {
    $container.packery({
      // options...
      itemSelector: '.student',
      gutter: '.gutter-sizer'
    });
  });

});
