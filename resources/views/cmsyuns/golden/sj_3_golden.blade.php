<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>金十数据软件</title>
    <link rel="stylesheet" href="{{url('css/share.css')}}">
    <link rel="stylesheet" href="{{url('css/golden/sj_golden.css')}}">
    <link rel="stylesheet" href="{{url('css/sj_form.css')}}">
    <script src="{{url('js/jquery.js')}}"></script>
</head>
<body>
    <div class="head">
        <img src="http://img.zengwf.com/images/golden/title.png" alt="" class="title">
        <img src="http://img.zengwf.com/images/golden/air.png" alt="" class="air">
        <ul class="downs clearfix">
            <li><a href="javascript:void (0)"><img src="http://img.zengwf.com/images/golden/pc_down.png" alt=""></a></li>
            <li><a href="javascript:void (0)"><img src="http://img.zengwf.com/images/golden/sj_down.png" alt=""></a></li>
        </ul>
    </div>
    <div class="column_wrap">
        <img src="http://img.zengwf.com/images/golden/5big.png" alt="" class="big5"><br>
        <img src="http://img.zengwf.com/images/golden/5yuan.png" alt="" class="yuan5">
    </div>
    <div class="copyright" >
        <h2 style="margin-bottom: 0;">投资有风险,入市需谨慎</h2>
        <p>&copy; 版权所有：金创互动科技（深圳）有限公司   ICP备案号：粤ICP备16102940号-1</p>
    </div>
    {{--写跳转过来的页面--}}
    <input type="hidden" name="referr" value="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :'' ?>">
    <!--遮罩层-->
    <div class="layui-layer-shade" id="layui-layer-shade3" time="3" style="display:none;"></div>
    <!--表单-->
    <style>
        .form-label{
            font-size: 1.5rem;
        }
        .form-input input{
            width: 25.5rem;
            height: 40px;}
        .dz_yzm{font-size:.9rem;}
        .form-group_button{
            font-size: 2rem;}
        .form-footer-text p{
            font-size: 1.5rem;}
    </style>
    <div class="layui-layer layui-layer-page layer-form layer-anim" id="layui-layer3" type="page" showtime="0"time="3" contype="object" style="display: none;left:19rem;top:29rem;width: 41rem;">
        <div id="" class="layui-layer-content">
            <div class="modal-form layui-layer-wrap" id="modal-form" style="display: block;">
                <p style="color:#41A5DD ;text-align: center;padding-top: 40px; font-size: 4rem;">免费下载</p>
                <p style="font-weight:normal; color:#999; font-family:宋体; font-size:1.5rem;text-align: center;padding-top:10px;">（请正确填写手机号码，以便获取软件账号和密码！）</p>
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

                                <button id="btnYzm1" class="dz_yzm" value="免费获取验证码" onclick="javascript:return false;">
                                    <span id="SendTxt1">免费获取验证码 </span>
                                </button>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="form-group" style="height: 86px">
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
</body>
<script>
    $(function (doc, win) {
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if (clientWidth >= 640) {
                    docEl.style.fontSize = '100px';
                } else {
                    docEl.style.fontSize = 100 * (clientWidth / 640) + 'px';
                }
            };

        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })
</script>
<script>
    //获取所有的点击li标签，出现表单
    var Btns = $('.downs li a');
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
