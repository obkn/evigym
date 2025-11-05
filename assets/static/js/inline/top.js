/* ==========================================================================
 * evigym: top-inline.js
 * ========================================================================== */
(function ($) {
  $(function () {

    // ---- GTM ----
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TM62CJJ');

    // ==== 以下は inline と重複する処理を削除 ====
    // - contact ボタン固定
    // - matchHeight
    // - bxSlider（.slider / .traigners-top）
    // - ドロップダウンメニュー
    // ============================================

    // ---- Swiper ----
    if (typeof Swiper !== 'undefined') {
      // point4Slide
      if ($('.point4Slide').length) {
        new Swiper('.point4Slide', {
          centeredSlides: true,
          loop: true,
          slidesPerView: 1.15,
          spaceBetween: 5,
          autoplay: { delay: 5000, disableOnInteraction: false },
          navigation: { nextEl: '.next', prevEl: '.prev' },
          breakpoints: {
            768: { slidesPerView: 1.5, spaceBetween: 20 },
            425: { spaceBetween: 10 }
          }
        });
      }
      // point4Slide2
      if ($('.point4Slide2').length) {
        new Swiper('.point4Slide2', {
          centeredSlides: false,
          loop: true,
          slidesPerView: 2,
          spaceBetween: 5,
          autoplay: { delay: 5000, disableOnInteraction: false },
          navigation: { nextEl: '.next', prevEl: '.prev' },
          breakpoints: {
            768: { slidesPerView: 2, spaceBetween: 20 },
            425: { spaceBetween: 10 }
          }
        });
      }
    } else {
      console.warn('Swiper is not loaded.');
    }

    // ---- タブ切り替え（インタビュー一覧）----
    $('#interviewList .tabCntItem').hide();
    $('#interviewList .tabCntItem.all').fadeIn();

    // ---- 画像エラー処理 ----
    $('img').on('error', function () {
      var fallback = '/img/no-img.webp';
      var now = $(this).attr('src') || '';
      if (now === fallback) return;
      if (now.indexOf('files/') > 0) {
        $(this).attr('src', now.substring(now.indexOf('files/') + 5));
      } else {
        $(this).attr('src', fallback);
      }
    });

    // ---- 店舗スライダー（bxSlider）----
    var ini_stores_slider = false;
    var stores_slider;

    function slideBtn() {
      if (!ini_stores_slider) {
        $('.swiper-slide').css('display', '');
        stores_slider = $('.stores_slider').bxSlider({
          auto: true,
          pause: 5000,
          touchEnabled: false
        });
        $('#Stores .bx-wrapper').slideDown();
        stores_slider.goToSlide(0);
        ini_stores_slider = true;
      } else {
        if ($('#Stores .bx-wrapper').is(':visible')) {
          $('#Stores .bx-wrapper').slideUp();
          stores_slider.destroySlider();
          $('.swiper-slide').css('display', 'none');
          ini_stores_slider = false;
        } else {
          $('#Stores .bx-wrapper').slideDown();
          stores_slider.goToSlide(0);
        }
      }
      $('.slideBtn').toggleClass('ac');
    }

    $('.slideBtn').on('click', slideBtn);

    function checkScreenSize() {
      var newWindowWidth = $(window).width();
      if (newWindowWidth > 767) {
        setTimeout(function () { slideBtn(); }, 500);
      }
    }
    checkScreenSize();

    // ---- 店舗ブログスライダー ----
    if ($('.storesBolg_slider').length && $.fn.bxSlider) {
      $('.storesBolg_slider').bxSlider({
        auto: true,
        pause: 5000,
        touchEnabled: false
      });
    }
  });
})(jQuery);