<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>快讯通财经客户端下载</title>
    <link rel="stylesheet" href="{{url('css/form.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugIn/kxt/download.css?v=1.1')}}">
</head>
<body>
<div class="xiaoyuandian">
    <ul>
        <li class="current cur">  </li>
        <li> </li>
        <li> </li>
        <li> </li>
    </ul>
</div>
<div class="container">
    <div class="nav_box navbar-fixed-top">
        <div class="nav">
            <h1 class="down_logo fl">
                <a href="javascript:void(0)" >
                    <img src="http://img.zengwf.com//images/kxt/logo.png" alt="">
                </a>
            </h1>
            <ul class="nav_ul fl">
                <a href="javascript:void(0)"  class="ios_btn"><img src="http://img.zengwf.com/images/kxt/iphonel.png" alt="" class="h-2l down"></a>
                <a href="javascript:void(0)"  class="wap_btn"><img src="http://img.zengwf.com/images/kxt/Androidl.png" alt="" class="h-3l down"></a>
                <a href="javascript:void(0)"  class="pc_btn" id="pcDown_link"><img src="http://img.zengwf.com/images/kxt/pcl.png" alt="" class="h-4l down"></a>
                <script>
                    macdownlink(document.getElementById('pcDown_link'));
                </script>
            </ul>
        </div>
    </div>
    <div class="page  page1">
        <div class="section_inner">
            <div class="download_box">
                <ul>
                    <li class="sjAPP">
                        <div class="fl img_03" ></div>
                        <div class="fr sj_down" id=" ">
                            手机APP下载
                        </div>
                    </li>
                    <li>
                        <div class="fl img_04"></div>
                        <div class="fr pc_down">
                            PC客户端下载
                        </div>
                    </li>
                </ul>
            </div>
            <div class="img_box">
                <img class="img_01" src="http://img.zengwf.com/images/kxt/phone_img_01.png">
                <img class="img_02" src="http://img.zengwf.com/images/kxt/phone_img_02.png">
                <img class="img_03" src="http://img.zengwf.com/images/kxt/phone_img_03.png">
                <img class="img_05" src="http://img.zengwf.com/images/kxt/phone_img_05.png">
                <img class="img_07" src="http://img.zengwf.com/images/kxt/phone_img_07.png">
            </div>
            <img src="http://img.zengwf.com/images/kxt/kuaixun.png" alt="" class="page1_kuaixun">


        </div>
    </div>
    <div class="page page2">
        <div class="section_inner">
            <div class="img_box">
                <img class="img_01" src="http://img.zengwf.com/images/kxt/live_img_02.png">
                <img class="img_02" src="http://img.zengwf.com/images/kxt/wechat_img_02 (1).png"/>
                <div class="img_tr_box">
                    <img class="img_03" src="http://img.zengwf.com/images/kxt/wechat_img_03.jpg"/>
                    <img class="img_04" src="http://img.zengwf.com/images/kxt/wechat_img_03.jpg"/>
                </div>
                <div class="img_in_left">
                    <img class="img_05" src="http://img.zengwf.com/images/kxt/wechat_img_05.png"/>
                    <img class="img_08" src="http://img.zengwf.com/images/kxt/wechat_img_03.jpg"/>
                </div>
                <div class="img_in_right">
                    <img class="img_06" src="http://img.zengwf.com/images/kxt/wechat_img_05.png"/>
                    <img class="img_07" src="http://img.zengwf.com/images/kxt/wechat_img_07.png"/>
                    <img class="img_09" src="http://img.zengwf.com/images/kxt/wechat_img_07.png"/>
                </div>
            </div>
            <img src="http://img.zengwf.com/images/kxt/dow_video.png" alt="" class="page2_video">
        </div>
    </div>
    <div class="page page3">
        <div class="section_inner">
            <div class="img_box">
                <img class="img_01" src="http://img.zengwf.com/images/kxt/pageimg0.png">
                <img class="img_02" src="http://img.zengwf.com/images/kxt/pageimg1.png"/>
                <img class="img_03" src="http://img.zengwf.com/images/kxt/pageimg3.png"/>
            </div>
            <img src="http://img.zengwf.com/images/kxt/dow_data.png" alt="" class="page3_data">
        </div>
        <div class="dow_footer">
            <p style="font-size: 1px;">投资有风险,入市需谨慎</p>
            <p>© 版权所有：义乌聚鼎网络科技有限公司</p>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{url('plugIn/kxt/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugIn/kxt/jquery.mousewheel.min.js')}}"></script>
<script type="text/javascript" src="{{url('plugIn/kxt/download.js')}}"></script>
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
    <p><img src="http://img.zengwf.com/images/wxh/HX201805.jpg" alt="" width="200"></p>
    <p>如安装过程中遇到问题，请扫描二维码添加您的专属客服</p>
    <p><a href="javascript:void(0)" class="wx_colse">关闭</a></p>
</div>
</body>
<script>
    //获取所有的点击li标签，出现表单
    var Btns = $('.nav_ul a,.download_box li');
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
