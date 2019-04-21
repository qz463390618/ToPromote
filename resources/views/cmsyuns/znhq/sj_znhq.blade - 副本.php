<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>智能行情交易系统</title>
		<link rel="stylesheet" href="{{url('/css/znhq/style.css')}}">
		<link rel="stylesheet" href="{{url('/css/sj_form.css')}}">
		<!-- <style>
			.form-group{
				margin-bottom: 10px;
				width:86%;
			}
			.form-label{
				width:20%; 
				line-height: 30px;
			}
			.form-group_button{
				width:48%;
			}
			.form-footer-text{
				padding-left: 30px;
				text-align: center;
				width:81%;
			}
		</style> -->
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
							<span  class="zsbtn-link p-link btn">免费下载</span>
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
			<div class="down-fixed p-link btn">

				<a href="javascript:void(0)">立即下载</a>
			</div>
		</div>
{{--写跳转过来的页面--}}
<input type="hidden" name="referr" value="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :'' ?>">
<!--遮罩层-->
<div class="layui-layer-shade" id="layui-layer-shade3" time="3" style="display:none;"></div>
<!--表单-->
<div class="layui-layer layui-layer-page layer-form layer-anim" id="layui-layer3" type="page" showtime="0"time="3" contype="object" style="display: none; top: 1rem; left: -0.2rem;">
    <div id="" class="layui-layer-content">
        <div class="modal-form layui-layer-wrap" id="modal-form" style="display: block;">
            <p style="font-size: 25px;color:#41A5DD ;text-align: center;padding-top: 25px;">免费下载</p>
            <p style="font-weight:normal; color:#999; font-family:宋体; font-size:10px;text-align: center;padding-top:5px;">（请正确填写手机号码，以便获取软件账号和密码！）</p>
            <form id="form-1" class="validate nice-validator n-default" action="index1.html#" method="post" novalidate="novalidate">

                <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                <div class="form-content">
                    <div class="form-group">
                        <label for="txtName1" class="form-label" style='width:20%; line-height: 30px;'>姓&nbsp;&nbsp;&nbsp;&nbsp;名</label>
                        <div class="form-input">
                            <input type="text" style='width:60%;' name="txtName1" id="txtName1" aria-required="true">
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="form-group" style='margin-bottom: 10px;'>
                        <label for="txtPhone1" class="form-label">手机号</label>
                        <div class="form-input">
                            <input type="text" style='width:60%;' name="txtPhone1" id="txtPhone1" placeholder="" aria-required="true">
                        </div>
                        <div class="clear"></div>
                    </div>



                    <div class="form-group">
                        <label for="txtSmsCode1" class="form-label" style='width:20%;'>验证码</label>
                        <div class="form-input">
                            <input type="text" name="txtSmsCode1" id="txtSmsCode1" style='width:30%;' class="input-vcode" maxlength="6">

                            <button id="btnYzm1" class="dz_yzm" style='width:90px;' value="免费获取验证码" onclick="javascript:return false;">
                                <span id="SendTxt1">免费获取验证码 </span>
                            </button>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-group" style="height: 70px">
                        <span class="form-group_button " id="btn-submit" type="button" onclick="">立即下载</span>

                    </div>
                    <div class="form-footer-text">
                        <p>我们采用加密技术确保您的信息安全，您的联系信息仅用于发送技术指标，请放心提交</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <span class="layui-layer-setwin"><a class="layui-layer-ico layui-layer-close layui-layer-close2" href="javascript:void (0);"></a></span>
    <span class="layui-layer-resize"></span>
</div>
<!--微信二维码-->
<div class="weixin" style="display: none">
    <div class="wxewm">
        <img src="http://img.zengwf.com/images/wxh/01.jpg" alt="" width="200">
    </div>
    <p class="tishi">如安装过程中遇到问题，请扫描二维码添加您的专属客服或添加微信号<span style="color:red">HX201805</span ></p>
    <p style="margin-top: 1rem;font-size: 2rem;text-align: center;" class="weix_colse">
        <a href="javascript:void(0)" class="wx_colse">关闭</a>
    </p>
</div>

<div id="downapp" style="display: none;padding:10px;">
    <p style="font-size: 40px;color:#41A5DD ;text-align: center;padding-top: 40px;">免费下载</p>
    <p style="font-weight:normal; color:#999; font-family:宋体; font-size:14px;text-align: center;padding-top:10px;padding-bottom:10px;">（请正确填写手机号码，<br>以便获取软件账号和密码！）</p>
    <form id="form-1" class="validate nice-validator n-default" action="index1.html#" method="post" novalidate="novalidate">

        <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
        <div class="form-content">
            <div class="form-group">
                <label for="txtName1" class="form-label">姓&nbsp;&nbsp;&nbsp;&nbsp;名</label>
                <div class="form-input">
                    <input type="text" name="txtName1" id="txtName1" aria-required="true">
                </div>
                <div class="clear"></div>
            </div>
            <div class="form-group">
                <label for="txtPhone1" class="form-label">手机号</label>
                <div class="form-input">
                    <input type="text" name="txtPhone1" id="txtPhone1" placeholder="" aria-required="true">
                </div>
                <div class="clear"></div>
            </div>



            <div class="form-group">
                <label for="txtSmsCode1" class="form-label">验证码</label>
                <div class="form-input">
                    <input type="text" name="txtSmsCode1" id="txtSmsCode1" class="input-vcode" maxlength="6">

                    <button id="btnYzm1" class="dz_yzm" value="免费获取验证码"  style="width:40%;" onclick="javascript:return false;">
                        <span id="SendTxt1">免费获取验证码 </span>
                    </button>
                </div>
                <div class="clear"></div>
            </div>

            <div class="form-group" style="height: 70px">
                <span class="form-group_button " id="btn-submit" type="button" onclick="" style="width:60%;">立即下载</span>

            </div>
            <div class="form-footer-text">
                <p>我们采用加密技术确保您的信息安全，您的联系信息仅用于发送技术指标，请放心提交</p>
            </div>
        </div>
    </form>
</div>

<div></div>
<script>
</script>
<script>
    //获取下载按钮
    var Btns = $('.btn');
    //获取遮罩层和表单元素
    var mask = $('#layui-layer-shade3');
    var Form = $('#layui-layer3');
    $(Btns).click(function()
    {
        // $(mask).css('display','block');
        // $(Form).css('display','block');
        
			layer.open({
		    type:1,
		    title:'免费下载',
		    content : $('#downapp')
	    	});
    });

    // layer.open({
    // 	type:1,
    // 	title:'免费下载',
    // 	content : $('#downapp')
    // });



</script>
<script src="{{url('js/form.js')}}"></script>
</body>
</html>
