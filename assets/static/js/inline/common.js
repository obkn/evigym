(function () {
  // ==========================
  // ハンバーガー開閉
  // ==========================
  document.addEventListener(
    "click",
    function (e) {
      const btn = e.target.closest(".js-hamburger");
      if (btn) {
        document.body.classList.toggle("nav-open");
        return;
      }
      const bg = e.target.closest("#js-black-bg");
      if (bg) {
        document.body.classList.remove("nav-open");
      }
    },
    { passive: true }
  );

  // ==========================
  // jQueryがある場合のみ実行
  // ==========================
  if (window.jQuery) {
    const $ = window.jQuery;

    // contactボタン固定
    const $btn = $(".contact-btn");
    if ($btn.length) {
      const btnTop = $btn.offset().top;
      $(window).on("scroll", function () {
        $btn.toggleClass("fixed", $(this).scrollTop() >= btnTop);
      });
    }

    // matchHeight
    if ($.fn.matchHeight) {
      $(".js-matchHeight").matchHeight();
    }

    // bxSlider（トップ・トレーナー）
    if ($(".slider").length && $.fn.bxSlider) {
      $(".slider").bxSlider({
        auto: true,
        pause: 5000,
        touchEnabled: false,
      });
    }
    if ($(".traigners-top").length && $.fn.bxSlider) {
      $(".traigners-top").bxSlider({
        minSlides: 2,
        maxSlides: 4,
        slideWidth: 220,
        slideMargin: 10,
        touchEnabled: false,
      });
    }

    // ドロップダウンメニュー
    let open = false;
    $(document).on("click", ".dropdown", function () {
      $(".dropdown-menu").toggle();
      setTimeout(function () {
        open = $(".dropdown-menu").is(":visible");
      }, 200);
    });
    $("body").on("click", function () {
      setTimeout(function () {
        if (open && $(".dropdown-menu").is(":visible")) {
          $(".dropdown-menu").toggle();
          open = $(".dropdown-menu").is(":visible");
        }
      }, 100);
    });
  }
})();