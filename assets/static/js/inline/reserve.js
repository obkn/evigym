/* ==========================================================================
 * evigym: plan-inline.js
 * ========================================================================== */
(function ($) {
  $(function () {
    $('dd').hide();
    $('dt').click(function(){
        $(this).toggleClass("ac");
        $(this).next("dd").slideToggle();
    });
  });
})(jQuery);