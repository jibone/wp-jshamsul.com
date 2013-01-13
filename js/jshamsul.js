/*
 * The Javascript
 */
(function() {
  $('#menu-btn').on('click', function() {
    $('.menu-container').slideToggle();
    console.log("sdf");
    return false;
  });
  function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $("#sticky-anchor").offset().top;
    var div_bottom = $("#sticky-bottom").offset().top;

    if(window_top > div_top && window_top < div_bottom) {
      $('#sticky').addClass('stick');
    } else {
      $('#sticky').removeClass('stick');
    }
  }
  $(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
  });
})(window);
