

$(window).scroll(function() {
  var num = $(window).scrollTop();

  if ($(this).scrollTop() > 35) {
	  $('#header').addClass('on');

  } else if($(this).scrollTop() < 35){
	  $('#header').removeClass('on');
  }

});


function m_gnb_open(){
	$(".m_menu").on("click",function(){
		if($(this).hasClass("is-active2")){
			$(this).removeClass('is-active2');
			$('#header').removeClass('is-active2');
			$('.m_gnb_area').animate({height:'toggle'},400);
			$('.m_gnb').removeClass('on');
		}else {
			$(this).addClass('is-active2');
			$('#header').addClass('is-active2');
			$('.m_gnb_area').animate({height:'toggle'},400);
			$('.m_gnb').addClass('on');
		}
	});

	$(".m_gnb > li > a").on("click", function(){
		if($(this).next(".m_depth").css("display") == "none"){
			$(".m_gnb > li > a").removeClass("on");
			$(".m_gnb > li > a").next(".m_depth").stop(true, true).slideUp();
			$(this).addClass("on");
			$(this).next(".m_depth").slideDown();
		}else{
			$(this).removeClass("on");
			$(this).next(".m_depth").stop(true, true).slideUp();
		}
	});

};


function all_open(){
	$(".all_menu").on("click",function(){
		if($(this).hasClass("is-active")){
			$(this).removeClass('is-active');
			$('#header').removeClass('is-active');
			$('body').removeClass('is-active'); 
			$(".all_gnb_wrap").removeClass('is-active');
			$('.gnb_box').removeClass('is-active');
		}else {
			$(this).addClass('is-active');
			$('#header').removeClass('on');
			$('#header').addClass('is-active');
			$('body').addClass('is-active'); 
			$(".all_gnb_wrap").addClass('is-active');
			$('.gnb_box').addClass('is-active');
		}
	});

	$(function(){
		var WINDOWWIDTH = window.innerWidth;
		if ( window.innerWidth < 1221 ) {
			open = false;
			$('.all_menu').removeClass('is-active');
			$('#header').removeClass('is-active');
			$('body').removeClass('is-active'); 
			$(".all_gnb_wrap").removeClass('is-active');
			$('.gnb_box').removeClass('is-active');
		}

		$( window ).resize(function() {
			if ( window.innerWidth != WINDOWWIDTH ) {
				if ( window.innerWidth < 1221 ) {
					open = false;
					$('.all_menu').removeClass('is-active');
					$('#header').removeClass('is-active');
					$('body').removeClass('is-active'); 
					$(".all_gnb_wrap").removeClass('is-active');
					$('.gnb_box').removeClass('is-active');
				} 
			}
		});
	});
							
}



