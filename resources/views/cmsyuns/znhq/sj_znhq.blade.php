<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>智能行情交易系统</title>
		<link rel="stylesheet" href="{{url('/css/znhq/style.css')}}">
		<link rel="stylesheet" href="{{url('/css/sj_form.css')}}">
		<script src="{{url('/js/znhq/jquery-1.11.3.min.js')}}"></script>
		<script src="{{url('/js/znhq/register.js')}}"></script>
		<script src="{{url('/js/layer/layer.js')}}"></script>
		<script>
			(function(doc, win) {
				var docEl = doc.documentElement,
					isIOS = navigator.userAgent.match(/iphone|ipod|ipad/gi),
					dpr = isIOS ? Math.min(win.devicePixelRatio, 3) : 1,
					dpr = window.top === window.self ? dpr : 1, //被iframe引用时，禁止缩放
					dpr = 1, // 首页引用IFRAME，强制为1
					scale = 1 / dpr,
					resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize';
				docEl.dataset.dpr = win.devicePixelRatio;
				if(navigator.userAgent.match(/iphone/gi) && screen.width == 375 && win.devicePixelRatio == 2) {
					docEl.classList.add('iphone6')
				}
				if(navigator.userAgent.match(/iphone/gi) && screen.width == 414 && win.devicePixelRatio == 3) {
					docEl.classList.add('iphone6p')
				}
				var metaEl = doc.createElement('meta');
				metaEl.name = 'viewport';
				metaEl.content = 'initial-scale=' + scale + ',maximum-scale=' + scale + ', minimum-scale=' + scale;
				docEl.firstElementChild.appendChild(metaEl);
				var recalc = function() {
					var width = docEl.clientWidth;
					if(width / dpr > 750) {
						width = 750 * dpr;
					}
					docEl.style.fontSize = 100 * (width / 750) + 'px';
				};
				recalc()
				if(!doc.addEventListener) return;
				// win.addEventListener(resizeEvt, recalc, false);
			})(document, window);
		</script>

		
		<script>
			var _hmt = _hmt || [];
			(function() {
				var hm = document.createElement("script");
				hm.src = "{{url('/js/znhq/hm.js')}}";
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(hm, s);
			})();
		</script>
	</head>

	<body>
		<div class="wraptext">
			<div class="wrap">
				<p class="header">顶级平台 | 投资首选</p>
				<img src="http://img.zengwf.com/images/znhq/jiaoyiImg-1.jpg" />
				<div class="bannerDown">
					<p>
						<a href="javascript:void(0)">
							<span  class="zsbtn-link p-link">免费下载</span>
						</a>手机端正版软件
					</p>
				</div>
				<img src="http://img.zengwf.com/images/znhq/jiaoyiImg-3.jpg" />
				<img src="http://img.zengwf.com/images/znhq/jiaoyiImg-4.jpg" />
				<div class="youshibg">
					<h2 class="h3-title">
					<span>软件优势</span>
				</h2>
					<div class="indexEightList">

						<dl>
							<dt>内嵌在线<br />跟单系统</dt>
							<dd>内嵌在线跟单系统，可查看同期操盘手展示账户，并参考其近期交易数据，让您决策更加精准</dd>
						</dl>
						<dl>
							<dt>多终端版<br />本更方便</dt>
							<dd>智能行情交易系统提供多终端版本，能满足不同环境、不同时期的投资者需求；真正随时随地交易，随时随地查看收益</dd>
						</dl>
						<dl>
							<dt>门槛低 <br />品种多</dt>
							<dd>合约保证金交易，门槛低，1000元起 即可参与投资；同时可交易品种多， 基本包含市场热门品种</dd>
						</dl>
						<dl>
							<dt>自主<br />出入金</dt>
							<dd>实名认证用户，实行自主出入金，轻 松存取，轻松</dd>
						</dl>
						<dl>
							<dt>专业严格风<br />控团队把控</dt>
							<dd>大数据分析，更加精准，专业团队， 引领行业标杆，细致分工，让每个环 节都更加专业</dd>
						</dl>

						<dl>
							<dt>界面清爽<br />操作便捷</dt>
							<dd>智能行情交易系统界面简洁清爽，操作简单快捷，更流畅，经多次测试，保证提供最好的操作体验</dd>
						</dl>
					</div>
				</div>
				<img src="http://img.zengwf.com/images/znhq/jiaoyiImg-6.jpg" />
				<img src="http://img.zengwf.com/images/znhq/jiaoyiImg-7.jpg" />
				<div class="footer-text">
					投资有风险，入市需谨慎
				</div>
				<div class="footer-text2">
					版权所有：浦江合趣网络科技有限公司
				</div>
			</div>
			<div class="down-fixed p-link">

				<a href="javascript:void(0)">立即下载</a>
			</div>
		</div>
{{--写跳转过来的页面--}}
<input type="hidden" name="referr" value="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :'' ?>">
	<!--弹层-->
		<div class="winboxbg" id="layui-layer-shade3" style='display:none;'>
			<div class="winbox" id="layui-layer3">
				<p class="p-close"></p>
				<input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
				<ul class="ul-listinput reg_div">
					<li><input type="text" class="user_name" id='txtName1' placeholder="输入您的姓名"></li>
					<li class="pb01"><input type="text" class="user_phone" id='txtPhone1' placeholder="输入您的手机号码">

					</li>
					<li class="colorText">*非常重要，正确有效的手机号码才能成功开户</li>
					<li class="pb03">
						<div class="p-code">
							<p class="pInput"> <input class="sms_code" id='txtSmsCode1' type="text" placeholder="输入验证码"></p>
							<p class="code-btn"> <button class="sms_btn show_count" type="button" id='btnYzm1'>获取验证码</button></p>
						</div>

					</li>
					<li> 
						<input type='hidden' class='customer_description_item' value='赠金页面,第一个注册框'>
						<button class="submit_btn" type="button" id="btn-submit" >免费下载</button>
						<!-- <span class="form-group_button" id="btn-submit" type="button" onclick="">立即下载</span> -->
					</li>
				</ul>
			</div>
		</div>
	</body>

	<script>
		$(function() {
			$('.p-link').click(function() {
				$(".winboxbg").show();
				// $("#layui-layer-shade3").css('display','block');
			});
			$('.winboxbg .winbox .p-close').click(function() {
				$(".winboxbg").hide();
			});
			$('.submit_btn').click(function(){
				// $(".winboxbg").hide();
				$(".winboxbg").css('display','none');
			});

		});
	</script>
	<script src="{{url('js/form.js')}}"></script>

</html>
