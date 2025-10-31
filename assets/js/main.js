/* global jQuery */
(function($){
  'use strict';

  // ハンバーガー開閉
  $(function(){
    var $body = $('body');
    var $hamburger = $('.js-hamburger');
    var $blackBg = $('#js-black-bg');

    function closeNav() {
      $body.removeClass('nav-open');
      $hamburger.attr('aria-expanded', 'false');
      $blackBg.attr('aria-hidden', 'true');
    }
    function openNav() {
      $body.addClass('nav-open');
      $hamburger.attr('aria-expanded', 'true');
      $blackBg.attr('aria-hidden', 'false');
    }

    $hamburger.on('click', function(){
      if ($body.hasClass('nav-open')) closeNav(); else openNav();
    });
    $blackBg.on('click keydown', function(e){
      if (e.type === 'click' || e.key === 'Escape') closeNav();
    });
  });

  // bxSlider 初期化（.slider があるページだけ）
  $(function(){
    if ($('.slider').length && typeof $.fn.bxSlider === 'function') {
      $('.slider').bxSlider({
        auto: true,
        pause: 5000,
        touchEnabled: false,
        pager: true,
        controls: true
      });
    }
  });

  // 高さ揃え（.js-matchHeigtht があれば）
  $(function(){
    if ($('.js-matchHeigtht').length && typeof $.fn.matchHeight === 'function') {
      $('.js-matchHeigtht').matchHeight();
    }
  });

})(jQuery);