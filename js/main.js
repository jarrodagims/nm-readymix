// @codekit-prepend "plugins.js";

(function($) {
  $(document).ready(function() {
      $('.home-expander').click(function () {
          if ($(window).width() < 767) {
              $($(this).data("target")).slideToggle();
              $(this).toggleClass('expanded');
          }
      });

      $('.expander').click(function () {
          $($(this).data("target")).slideToggle();
          $(this).toggleClass('expanded');
      });


  });
})(jQuery);
