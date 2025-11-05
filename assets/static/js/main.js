(function ($) {
// VERTICALLY ALIGN FUNCTION
$.fn.vAlign = function() {
    return this.each(function(i){
    var ah = $(this).height();
    var ph = $(this).parent().height();
    var mh = Math.ceil((ph-ah) / 2);
    $(this).css('padding-top', mh);
    });
};
})(jQuery);
$(document).ready(function(){
	var win_h = $(window).height();
	function setHeight(){
		$('.home > .hero').css({height:win_h});
		$(".vcenter").vAlign();
	}

	setHeight();
	/*$(".slogan h1").slabText({
	        "viewportBreakpoint":300
	});*/

	$(window).bind('resize',function() {
		setHeight();
	 });

	 $('#top-nav').onePageNav({

        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollOffset: 50,
        scrollThreshold: 0.5,
        filter: ':not(.external)',
        begin: function() {
            //I get fired when the animation is starting
        },
        end: function() {
            //I get fired when the animation is ending
        },
        scrollChange: function() {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });

     $('#nav-button').click(function(){
        $top_nav = $('#top-nav');
        if($top_nav.is(':hidden')){
            $top_nav.slideDown("slow");
        }else{
            $top_nav.slideUp();
        }
     })

});


$(function(){
			$('#nav_toggle').click(function(){
						$("header").toggleClass('open');
				$("nav").fadeToggle(500);
					});

		});



$(function() {
  var topBtn = $('.backtotop');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
      topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 1000);
		return false;
	});
	var scroll = new SmoothScroll(
			'.backtotop a',
			{
				speed:1600,
				easing:'easeInOutQuad',
				updateURL: false,
				offset:20
			}
		);
});

$(function(){
    var cnt = $('#top-tabFilter').data('target');
    var cntId = '#'+cnt;
    $('#top-tabFilter a').on('click', function(){
        var t = $(this).data('target');
        $('#top-tabFilter .current').removeClass('current');
        $(this).parent().addClass('current');
        $('.tabCntItem', cntId).hide();
        $('.tabCntItem.'+t, cntId).fadeIn();
        return false;
    });
});

$(function(){
    var cnt = $('#tabFilter').data('target');
    var cntId = '#'+cnt;
    $('#tabFilter a').on('click', function(){
        var t = $(this).data('target');
        $('#tabFilter .current').removeClass('current');
        $(this).parent().addClass('current');
        $('.tabCntItem', cntId).hide();
        if(t == "all") {
            $('.tabCntItem', cntId).fadeIn();
        } else {
            $('.tabCntItem.'+t, cntId).fadeIn();
        }
        return false;
    });
});

//���j���[�̎q���j���[�΍�
    $(function () {
  // �e���j���[����
  $('.global-nav__list span').click(function() {
    // ���j���[�\��/��\��
    $(this).next('ul').slideToggle('fast');
  });

  // �q���j���[����
  $('.global-nav__list ul li').click(function(e) {
    // ���j���[�\��/��\��
    $(this).children('ul').slideToggle('fast');
    e.stopPropagation();
  });
});


function showElementAnimation() {

  var element = document.getElementsByClassName('js-animation');
  if(!element) return; // �v�f���Ȃ������珈�����L�����Z��

  var showTiming = window.innerHeight > 768 ? 200 : 10; // �v�f���o�Ă���^�C�~���O�͂����Œ���
  var scrollY = window.pageYOffset;
  var windowH = window.innerHeight;

  for(var i=0;i<element.length;i++) { var elemClientRect = element[i].getBoundingClientRect(); var elemY = scrollY + elemClientRect.top; if(scrollY + windowH - showTiming > elemY) {
      element[i].classList.add('is-show');
    } else if(scrollY + windowH < elemY) {
      // ��ɃX�N���[�����čēx��\���ɂ���ꍇ�͂�������L�q
      element[i].classList.remove('is-show');
    }
  }
}
window.addEventListener('load', showElementAnimation);
window.addEventListener('scroll', showElementAnimation);


