<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>金大师</title>
    <link rel="stylesheet" href="{{url('css/share.css')}}">
    <link rel="stylesheet" href="{{url('css/jds/sj_jds.css')}}">
    <link rel="stylesheet" href="{{url('css/sj_form.css')}}">
    <script src="{{url('js/jquery.js')}}"></script>
</head>
<body>
<div class="warp">
    <div class="logo">
        <img src="http://img.zengwf.com/images/jds/d_solgin.png" alt="">
    </div>
    <div class="slogo">
        <p>V3.0.4.601</p>
        <a href="javascript:void(0)" class="pc"></a>
        <a href="javascript:void(0)" class="font">
            beta版(<span>Ver3.0.5.602</span>)下载
        </a>
        <a href="javascript:void(0)" class="view"></a>
    </div>
</div>
<div class="main">
    <div class="normal">
        <div class="normal_left">
            <img src="http://img.zengwf.com/images/jds/load02.png" alt="" class="normal">
        </div>
        <div class="normal_right">
            <h1>专业直播带您翱翔</h1>
            <p>边看专业直播，边做交易</p>
            <p>随时随地可向老师提问</p>
            <p>几千投资者互相提问</p>
            <img src="http://img.zengwf.com/images/jds/load01.png" alt="" class="normal2">
        </div>
    </div>
    <div class="normal bottom">
        <div class="normal_left">
            <img src="http://img.zengwf.com/images/jds/load03.png" alt="">
        </div>
        <div class="normal_right1">
            <h1>高速行情报价</h1>
            <p>上海黄金交易所即时报价</p>
            <p>伦敦金报价</p>
            <p>三大期货交易所行情</p>
        </div>
    </div>
    <div class="other">
        <div class="normal_left">
            <img src="http://img.zengwf.com/images/jds/load04.png" alt="">
        </div>
        <div class="normal_right">
            <h1>便捷的下单操作</h1>
            <p>开多，开空，平仓</p>
            <p>三键下单模式，一目了然</p>
        </div>
    </div>
</div>
<div class="footer">
    <p class="f-p">风险揭示：本产品属于高风险、高收益投资品种；投资者应具有较高的风险识别能力、资金实力与风险承受能力。投资者应合理配置资产，不应用全部资金做投资，不应借贷、拿养老金来做投资。</p>
    <div class="f-some">
        <p>
            <img class="footer-img" src="http://img.zengwf.com/images/jds/d_solgin.png" alt="" ><br>
        </p>
        <a href="javascript:void(0)" class="pc"></a>
        <p class="footer_p3">让&nbsp;你&nbsp;玩&nbsp;赚&nbsp;黄&nbsp;金</p>
        <p class="footer_p">投资有风险,入市需谨慎</p>
        <p class="footer_p1">&copy; 义乌聚鼎网络科技有限公司</p>
    </div>


</div>
{{--写跳转过来的页面--}}
<input type="hidden" name="referr" value="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :'' ?>">
<!--遮罩层-->
<div class="layui-layer-shade" id="layui-layer-shade3" time="3" style="display:none;"></div>
<!--表单-->
<div class="layui-layer layui-layer-page layer-form layer-anim" id="layui-layer3" type="page" showtime="0"time="3" contype="object" style="display: none;left:12rem;top:24rem;">
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
        <img src="http://img.zengwf.com/images/wxh/HX201805.jpg" alt="" width="200">
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
    });
</script>
<script>
    //获取所有的点击li标签，出现表单
    var Btns = $('.pc,.font,.view');
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