function main_visual(){
	var slideWrapper = $(".mv_slider"),
		iframes = slideWrapper.find('.embed-player'),
		lazyImages = slideWrapper.find('.slide-image'),
		lazyCounter = 0;

	// POST commands to YouTube or Vimeo API
	function postMessageToPlayer(player, command){
	  if (player == null || command == null) return;
	  player.contentWindow.postMessage(JSON.stringify(command), "*");
	}

	// When the slide is changing
	function playPauseVideo(slick, control){
	  var currentSlide, slideType, startTime, player, video;

	  currentSlide = slick.find(".slick-current");
	  slideType = currentSlide.attr("class").split(" ")[1];
	  player = currentSlide.find("iframe").get(0);
	  startTime = currentSlide.data("video-start");

	  if (slideType === "vimeo") {
		switch (control) {
		  case "play":
			if ((startTime != null && startTime > 0 ) && !currentSlide.hasClass('started')) {
			  currentSlide.addClass('started');
			  postMessageToPlayer(player, {
				"method": "setCurrentTime",
				"value" : startTime
			  });
			}
			postMessageToPlayer(player, {
			  "method": "play",
			  "value" : 1
			});
			break;
		  case "pause":
			postMessageToPlayer(player, {
			  "method": "pause",
			  "value": 1
			});
			break;
		}
	  } else if (slideType === "youtube-sound") {
		switch (control) {
		  case "play":
			postMessageToPlayer(player, {
			  "event": "command",
			  // "func": "mute"
			});
			postMessageToPlayer(player, {
			  "event": "command",
			  "func": "playVideo"
			});
			break;
		  case "pause":
			postMessageToPlayer(player, {
			  "event": "command",
			  "func": "pauseVideo"
			});
			break;
		}
	  }  else if (slideType === "youtube") {
		switch (control) {
		  case "play":
			postMessageToPlayer(player, {
			  "event": "command",
			  "func": "mute"
			});
			postMessageToPlayer(player, {
			  "event": "command",
			  "func": "playVideo"
			});
			break;
		  case "pause":
			postMessageToPlayer(player, {
			  "event": "command",
			  "func": "pauseVideo"
			});
			break;
		}
	  } else if (slideType === "video") {
		video = currentSlide.children("video").get(0);
		if (video != null) {
		  if (control === "play"){
			video.play();
		  } else {
			video.pause();
		  }
		}
	  }
	}

	// Resize player
	function resizePlayer(iframes, ratio) {
	  if (!iframes[0]) return;
	  var win = $(".mv_slider"),
		  width = win.width(),
		  playerWidth,
		  height = win.height(),
		  playerHeight,
		  ratio = ratio || 16/9;

	  iframes.each(function(){
		var current = $(this);
		if (width / ratio < height) {
		  playerWidth = Math.ceil(height * ratio);
		  current.width(playerWidth).height(height).css({
			left: (width - playerWidth) / 2,
			 top: 0
			});
		} else {
		  playerHeight = Math.ceil(width / ratio);
		  current.width(width).height(playerHeight).css({
			left: 0,
			top: (height - playerHeight) / 2
		  });
		}
	  });
	}

	// DOM Ready
	$(function() {
	  // Initialize
	  slideWrapper.on("init", function(slick){
		slick = $(slick.currentTarget);
		setTimeout(function(){
		  playPauseVideo(slick,"play");
		}, 1000);
		resizePlayer(iframes, 16/9);
	  });
	  slideWrapper.on("beforeChange", function(event, slick) {
		slick = $(slick.$slider);
		playPauseVideo(slick,"pause");
	  });
	  slideWrapper.on("afterChange", function(event, slick) {
		slick = $(slick.$slider);
		playPauseVideo(slick,"play");
	  });
	  slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
		lazyCounter++;
		if (lazyCounter === lazyImages.length){
		  lazyImages.addClass('show');
		  // slideWrapper.slick("slickPlay");
		}
	  });

	  //start the slider
	  slideWrapper.slick({
		autoplay:true,
		autoplaySpeed:4500,
		pauseOnHover:false,
		arrows: true,
		dots: true,
		prevArrow: $('.mv_prev'), 
		nextArrow: $('.mv_next'),
		appendDots: '.slider_dots_warp',
		infinite: true,
		speed:1000,
		fade: true
	  });
	});

	// Resize event
	$(window).on("resize.slickVideoPlayer", function(){  
	  resizePlayer(iframes, 16/9);
	});


}






var sub_Swiper = undefined;
function initSwiper() {
	var Swindex = $('.swiper-slide.on').index();
	var subWidth = $(window).width();
	//실사이즈.. 관리자창 1220으로 보면 active안됨 
  if(subWidth < 1220 && sub_Swiper == undefined) {
	  sub_Swiper = new Swiper('.sbm', {
			slidesPerView: 'auto',
			spaceBetween: 0,
			autoplay:false,
			loop:false,
			initialSlide: Swindex,
	  });
  } else if (subWidth > 1219&& sub_Swiper != undefined) {
      sub_Swiper.destroy();
      sub_Swiper = undefined;
      jQuery('.swiper-wrapper').removeAttr('style');
      jQuery('.swiper-slide').removeAttr('style');
  }
}

$(document).ready(function(){

});

