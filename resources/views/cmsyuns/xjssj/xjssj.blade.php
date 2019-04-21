<!DOCTYPE html>
<html style="overflow: hidden; height: 100%;">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{url('/images/xjssj/jin10ico.png')}}" rel="apple-touch-icon-precomposed">
    <link href="{{url('/images/xjssj/favicon.ico')}}" type="image/x-icon" rel="icon">
    <link rel="shortcut icon" href="{{url('/images/xjssj/favicon.ico')}}" type="image/x-icon">
    <title>金十数据手机版下载_金十数据下载 - 金十数据官网下载</title>
    <meta name="keywords" content="">
    <meta name="description" content="金十数据下载专栏提供金十数据手机版下载、金十数据软件下载等，金十客户端汇聚了行业顶尖媒体的资讯和24小时实时 快讯、财经事件提醒、视频学习等功能。">
    <link rel="stylesheet" type="text/css" href="{{url('/css/xjssj/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/xjssj/full.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/xjssj/button.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/form.css')}}">
    <link href="{{url('/css/xjssj/common.css')}}" rel="stylesheet">
    <script src="{{url('/js/xjssj/jquery-1.8.3.min.js')}}"></script>
    <script src="{{url('/js/xjssj/jquery-ui-1.10.3.min.js')}}"></script>
    <script src="{{url('/js/xjssj/jquery.fullPage.min.js')}}"></script>
    <script src="{{url('/js/xjssj/xjssj.js')}}"></script>
    <script src="{{url('js/form.js')}}"></script>
    <style>
		.news_header{ position: fixed; z-index: 999999; padding: 0 16px 0 0; box-sizing: border-box; width: 100%;}
		.mininav{ position: fixed; left: 0; top: 50px; width: 100%; z-index: 100000000000;} 
	</style>
</head>
<body style="overflow: hidden; height: 100%; font-size: 100%;">
		<div id="superContainer" style="top: 0px;">
			<!--第一屏-->
			<div class="section   active" data-anchor="page1" style="height: 863px;">
				<div class="bg1-1  fadeInDown animated"></div>
				<div class="bg1-2  fadeInUp animated"></div>
				<div class="bg1-3  fadeInUp  animated">
					<!-- <a target="_self" href="#" class="androd"></a> -->
                    <a href="#" class="but but-1">电脑版下载</a>
                    <a href="#" class="but but-2">手机app下载</a>          
				</div>
			</div>
			<!-- 第二屏 -->
			<div class="section" data-anchor="page2" style="height: 863px;">
				<div class="bg2-1"></div>
			</div>
			<!-- 第三屏 -->
			<div style="background-color: rgb(234, 246, 255); height: 863px;" class="section" data-anchor="page3">
				<div class="bg3-1"></div>
				<div class="bg3-2"></div>
				<div class="bg3-3"></div>
			</div>
			<!-- 第四屏 -->
			<div class="section " data-anchor="page4" style="height: 863px;">
				<div class="bg4-1"></div>
				<div class="bg4-2"></div>
				<div class="bg4-3"></div>
			</div>
			<!-- 第五屏 -->
			<div style="background-color: rgb(44, 61, 91); height: 863px;" class="section section5" data-anchor="page5">
				<div class="bg5-2"></div>
				<div class="bg5-3">
					<!--     随鼠标移动     -->
					<div class="content">
						<div class="layerout moveu">
							<div class="layer1"></div>
						</div>
					</div>
				</div>
				<div class="bg5-4"></div>
				<div class="bg5-1"></div>
			</div>
			<!-- 第六屏 -->
			<div class="section" data-anchor="page6" style="height: 863px;">
				<div class="bg6-1"></div>
				<div class="bg6-2"></div>
				<div class="bg6-3"></div>
				<div class="bg6-4">
					<a href="#" class="but but2-1">电脑版下载</a>
           			<a href="#" class="but but2-2">手机app下载</a>				
				</div>
                <div class="bg6-5">
                    <p>投资有风险,入市需谨慎</p>
                    <span>© 版权所有：浦江合趣网络科技有限公司</span>
                </div>
		    </div>
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
    <p><img src="http://img.zengwf.com/images/wxh/HX201805.jpg" alt="" width="200"></p>
    <p>如安装过程中遇到问题，请扫描二维码添加您的专属客服</p>
    <p><a href="javascript:void(0)" class="wx_colse">关闭</a></p>
</div>
</body>
<script>
    //获取所有的点击li标签，出现表单
    var Btns = $('.but');
    //获取遮罩层和表单元素
    var mask = $('#layui-layer-shade3');
    var Form = $('#layui-layer3');
    $(Btns).click(function()
    {
        $(mask).css('display','block');
        $(Form).css('display','block');
    });
</script>
</html>