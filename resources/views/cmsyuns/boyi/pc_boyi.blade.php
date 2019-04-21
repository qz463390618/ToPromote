<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博易大师期货</title>
    <link rel="stylesheet" href="{{url('css/boyi/boyi.css')}}">
    <link rel="stylesheet" href="{{url('css/form.css')}}">
    <script src="{{url('js/boyi/jquery.js')}}"></script>
</head>
<body>
<div class="head">
    <div class="head_content clearfix">
        <img src="http://img.zengwf.com/images/boyi/diann.png" alt="" class="fl" style="margin-left:18%">
        <img src="http://img.zengwf.com/images/boyi/boyititle.png" alt="" class="fr" style="margin-right:23%">
        <div style="clear: both"></div>
        <ol class="clearfix" id="downBtn">
            <li>
                <a href="javascript:void(0)"><img src="http://img.zengwf.com/images/boyi/icon_03.gif" alt="" ></a>
            </li>
            <li>
                <a href="javascript:void(0)"><img src="http://img.zengwf.com/images/boyi/icon_05.gif" alt="" ></a>
            </li>
        </ol>
    </div>
</div>
<div class="content">
    <div class="top_img w1010">
    <img src="http://img.zengwf.com/images/boyi/top_img.png" alt="">
</div>
<div class="main_content">
    <h1>因为专业——2017投资贵金属首选我们！</h1>
    <div class="main">
        <div class="abou_txt">
            <strong>
                <span>实时行情更新播报</span>抢占市场先机
            </strong>
            <p>精准行情 有情有“益”</p>
        </div>
        <div class="abou_img">
            <img src="http://img.zengwf.com/images/boyi/pc_18.jpg" alt="" width="344" height="201">
        </div>
    </div>
    <div class="main">
        <div class="abou_img">
            <img src="http://img.zengwf.com/images/boyi/pc_19.jpg" alt="" width="344" height="201">
        </div>
        <div class="abou_txt2">
            <strong>
                <span>国际分析团队指点制胜</span>                手把手教你盈利
            </strong>
            <p>实战中学经验 零风险投资</p>
        </div>

    </div>
    <div class="main">
        <div class="abou_txt3">
            <strong>
                <span>覆盖贵金属外汇</span>                所有走势行情
            </strong>
            <p>贵金属、黄金、白银、外汇、天通银全面覆盖</p>
        </div>
        <div class="abou_img">
            <img src="http://img.zengwf.com/images/boyi/pc_20.jpg" alt="" width="344" height="201">
        </div>
    </div>
    <div class="main">
        <div class="abou_img">
            <img src="http://img.zengwf.com/images/boyi/pc_21.jpg" alt="" width="344" height="201">
        </div>
        <div class="abou_txt4">
            <strong>
                <span>何时该买?</span>                何时该卖?
            </strong>
            <p class="xg">全程智能化决策，简单易用，
                <span class="dkd">多空带</span>买卖点提示，行情动荡，精准掌握多空买卖拐点，祝你低价买入，高价卖出。
            </p>
        </div>

    </div>
</div>

</div>
<div class="footer">
    <h2>投资有风险,入市需谨慎</h2>
    <p>&copy;  版权所有：浦江合趣网络科技有限公司</p>
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
<!--二维码扫描-->
<div class="weixin" style="display: none">
    <p><img src="http://img.zengwf.com/images/wxh/rong-0789.png" alt="" width="200"></p>
    <p>如安装过程中遇到问题，请扫描二维码添加您的专属客服</p>
    <p><a href="javascript:void(0)" class="wx_colse">关闭</a></p>
</div>
</body>
<script>
    //获取下载按钮
    var Btns = $('#downBtn li');
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
