<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>和讯财经</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/share.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/hxcj/pc_hxcj.css')}}">
    <link rel="stylesheet" href="{{url('css/form.css')}}">
    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('js/hxcj/jquery.min.js')}}"></script>
    <script src="{{url('js/hxcj/jquery-1.8.3.min.js')}}"></script>
    <script src="{{url('js/hxcj/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('js/hxcj/jquery.scrollify.min.js')}}"></script>

    <script>
        /*$(function() {
            $('.panel').css({'height': $(window).height()});
            $.scrollify({
                section: '.panel',
                scrollbars: false
            });
        });*/
    </script>
</head>
<body>
<div class="main">
    <div class="panel img1" data-section-name="page1">
        <img src="http://img.zengwf.com/images/hxcj/box1.png" alt="">
        <div class="m-btn">
            <a href="javascript:void(0)" class="pc">电脑端下载</a>
            <a href="javascript:void(0)" class="app">手机端下载</a>
        </div>

    </div>
    <div class="panel img2" data-section-name="page2">
        <img src="http://img.zengwf.com/images/hxcj/box2.png" alt="">
        <div class="m-btn">
            <a href="javascript:void(0)" class="pc2">电脑端下载</a>
            <a href="javascript:void(0)" class="app2">手机端下载</a>
        </div>
    </div>

</div>
<div class="copyright">
    <h2 style="margin-bottom: 0;">投资有风险,入市需谨慎</h2>
    <p>&copy; 版权所有：韩城集升商贸有限公司</p>
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
    <!-- <p><img src="http://img.zengwf.com/images/wxh/HX201805.jpg" alt="" width="200"></p> -->
    <p>如安装过程中遇到问题，请扫描二维码添加您的专属客服</p>
    <p><a href="javascript:void(0)" class="wx_colse">关闭</a></p>
</div>
</body>
<script>
    //获取所有的点击li标签，出现表单
    var Btns = $('.m-btn a');
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