/* ==========================================================================
 * evigym: store-inline.js (統合版)
 *  - Planスライダー初期化（Swiper）
 *  - Hacomonoウィジェットiframeの高さ自動調整（postMessage対応）
 *    ＋ 初期表示フォールバック（widgets/3 → 2254px、それ以外 → 1000px）
 *  - 画像エラーフォールバック（/assets/static/img/no-img.webp）
 *  - FAQ開閉（<dt> -> 次の <dd> をトグル）
 *  - 店舗ブログスライダー（bxSlider）
 * ========================================================================== */
(function ($) {
  $(function () {
    // ------------------------------
    // Plan スライダー（Swiper）
    // ------------------------------
    if (typeof Swiper !== 'undefined' && $(".planSlider").length) {
      var pointSlider = new Swiper(".planSlider", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".next",
          prevEl: ".prev",
        },
        breakpoints: {
          768: {
            centeredSlides: true,
            slidesPerView: 1.5,
            spaceBetween: 15,
          },
          425: {
            centeredSlides: true,
            slidesPerView: 1.25,
            spaceBetween: 20,
          },
        },
      });
    }

    // ------------------------------
    // Hacomono iframe 高さ自動化
    // ------------------------------
    var $iframes = $('iframe[src*="enjoy.evigym.com/widgets/"]');

    $iframes.each(function () {
      var el = this;

      // 見た目（Blade基準）をまず適用
      el.style.width = '100%';
      el.style.border = 'none';
      el.style.display = 'block';
      el.style.margin = '0 auto';
      el.style.maxWidth = '1024px';
      el.style.overflow = 'hidden';
      el.setAttribute('scrolling', 'no');
      el.setAttribute('allowfullscreen', '');

      // widgets/{num} → idに反映（無ければ付与）
      var m = el.src.match(/\/widgets\/(\d+)/);
      if (m) {
        var wid = 'w' + String(parseInt(m[1], 10)).padStart(4, '0');
        if (!el.id) el.id = 'hacomono-widget-' + wid;
        // 初期高さ（フォールバック）
        if (!el.style.height) {
          el.style.height = (wid === 'w0003' ? '2254px' : '1000px');
        }
      } else {
        // widgets番号が取れない場合の保険
        if (!el.style.height) el.style.height = '1000px';
      }
    });

    // postMessage 受信で高さ更新（重複登録防止）
    if (!window.__evigymHacomonoHeightBound) {
      window.__evigymHacomonoHeightBound = true;

      window.addEventListener(
        'message',
        function (evt) {
          // 送信元のドメインを限定
          if (!/^https?:\/\/enjoy\.evigym\.com$/.test(evt.origin)) return;

          var data = evt.data;
          var targetId = null;
          var height = null;

          if (typeof data === 'object' && data) {
            // パターンA: { id: "hacomono-widget-w0003", height: 2254 }
            if (typeof data.id === 'string' && typeof data.height === 'number') {
              targetId = data.id;
              height = data.height;
            }
            // パターンB: { widgetId: "hacomono-widget-w0003", widgetHeight: 2254 }
            else if (typeof data.widgetId === 'string' && typeof data.widgetHeight === 'number') {
              targetId = data.widgetId;
              height = data.widgetHeight;
            }
            // パターンC: { widget: "w0003", height: 2254 }
            else if (typeof data.widget === 'string' && typeof data.height === 'number') {
              targetId = 'hacomono-widget-' + data.widget;
              height = data.height;
            }
          } else if (typeof data === 'string') {
            // パターンD: "hacomono-widget-w0003:2254"
            var mm = data.match(/hacomono-widget-(w\d{4}):(\d+)/);
            if (mm) {
              targetId = 'hacomono-widget-' + mm[1];
              height = parseInt(mm[2], 10);
            }
          }

          if (targetId && height && height > 0) {
            var frame = document.getElementById(targetId);
            if (frame) {
              frame.style.height = height + 'px';
            }
          }
        },
        false
      );
    }

    // ------------------------------
    // 画像のフォールバック（no-img）
    // ------------------------------
    $("img").on("error", function () {
      // ✅ 修正：正しいテーマ配下の no-img.webp を参照
      var src = "/assets/static/img/no-img.webp";
      if ($(this).attr("src") === src) return;
      else if ((" " + $(this).attr("src")).indexOf("files/") > 0) {
        $(this).attr(
          "src",
          $(this).attr("src").substring($(this).attr("src").indexOf("files/") + 5)
        );
      } else {
        $(this).attr("src", src);
      }
    });

    // ------------------------------
    // FAQの開閉（dt → 直後の dd）
    // ------------------------------
    $('dd').hide();
    $('dt').on('click', function () {
      $(this).toggleClass("ac");
      $(this).next("dd").slideToggle();
    });

    // ------------------------------
    // 店舗ブログ スライダー（bxSlider）
    // ------------------------------
    setTimeout(function () {
      if ($.fn.bxSlider && $('.storesBolg_slider').length) {
        $('.storesBolg_slider').bxSlider({
          auto: true,
          pause: 5000,
          touchEnabled: false
        });
      }
    }, 2000);
  });
})(jQuery);