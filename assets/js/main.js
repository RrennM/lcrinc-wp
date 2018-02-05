$(document).ready(function() {

  // Cache the window object
  var $window = $(window);

  // Parallax
  $('section[data-type="background"]').each(function() {
      
      var $bgobj = $(this); //assigning the object

      $window.scroll(function() {

        // Determine the amount of scroll from the top
        // Divide this by the data-speed
        // yPos is the final value position of the backhround and it negative 
        // because it's opposing the user's scroll
        var yPos = -($window.scrollTop() / $bgobj.data('speed'));

        // Coords for final background position
        var coords = '50% ' + yPos + 'px';

        // Move the background
        $bgobj.css({backgroundPosition: coords });

      }) // End window scroll
    }) // end each
  // End Parallax



  // Fancy Nav
  $(function(){
    $('#header-wrap').data('size','big');
    });

  $(window).scroll(function(){
    if($(document).scrollTop() > 50) {

      if($('#header-wrap').data('size') == 'big') {

        $('#header-wrap').data('size','small');

        $('#header-wrap').fadeOut(800);

        $('.navbar-brand').fadeIn(800);

      }
    } else {

      if($('#header-wrap').data('size') == 'small') {

        $('#header-wrap').data('size','big');

        $('#header-wrap').fadeIn(800);

        $('.navbar-brand').fadeOut(800);
      }  
    }
  });
  // End Fancy Nav



  // Animate Elements
  var $animation_elements = $('.animation-element');
  var $window = $(window);

  function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);
   
    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);
   
      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
        $element.addClass('in-view');
      } else {
        $element.removeClass('in-view');
      }
    });
  }

  $window.on('scroll resize', check_if_in_view);
  $window.trigger('scroll');
  // END Animate Elements

  // class toggle
  $(window).on('resize', function() {
    if($(window).height() > 940) {
        $('#body').addClass('limit1200');
        $('#body').removeClass('limit400');
    }else{
        $('#body').addClass('limit400');
        $('#body').removeClass('limit1200');
    }
})
  // End class toggle

})