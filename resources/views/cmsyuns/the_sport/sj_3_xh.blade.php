<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>现货行情分析软件下载</title>
    <link rel="stylesheet" href="{{url('css/share.css')}}">
    <link rel="stylesheet" href="{{url('css/the_sport/sj_xh.css')}}">
    <link rel="stylesheet" href="{{url('css/sj_form.css')}}">
    <script src="{{url('js/jquery.js')}}"></script>
</head>
<body>

<div class="top">
    <img src="http://img.zengwf.com/images/the_sport/xh00.png" alt="" width="100%">
    <ul class="clearfix">
        <li>
            <a href="javascript:void (0)" class="downBtn">电脑版下载</a>
        </li>
        <li>
            <a href="javascript:void (0)" class="downBtn">手机版下载</a>
        </li>
    </ul>
    <img src="http://img.zengwf.com/images/the_sport/xh02.png" alt="" width="100%" style="margin-top: -.26rem;">
</div>

<div class="content">
    <ul class="fourimgs clearfix">
        <li>
            <img src="http://img.zengwf.com/images/the_sport/xh03-1.png" alt="">
        </li>
        <li>
            <img src="http://img.zengwf.com/images/the_sport/xh03-2.png" alt="">
        </li>
        <li>
            <img src="http://img.zengwf.com/images/the_sport/xh03-3.png" alt="">
        </li>
        <li>
            <img src="http://img.zengwf.com/images/the_sport/xh03-4.png" alt="">
        </li>
    </ul>
    <div class="text-content clearfix">
        <div class="floatl text-div">
            <h1>因为专业</h1>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;几十名业内资深人士,国内外专家,数百名技术团队成员通过数学模型以及多年投资经验共同研发而成的投资领域的深度分析决策软件</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;投资现贷首选我们,深度挖掘交易群体需求,为投资者提供更专业的交易服务;更专业,更及时,更贴合交易</p>
        </div>
        <img src="http://img.zengwf.com/images/the_sport/xh04.png" alt="" class="floatr" height="235" >
    </div>
    <ul class="fourTextImgs clearfix">
        <li>
            <img src="http://img.zengwf.com/images/the_sport/xh05-1.png" alt="">
        </li>
        <li>
            <img src="http://img.zengwf.com/images/the_sport/xh05-2.png" alt="">
        </li>
        <li>
            <img src="http://img.zengwf.com/images/the_sport/xh05-3.png" alt="">
        </li>
        <li>
            <img src="http://img.zengwf.com/images/the_sport/xh05-4.png" alt="">
        </li>
    </ul>
    <div class="footer-text">
        <h3>互联网金融数据的领先品牌</h3>
        <h2>历时3年 整合国内外交易所一手交易数据</h2>
        <h3>千亿/秒运算给用户最准确的参考 捉住买卖点</h3>
    </div>
</div>
<div class="copyright" >
    <h2 style="margin-bottom: 0;">投资有风险,入市需谨慎</h2>
    <p style="font-size: 17px;">&copy; 版权所有：浦江合趣网络科技有限公司</p>
</div>
{{--写跳转过来的页面--}}
<input type="hidden" name="referr" value="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :'' ?>">
<!--遮罩层-->
<div class="layui-layer-shade" id="layui-layer-shade3" time="3" style="display:none;"></div>
<!--表单-->
<div class="layui-layer layui-layer-page layer-form layer-anim" id="layui-layer3" type="page" showtime="0"time="3" contype="object" style="display: none;left:13rem;top:25rem;">
    <div id="" class="layui-layer-content">
        <div class="modal-form layui-layer-wrap" id="modal-form" style="display: block;">
            <p style="font-size: 40px;color:#41A5DD ;text-align: center;padding-top: 40px;">免费下载</p>
            <p style="font-weight:normal; color:#999; font-family:宋体; font-size:14px;text-align: center;padding-top:10px;">（请正确填写手机号码，以便获取软件账号和密码！）</p>
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
{{--360cnzz统计数据引入--}}
<script src="https://s13.cnzz.com/z_stat.php?id=1267431564&web_id=1267431564" language="JavaScript"></script>
</body>
<script>
    (function (doc, win) {
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
    var Btns = $('.downBtn');
    //获取遮罩层和表单元素
    var mask = $('#layui-layer-shade3');
    var Form = $('#layui-layer3');
    $(Btns).click(function()
    {
        $(mask).css('display','block');
        $(Form).css('display','block');
    });
</script>
<script src="{{url('js/Tform.js')}}"></script>
</html>
