<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>中国金融投资平台资质查询</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{url('css/share.css')}}">
    <link rel="stylesheet" href="{{url('css/platform/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{url('css/platform/app_p_search.css')}}">
    <link rel="stylesheet" href="{{url('css/sj_form.css')}}">
    <script src="{{url('js/platform/jquery.min.js')}}"></script>
    <script src="{{url('js/platform/sj_platform.js')}}"></script>
</head>
<body>

<div class="header">
    <div class="am-container">
        <ul>
            <li class="li_logo">
                <img src="http://img.zengwf.com/images/platform/logo_cfca.png" alt="">
            </li>
            <li class="li_logo">
                <img src="http://img.zengwf.com/images/platform/logo_kxqy.png" alt="">
            </li>
        </ul>
    </div>
</div>

<div class="main">
    <div class="ptcx">
        <div class="am-container">
            <div class="title-small"> <img src="http://img.zengwf.com/images/platform/txt_small_zizichaxun.png" alt=""></div>
            <div class="title"><img src="http://img.zengwf.com/images/platform/txt_zizichaxun.png" alt=""></div>
            <div class="clsnav">
                <ul class="am-cf" id="fl">
                    <li class="active"><a href="javascript:void (0);">外汇</a></li>
                    <li><a href="javascript:void (0);">贵金属</a></li>
                    <li><a href="javascript:void (0);">期货</a></li>
                    <li><a href="javascript:void (0);">其他</a></li>

                    <!--<li><a href="javascript:void (0);">大宗</a></li>-->
                </ul>
            </div>
            <div class="myform">
                <div class="am-form">
                    <div class="am-form-group am-cf">
                        <input id="search" type="text" class="am-fl" placeholder="请输入您要查询平台的名称">
                        <button type="button" class="am-fl input_xy" id="search-btn">立即查询</button>
                    </div>
                    <p style="color:#f00; font-size:1em; text-align:center; margin:0 auto;">*本平台仅针对金融行业投资查询，不支持招聘信息查询</p><p>
                    </p><div class="am-form-group checkbox am-cf" style="left: 50%; margin-left: 43px;">
                        <label class="am-checkbox">
                            <input type="checkbox" value="" data-am-ucheck="" class="am-ucheck-checkbox">
                            <span>
                                    <i class="form-affirm form-affirm-active"></i>
                            </span>  <em style="font-style: normal;" index="0">是否正规审批</em>
                        </label>
                        <label class="am-checkbox" style="margin-left: 12px;">
                            <input type="checkbox" value="" data-am-ucheck="" class="am-ucheck-checkbox">
                            <span>
                                    <i class="form-affirm "></i>
                            </span>  <em style="font-style: normal;" index="1">平台承载资金</em>
                        </label>
                        <label class="am-checkbox">
                            <input type="checkbox" value="" data-am-ucheck="" class="am-ucheck-checkbox">
                            <span>
                                    <i class="form-affirm "></i>
                            </span>  <em style="font-style: normal;" index="2">分析师团队</em>
                        </label>
                        <label class="am-checkbox" style=" margin-left: 28px;">
                            <input type="checkbox" value="" data-am-ucheck="" class="am-ucheck-checkbox">
                            <span>
                                    <i class="form-affirm "></i>
                            </span> <em style="font-style: normal;" index="3">平台诚信报告</em>
                        </label>
                    </div>
                </div>
            </div>

            <div class="count">
                <p>已为 <span id="rnum">45465</span>名投资者查询了 <span id="gnum">89296</span> 个平台</p>
            </div>

            <div class="jgcx">
                <button class="rd-zx">查询国际审批的投资机构列表</button>
            </div>

            <div class="ic-group">
                <ul class="am-cf">
                    <li>
                        <img src="http://img.zengwf.com/images/platform/icon-jiangbei.png" alt="">
                        <h3>权威数据</h3>
                        <p>源自官方权威<br>系统实时更新</p>
                    </li>
                    <li>
                        <img src="http://img.zengwf.com/images/platform/icon-shuju.png" alt="">
                        <h3>结果精准</h3>
                        <p>收录100%<br>金融投资平台</p>
                    </li>
                    <li>
                        <img src="http://img.zengwf.com/images/platform/icon-diannao.png" alt="">
                        <h3>大数据</h3>
                        <p>整合国际多家平台投<br>诉数据联动</p>
                    </li>
                    <li>
                        <img src="http://img.zengwf.com/images/platform/icon-baozhang.png" alt="">
                        <h3>安全保障</h3>
                        <p>强大加密技术<br>保障信息安全</p>
                    </li>
                </ul>
            </div>

            <div class="dtcx" >
                <div class="title">动态实时查询</div>
                <div class="cont am-cf lieven" style="padding: 24px 30px;">
                    <ul class="am-fl" style="margin-top: -16px;">
                        <li>137****4412<span>中大商品交易中心</span></li>{{--8个  备份10个--}}
                        <li>189****9012<span>浙江舟山大宗</span></li>
                        <li>135****1370<span>天津贵金属</span></li>
                        <li>131****6561<span>上海黄金交易所</span></li>
                        <li>189****1586<span>天通金</span></li>
                        <li>188****8103<span>北京石油交易所</span></li>
                        <li>130****6666<span>上海石油交易所</span></li>
                        <li>156****7517<span>渤海商品交易所</span></li>
                        <li>189****2888<span>东北亚贵金属交易所</span></li>
                        <li>139****2357<span>北京大宗商品交易所</span></li>
                        <li>135****0812<span>海西商品交易所</span></li>
                        <li>152****1943<span>宁波大宗商品交易所</span></li>
                    </ul>
                    <ul class="am-fr" style="margin-top: -16px;">
                        <li>131****0828<span>天津股权交易所</span></li>8个  备份10个
                        <li>158****6375<span>郑州商品交易所</span></li>
                        <li>138****4747<span>赤峰大宗商品交易所</span></li>
                        <li>158****6375<span>甬交所</span></li>
                        <li>130****0570<span>齐鲁大宗</span></li>
                        <li>137****3673<span>黄河大宗</span></li>
                        <li>130****4623<span>湖南纬德大宗商品交易所</span></li>
                        <li>180****6015<span>西南大宗商品交易所</span></li>
                        <li>156****2503<span>苏州大宗商品交易所</span></li>
                        <li>138****1338<span>太富大宗商品交易所</span></li>
                        <li>151****4111<span>金大师</span></li>
                        <li>137****5233<span>金策黄金</span></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="footer">
    <div class="am-container">
        <div class="by">
            <span>官方认证查询</span>
            <img class="img_yx" src="http://img.zengwf.com/images/platform/icon-dun2.png" alt="">
            <span>保障投资安全</span>
        </div>
        <p style="font-size: 0.1rem;color:#fff;margin:0.6rem 0;">投资有风险 入市需谨慎</p>
        <div class="copyright">
            <p>Copyright ©   BY  金融投资平台官方查询  2015-2018</p>
            <p>金创互动科技（深圳）有限公司  </p>
            <p>ICP备案号：粤ICP备16102940号-1</p>
        </div>
    </div>
