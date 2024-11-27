$(function() {
	/* lnb */
const deps = $('.gnb > li')
const deps1 = $('.gnb > li > a');
const deps2 = $('.depth_D')

deps1.each(function(dep1Index, dep1) {
	$(dep1).on('mouseover', function() {
		$(deps2[dep1Index]).slideDown(150);
	});
});

deps.each(function(depIndex, dep) {
	$(dep).on('mouseleave', function() {
		$(deps2[depIndex]).slideUp(150);
	});
});
 /* lnb */

/* gnb_all */
$('.menu_btn').on('click', function() {
	$('.gnb_all_wrap').fadeIn();
	$('body').css({overflow: "hidden"});
})

$('.gnb_menu').on('click', function() {
	$('.gnb_all_wrap').fadeOut();
	$('body').css({overflow: "visible"});
})
/* gnb_all */

 /* m_gnb */
const m_deps = $('.m_gnb_box .m_gnb > li');
const m_lnbs = $('.m_depth_D');

m_deps.each(function(m_depIndex, m_dep) {
	$(m_dep).on('click', function() {
		m_lnbs.each(function(m_lnbsIndex, m_lnb) {
		if(m_lnbsIndex == m_depIndex) {
			$(m_lnbs[m_depIndex]).slideToggle();
		} else {
			$(m_lnbs[m_lnbsIndex]).slideUp();
		}
	});
	});
});
/* m_gnb */
});

/* 헤더 스크롤 이벤트 */
$(window).scroll(function() {
  var num = $(window).scrollTop();

  if ($(this).scrollTop() > 35) {
	  $('#header').addClass('on');

  } else if($(this).scrollTop() < 35){
	  $('#header').removeClass('on');
  }
});
/* 헤더 스크롤 이벤트 */

$(function() {
  /* 메인비주얼 */
  $('.main_visual').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  autoplay: true,
  cssEase: 'linear',
  prevArrow: $('.mv-prev'),
  nextArrow: $('.mv-next'),
});
/* 메인비주얼 */

/* section01 */
$('.section01_main_slider').slick({
  dots: true,
  infinite: false,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1280,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: false,
        dots: true
      }
    },
    {
      breakpoint: 801,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 501,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
/* section01 */

/* section03 */
var swiper = new Swiper(".section03_main_slider", {
      slidesPerView: 6,
      spaceBetween: 15,
      loop: true,
      speed: 300,
      autoplay: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        1321: {
          slidesPerView: 6,
        },
        1281: {
          slidesPerView: 5,
        },
        1081: {
          slidesPerView: 4,
        },
        801: {
          slidesPerView: 3.2,
        },
        641: {
          slidesPerView: 2.2,
        },
        300: {
          slidesPerView: 1,
        },
        
      }
    });
/* section03*/
  });

var sub_Swiper = undefined;
function initSwiper() {
	var Swindex = $('.swiper-slide.on').index();
	var subWidth = $(window).width();
	//실사이즈.. 관리자창 1220으로 보면 active안됨 
  if(subWidth < 1320 && sub_Swiper == undefined) {
	  sub_Swiper = new Swiper('.sub_gnb_swiper', {
			slidesPerView: 'auto',
			spaceBetween: 0,
			autoplay:false,
			loop:false,
			initialSlide: Swindex,
	  });
  } else if (subWidth > 1319&& sub_Swiper != undefined) {
      sub_Swiper.destroy();
      sub_Swiper = undefined;
      jQuery('.swiper-wrapper').removeAttr('style');
      jQuery('.swiper-slide').removeAttr('style');
  }
}

