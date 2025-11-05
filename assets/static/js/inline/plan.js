/* ==========================================================================
 * evigym: plan-inline.js
 * ========================================================================== */
(function ($) {
  $(function () {

    // ---- Swiper（plan slider）----
    if (typeof Swiper !== 'undefined') {
      if ($('.planSlider').length) {
        // 二重初期化を防止
        if (!$('.planSlider').data('swiper-initialized')) {
          new Swiper('.planSlider', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            autoplay: { delay: 5000, disableOnInteraction: false },
            navigation: { nextEl: '.next', prevEl: '.prev' },
            breakpoints: {
              768: { centeredSlides: true, slidesPerView: 1.5, spaceBetween: 15 },
              425: { centeredSlides: true, slidesPerView: 1.25, spaceBetween: 20 }
            }
          });
          $('.planSlider').data('swiper-initialized', true);
        }
      }
    } else {
      console.warn('Swiper is not loaded.');
    }

  });
})(jQuery);