(function() {
	var nowpage = 0; 
	var slowpage = 0; 
	var lock = true; 
	var theOldPage = -1;

	go();

	$(document).mousewheel(function(event, delta) {
		if (lock) {
			slowpage -= delta; 
			if (slowpage > 2) {
				slowpage = 2;
			} else if (slowpage < 0) {
                slowpage = 0;
            }
		
			theOldPage = nowpage;
			nowpage = parseInt(slowpage / 1);
			go();
		}
	});

	//小圆点的监听
	$(".xiaoyuandian ul li").click(function() {
		theOldPage = nowpage;
		nowpage = $(this).index();
		slowpage = nowpage;
		$(this).addClass("cur").siblings().removeClass("cur");
		go();
	});

	function go() {
		
		if (theOldPage != nowpage) {
			lock = false;
			//让屏幕滚动，动画显示
			$(".container").stop().animate({
				"top": -100 * nowpage + "%"
			}, 1000, function() {
				lock = true;
			});

	
			$(".page").eq(nowpage).find(".section_inner").addClass("active").removeClass("reduction");  // 动画进场
	
			$(".page").eq(theOldPage).find(".active").addClass("reduction").removeClass("active");//动画出场

			if (theOldPage == 1 && nowpage < 1) {
				//1→如果更小的屏幕
				$(".page1_02").addClass("out2");
			} else if (theOldPage == 1 && nowpage > 1) {
				//1→如果更大的屏幕
				$(".page1_02").addClass("out1");
			}

			if (nowpage >= 0) {
				$(".xiaoyuandian ul li").eq(nowpage).addClass("cur").siblings().removeClass("cur");
			}
		}
		if (theOldPage == 3 && nowpage != 3 ) {
			$('.nav_box').css({
				'position': 'fixed',
				'top' : $('.page').height() * nowpage + 'px'
			})
		} else if (	theOldPage != 3	&& nowpage != 3 ) {
			$('.nav_box').css({
				'position': 'fixed',
				'left': '0px',
				'top': '0px',
				'z-index': '999'
			});

		}else if ( nowpage == 3 && theOldPage == 3 ){
			return ;
		} else {
			$('.nav_box').css({
				'position': 'absolute',
				'top' : $('.page').height() * theOldPage + 'px',
				'left' : '0px',
				'z-index' : 999
			})
		}

	}
})();


$(function(){
	$('.download_box li').mouseover(function(){
		$(this).addClass('on').siblings().removeClass('on')
	});
	$(".down_tab li").mouseover(function(e) {
		$(this).addClass("current").siblings().removeClass("current")
		$(".down_ewm div").eq($(this).index()).addClass("current").siblings().removeClass("current");
	});
	$('.down_col').click(function (e) { 
		$('.down_tc').fadeOut();
	});
	$('.sjAPP').click(function (e) { 
		e.preventDefault();
	$('.down_tc').fadeIn();
});



})