</div>
{{--写跳转过来的页面--}}
<input type="hidden" name="referr" value="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :'' ?>">
<!--遮罩层-->
<div class="layui-layer-shade" id="layui-layer-shade3" time="3" style="display:none;"></div>
<!--表单-->
<div class="layui-layer layui-layer-page layer-form layer-anim" id="layui-layer3" type="page" showtime="0"time="3" contype="object" style="display: none;width:27.5rem;top:13rem">
    <div id="" class="layui-layer-content">
        <div class="modal-form layui-layer-wrap" id="modal-form" style="display: block;">
            <p style="font-size: 2rem;padding:0;color:#41A5DD ;text-align: center;margin: 0;padding-top: 1rem; ">免费下载</p>
            <p style="font-weight:normal; color:#999; font-family:宋体; font-size:1rem;text-align: center;padding-top:10px;margin: 0;">（请正确填写手机号码，以便获取软件账号和密码！）</p>
            <form id="form-1" class="validate nice-validator n-default" action="index1.html#" method="post" novalidate="novalidate">

                <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
                <div class="form-content" style="padding: 0;">
                    <div class="form-group">
                        <label for="txtName1" class="form-label" >公司名</label>
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
                            <input type="text" name="txtSmsCode1" id="txtSmsCode1" class="input-vcode" maxlength="6" style="width: 46%;">

                            <button id="btnYzm1" class="dz_yzm" value="免费获取验证码" onclick="javascript:return false;">
                                <span id="SendTxt1">免费获取验证码 </span>
                            </button>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-group" style="height: 70px">
                        <span class="form-group_button " id="btn-submit" type="button" onclick="" style="margin-left: 13%;">立即查询</span>

                    </div>
                    <div class="form-footer-text" style="padding-left: 1rem;">
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
<!--回复-->
<div class="laydat-reply" style="display: none">
    <h3>您的信息已经提交，我们的投资顾问稍后将通过电话与您沟通详细事宜!</h3>
    <button>确认</button>
</div>

<script src="{{url('js/platform/modernizr.js')}}"></script>
<script src="{{url('js/platform/amazeui.ie8polyfill.min.js')}}"></script>
<script src="{{url('js/platform/pc_scroll.js')}}"></script>

</body>
<script>
    //获取所有的点击li标签，出现表单
    var Btns = $('#search-btn,.jgcx .rd-zx');
    //获取遮罩层和表单元素
    //获取用户输入的搜索词

    var mask = $('#layui-layer-shade3');
    var Form = $('#layui-layer3');
    $(Btns).click(function()
    {
        var searchWord = $('#search').val();
        $('#txtName1').val(searchWord);
        $(mask).css('display','block');
        $(Form).css('display','block');

    });
</script>
<script src="{{url('js/platform/plat_form.js')}}"></script>
</html>
