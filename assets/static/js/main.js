/* main.js (cleaned) */
(function ($) {
  'use strict';

  /* ------------------------------
   * util: vertical align (legacy)
   * ------------------------------ */
  $.fn.vAlign = function () {
    return this.each(function () {
      var $el = $(this);
      var ah = $el.outerHeight();
      var ph = $el.parent().outerHeight();
      var pad = Math.max(0, Math.ceil((ph - ah) / 2));
      $el.css('padding-top', pad);
    });
  };

  /* ------------------------------
   * onReady
   * ------------------------------ */
  $(function () {

    /* ---- hero height & vcenter ---- */
    var $win = $(window);
    function setHeight() {
      var winH = $win.height();
      $('.home > .hero').css({ height: winH });
      $('.vcenter').vAlign();
    }
    setHeight();
    $win.on('resize', debounce(setHeight, 150));

    /* ---- onePageNav ---- */
    if ($.fn.onePageNav && $('#top-nav').length) {
      $('#top-nav').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollOffset: 50,
        scrollThreshold: 0.5,
        filter: ':not(.external)'
      });
    }

    /* ---- SPナビ開閉 ---- */
    $('#nav-button').on('click', function () {
      var $nav = $('#top-nav');
      if (!$nav.length) return;
      ($nav.is(':hidden')) ? $nav.slideDown('slow') : $nav.slideUp();
    });

    $('#nav_toggle').on('click', function () {
      $('header').toggleClass('open');
      $('nav').fadeToggle(500);
    });

    /* ---- back to top ---- */
    (function initBackToTop() {
      var $btn = $('.backtotop');
      if (!$btn.length) return;
      $btn.hide();
      $win.on('scroll', function () {
        ($(this).scrollTop() > 400) ? $btn.fadeIn() : $btn.fadeOut();
      });
      $btn.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, 1000);
      });
      // SmoothScrollプラグインがあれば適用
      if (typeof SmoothScroll === 'function') {
        /* eslint-disable no-new */
        new SmoothScroll('.backtotop a', {
          speed: 1600,
          easing: 'easeInOutQuad',
          updateURL: false,
          offset: 20
        });
      }
    })();

    /* ---- タブフィルター（共通化） ---- */
    initTabFilter('#tabFilter');
    initTabFilter('#top-tabFilter');

    /* ---- グローバルナビのアコーディオン ---- */
    (function initGlobalNavAccordion() {
      var $root = $('.global-nav__list');
      if (!$root.length) return;

      // 親クリックで子UL開閉
      $root.find('> li > span').on('click', function () {
        $(this).next('ul').stop(true, true).slideToggle('fast');
      });

      // 子LIクリックで孫UL開閉（バブリング抑止）
      $root.find('ul li').on('click', function (e) {
        var $child = $(this).children('ul');
        if ($child.length) {
          e.stopPropagation();
          $child.stop(true, true).slideToggle('fast');
        }
      });
    })();

    /* ---- スクロールアニメ（.js-animation） ---- */
    (function initRevealOnScroll() {
      var $els = $('.js-animation');
      if (!$els.length) return;

      function onScroll() {
        var showTiming = (window.innerHeight > 768) ? 200 : 10;
        var scrollY = window.pageYOffset;
        var winH = window.innerHeight;

        $els.each(function () {
          var rect = this.getBoundingClientRect();
          var elemY = scrollY + rect.top;
          if (scrollY + winH - showTiming > elemY) {
            this.classList.add('is-show');
          } else if (scrollY + winH < elemY) {
            this.classList.remove('is-show');
          }
        });
      }

      // 初期 & スクロール
      $(window).on('load scroll', onScroll);
      onScroll();
    })();

  }); // end onReady

  /* ------------------------------
   * helpers
   * ------------------------------ */

  // 汎用タブフィルター
  function initTabFilter(containerSelector) {
    var $container = $(containerSelector);
    if (!$container.length) return;

    var targetId = $container.data('target');
    if (!targetId) return;

    var $list = $('#' + targetId);
    if (!$list.length) return;

    // 初期状態（.currentのdata-targetに合わせて描画）
    var $current = $container.find('.tabFilterItem.current a').first();
    applyFilter($list, $current.data('target') || 'all');

    // クリック時
    $container.on('click', 'a', function (e) {
      e.preventDefault();
      var $a = $(this);
      var t = $a.data('target');

      // .current切り替え
      $container.find('.tabFilterItem').removeClass('current');
      $a.parent().addClass('current');

      // フィルター適用
      applyFilter($list, t);
    });
  }

  function applyFilter($list, target) {
    var $items = $list.find('.tabCntItem');
    if (!$items.length) return;

    if (target === 'all') {
      $items.stop(true, true).fadeIn(150);
      return;
    }

    $items.hide();
    $list.find('.tabCntItem.' + target).stop(true, true).fadeIn(150);
  }

  // 軽量debounce
  function debounce(fn, wait) {
    var t;
    return function () {
      clearTimeout(t);
      var args = arguments, ctx = this;
      t = setTimeout(function () { fn.apply(ctx, args); }, wait);
    };
  }

})(jQuery);