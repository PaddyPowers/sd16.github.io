$(document).ready(function(){

  var $container = $('.students');

  // initialize Packery after all images have loaded
  $container.imagesLoaded( function() {

    // Initialize packery.js
    $container.packery({
      // options...
      itemSelector: '.packery-item',
      gutter: '.gutter-sizer'
    });

    // Initialize Magnific Popup
     $('.students .photo a').magnificPopup({type:'image'});

  });

});
