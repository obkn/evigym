/**
 * eviGym front-page interactions
 * - ハンバーガーメニュー開閉
 * - bxSlider / Swiper 初期化
 * - スクロール時の固定ボタン
 * - matchHeight・lazyload対応
 */

jQuery(function ($) {

  /* ================================
   * ハンバーガーメニュー開閉
   * ================================ */
  const $body = $('body');
  const $hamburger = $('.js-hamburger');
  const $blackBg = $('#js-black-bg');

  function toggleNav() {
    $body.toggleClass('nav-open');
  }
  $hamburger.on('click', toggleNav);
  $blackBg.on('click', () => $body.removeClass('nav-open'));

  /* ================================
   * contactボタンの固定
   * ================================ */
  const $contactBtn = $('.contact-btn');
  if ($contactBtn.length) {
    const btnTop = $contactBtn.offset().top;
    $(window).on('scroll', function () {
      const scrollTop = $(this).scrollTop();
      if (scrollTop >= btnTop) {
        $contactBtn.addClass('fixed');
      } else {
        $contactBtn.removeClass('fixed');
      }
    });
  }

  /* ================================
   * matchHeight 揃え
   * ================================ */
  if ($.fn.matchHeight) {
    $('.js-matchHeight').matchHeight();
  }

  /* ================================
   * bxSlider 初期化
   * ================================ */
  if ($.fn.bxSlider) {
    // トレーナー一覧など
    $('.trainers-top .bxslider, .traigners-top .bxslider').bxSlider({
      minSlides: 2,
      maxSlides: 4,
      slideWidth: 220,
      slideMargin: 10,
      touchEnabled: false,
      pager: false,
      controls: true
    });

    // ブログスライダー
    $('.storeBlogs-top .bxslider').bxSlider({
      auto: true,
      pause: 5000,
      touchEnabled: false,
      pager: false,
      controls: true
    });

    // 店舗スライダー
    $('.storeSlide').bxSlider({
      auto: true,
      pause: 5000,
      touchEnabled: true,
      pager: true
    });
  }

  /* ================================
   * Swiper 初期化
   * ================================ */
  if (typeof Swiper !== 'undefined') {
    // 通い方例（point4セクション）
    new Swiper('.swiper-training-example', {
      loop: true,
      autoplay: { delay: 4000 },
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
      }
    });

    // お客様インタビュースライダー
    new Swiper('.swiper-interview', {
      loop: true,
      autoplay: { delay: 4000 },
      slidesPerView: 1.2,
      spaceBetween: 16,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      breakpoints: {
        768: { slidesPerView: 2.5 },
        1024: { slidesPerView: 3.5 }
      }
    });
  }

  /* ================================
   * スムーススクロール
   * ================================ */
  $('a[href^="#"]').on('click', function (e) {
    const href = $(this).attr('href');
    const $target = $(href === '#' || href === '' ? 'html' : href);
    if ($target.length) {
      const position = $target.offset().top;
      $('html, body').animate({ scrollTop: position }, 500, 'swing');
      e.preventDefault();
    }
  });

  /* ================================
   * ストア（店舗一覧）の開閉ボタン
   * ================================ */
  $('.slideBtn').on('click', function () {
    const $btn = $(this);
    const $content = $btn.next('.slideWrap');
    $content.stop().slideToggle(300);
    $btn.toggleClass('ac');
  });

  /* ================================
   * ページトップボタンの表示
   * ================================ */
  const $gotop = $('#gotop');
  if ($gotop.length) {
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 200) {
        $gotop.fadeIn(200);
      } else {
        $gotop.fadeOut(200);
      }
    });
  }

  /* ================================
   * LazySizes（遅延読み込み）
   * ================================ */
  // すでに <script src="...lazysizes.min.js"> があるので特に初期化不要
});
