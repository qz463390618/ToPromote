<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>期货行情</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/nfutures/index.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/nfutures/share.css')}}">
	<link rel="stylesheet" href="{{url('css/form.css')}}">
	<script src="{{url('js/nfutures/jquery.min.js')}}"></script>
</head>
<body>
	<div class="warp">
		<div class="w-img">
			<img src="http://img.zengwf.com/images/futures01.png" alt="">
		</div>
		
		<ul>
			<li class="pc">
				<img src="http://img.zengwf.com/images/futuresbk_2.jpg" alt="">
			</li>
			<li class="w-btn btn1">
				<a href="javascript:void(0)"><img src="http://img.zengwf.com/images/futuresicon_03.gif" alt=""></a>
			</li>
			<li class="btn2">
				<a href="javascript:void(0)"><img src="http://img.zengwf.com/images/futuresicon_05.gif" alt=""></a>
			</li>
		</ul>
	</div>
	<div class="center">
	
		<div class="cantarin cantarin1"><img src="http://img.zengwf.com/images/futuresindex_03.jpg" alt=""></div>
		<div class="cantarin cantarin2"><img src="http://img.zengwf.com/images/futuresindex_05.jpg" alt=""></div>
		<div class="cantarin cantarin3"><img src="http://img.zengwf.com/images/futuresindex_06.jpg" alt=""></div>
		<div class="cantarin cantarin4"><img src="http://img.zengwf.com/images/futuresindex_07.jpg" alt=""></div>
		<div class="cantarin cantarin5"><img src="http://img.zengwf.com/images/futuresindex_08.jpg" alt=""></div>
		<div class="cantarin cantarin6"><img src="http://img.zengwf.com/images/futuresindex_09.jpg" alt=""></div>
		<div class="cantarin cantarin7"><img src="http://img.zengwf.com/images/futuresindex_10.jpg" alt=""></div>
		<div class="cantarin cantarin8"><img src="http://img.zengwf.com/images/futuresindex_11.jpg" alt=""></div>
		<div class="cantarin cantarin9"><img src="http://img.zengwf.com/images/futuresindex_12.jpg" alt=""></div>
		<div class="cantarin cantarin10"><img src="http://img.zengwf.com/images/futuresindex_13.jpg" alt=""></div>
		<div class="cantarin cantarin11"><img src="http://img.zengwf.com/images/futuresindex_14.jpg" alt=""></div>
		<div class="cantarin cantarin12"><img src="http://img.zengwf.com/images/futuresindex_15.jpg" alt=""></div>
		<div class="cantarin cantarin13"><img src="http://img.zengwf.com/images/futuresindex_16.jpg" alt=""></div>
		<div class="cantarin cantarin14"><img src="http://img.zengwf.com/images/futuresindex_17.jpg" alt=""></div>
		<div class="cantarin cantarin15"><img src="http://img.zengwf.com/images/futuresindex_18.jpg" alt=""></div>
		<div class="cantarin cantarin16"><img src="http://img.zengwf.com/images/futuresindex_19.jpg" alt=""></div>
		<div class="cantarin cantarin17"><img src="http://img.zengwf.com/images/futuresindex_20.jpg" alt=""></div>
		<h3>立即免费下载--体验投资盈利</h3>
		<h4>"验证手机号以便发送软件账号及密码"</h4>
		<div class="table">
			<ul>
				<li>
					<label for="name">姓名：</label><input type="text" name="xuname" id="name" maxlength="15" class="frame">
				</li>
				<li>
					<label for="phone">手机号码：</label><input type="text" maxlength="11" id="phone" class="frame">
				</li>
				<li>
					<label for="phone">验证码：</label>
					<input  name="code" maxlength="15"  class="frame">
					
				</li>
				<li>
					<button type="button" name="vcode" class="code1">
						获取验证码
					</button>
					<input type="button" class="sub" value="免费下载">
				</li>
			</ul>
		</div>
	</div>
	<div class="footer">
    	<h2>投资有风险,入市需谨慎</h2>
    	<p>&copy; 版权所有：义乌聚鼎网络科技有限公司</p>
	</div>
	{{--写跳转过来的页面--}}
	<input type="hidden" name="referr" value="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :'' ?>">
	<!--遮罩层-->
	<div class="layui-layer-shade" id="layui-layer-shade3" time="3" style="display:none;"></div>
	<!--表单-->
	<div class="layui-layer layui-layer-page layer-form layer-anim" id="layui-layer3" type="page" showtime="0"time="3" contype="object" style="display: none;">
	    <div id="" class="layui-layer-content">
	        <div class="modal-form layui-layer-wrap" id="modal-form" style="display: block;">
	            <p style="font-size: 40px;color:#41A5DD ;text-align: center;padding-top: 40px;">免费下载</p>
	            <p style="font-weight:normal; color:#999; font-family:宋体; font-size:14px;text-align: center;padding-top:10px;">（请正确填写手机号码，以便获取软件账号和密码！）</p>
	            <form id="form-1" class="validate nice-validator n-default" action="index1.html#" method="post" novalidate="novalidate">

	                <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
	                <div class="form-content">
	                    <div class="form-group">
	                        <label for="txtName1" class="form-label">姓&nbsp;&nbsp;名</label>
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

	                            <button id="btnYzm1" class="dz_yzm" value="免费获取验证码" onclick="javascript:return false;">
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
	<!--二维码扫描-->
	<div class="weixin" style="display: none">
	    <p><img src="http://img.zengwf.com/images/wxh/rong-0789.png" alt="" width="200"></p>
	    <p>如安装过程中遇到问题，请扫描二维码添加您的专属客服</p>
	    <p><a href="javascript:void(0)" class="wx_colse">关闭</a></p>
	</div>
	</body>
	<script>
	    //获取下载按钮
	    var Btns = $('.btn1,.btn2');

	    //获取遮罩层和表单元素
	    var mask = $('#layui-layer-shade3');
	    var Form = $('#layui-layer3');
	    $(Btns).click(function()
	    {
	        $(mask).css('display','block');
	        $(Form).css('display','block');
	    });
	</script>
	<script src="{{url('js/form.js')}}"></script>
</html>