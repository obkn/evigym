/* ==========================================================================
 * evigym: interview-inline.js
 * ========================================================================== */
(function ($) {
  $(function () {

    $("img").on("error", function () {
      var src = "/assets/static/img/no-img.webp";
      if ($(this).attr("src") === src)
        return;
      else if ((" " + $(this).attr("src")).indexOf("files/") > 0) {
        $(this).attr(
          "src",
          $(this).attr("src").substring($(this).attr("src").indexOf("files/") + 5)
        );
      } else {
        $(this).attr("src", src);
      }
    });

  });
})(jQuery);