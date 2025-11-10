/* ==========================================================================
 * evigym: toggle-inline.js
 * ========================================================================== */
(function ($) {
  $(function(){
      $('dd').hide();
      $('dd.beginner').slideToggle();
      $('dt').click(function(){
          $(this).toggleClass("ac");
          $(this).next("dd").slideToggle();
      });
  });
})(jQuery);