<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>淘宝爆款￥2000炒股秘籍免费领</title>
    <link rel="stylesheet" href="{{url('css/gp_tbbk/pc.css')}}">
    <script src="{{url('js/jquery.js')}}"></script>
    <script src="{{url('js/gp_tbbk/index.js')}}"></script>
    <script type="text/javascript">
        (function ($) {

            $.fn.myScroll = function (options) {
                //默认配置
                var defaults = {
                    speed: 100,  //滚动速度,值越大速度越慢
                    rowHeight: 32 //每行的高度
                };

                var opts = $.extend({}, defaults, options), intId = [];

                function marquee(obj, step) {

                    obj.find("ul").animate({
                        marginTop: '-=1'
                    }, 0, function () {
                        var s = Math.abs(parseInt($(this).css("margin-top")));
                        if (s >= step) {
                            $(this).find("li").slice(0, 1).appendTo($(this));
                            $(this).css("margin-top", 0);
                        }
                    });
                }

                this.each(function (i) {
                    var sh = opts["rowHeight"], speed = opts["speed"], _this = $(this);
                    intId[i] = setInterval(function () {
                        if (_this.find("ul").height() <= _this.height()) {
                            clearInterval(intId[i]);
                        } else {
                            marquee(_this, sh);
                        }
                    }, speed);

                    _this.hover(function () {
                        clearInterval(intId[i]);
                    }, function () {
                        intId[i] = setInterval(function () {
                            if (_this.find("ul").height() <= _this.height()) {
                                clearInterval(intId[i]);
                            } else {
                                marquee(_this, sh);
                            }
                        }, speed);
                    });

                });

            }

        })(jQuery);

        $(function () {

            $("#divMiddleOneGund").myScroll({
                speed: 100,
                rowHeight: 32
            });

        });
    </script>
</head>
<body>
<div class="pic-bg1">
    <div class="main-box">
        <div class="txt">
            <b>推广期间 <span>扫码客服微信</span> 免费领取软件激活码</b>
            1、与淘宝店铺
            <spa>2000元</spa>
            产品一致，绝无功能阉割<br>
            2、大数据<span>精选股池</span><br>
            3、资深分析老师<span>实时值播</span>，随时掌握行情<br>
            4、软件类<span>vip教程视频</span>可以免费在线观看<br>
            5、承诺<span>免费使用一年</span>，一年后继续使用需要续费
        </div>
        <div class="ewm-xx">
            <div class="img"><b><img class="wechat-ewm"
                                     src="http://jmanagement.nanhong800.com/UploadImage/QRcodeImages/2018124947534705236.png"
                                     width="134" height="134" alt=""></b><span style=" font-size:15px"
                                                                               class="wechat-num">微信号:Atang9527xin</span>
            </div>
            <div class="xx"><span>活动期一周</span><b>先到先得</b></div>
        </div>
    </div>
</div>
<div class="pic-bg2">
    <div class="main-box"><img src="http://img.zengwf.com/images/gp_tbbk/img1.jpg" alt="来自我司天猫店铺截图"></div>
</div>
<div class="pic-bg3">
    <div class="main-box">
        <div class="tit">选好股，不用再大海捞针</div>
        <div class="span"><em></em>盘前精选股票池，涨停先知道！</div>
        <div class="img"><img src="http://img.zengwf.com/images/gp_tbbk/img2.jpg" alt=""></div>
        <div class="txt">追踪市场开盘前资金异动，快速选取 动能最强劲的几支个股，找到个股短 期波段的爆发点！</div>
        <div class="clear"></div>
    </div>
</div>
<div class="pic-bg4">
    <div class="main-box">
        <div class="tit">大数据彻底告别“买还是卖的困扰”</div>
        <div class="span"><em></em>BS操盘密码，提示买卖时机</div>
        <div class="img"><img src="http://img.zengwf.com/images/gp_tbbk/img3.jpg" alt=""></div>
        <div class="txt">B点提示机会，S点提示风险，助您买在低点，卖在高位，做透波段。</div>
        <div class="clear"></div>
    </div>
</div>
<div class="pic-bg5">
    <div class="main-box">
        <div class="tit">最新投资风口和布局，还得听他们！</div>
        <div class="span"><em></em>每天不间断直播，实时揭秘个股行情！</div>
        <div class="txt">随时洞悉市场走向，解读趋势，让你随时随地接收讯息，把握热点。</div>
        <div class="px">
            <div class="name">培训内容</div>
            <div class="xx">
                <b>课程一：甄选题材、锁定热点</b>
                <p>什么事件/消息能够引起游资关注？<br>什么新闻/话题能够引发炒作跟风？<br>热点题材形成后盘面有哪些特征？</p>
                <b>课程二：选股选强，直击涨停</b>
                <p>龙头股与跟风股怎么区分？<br>龙头股启动时有哪些信号？<br>如何洞穿主力资金意图？<br>破解主力资金操盘手法！</p>
                <b>课程三：买在低估，卖在顶峰</b>
                <p>灵活交易，找准买卖点<br>筹码分布图详解<br>阻力支撑正确画图技法</p>
                <b>课程四：执行力是交易成功的关键</b>
                <p>职业操盘手内部培训课程<br>程序化交易与交易执行力</p>
            </div>
        </div>
        <div class="dt">
            <div class="name">领取动态</div>
            <div class="xx">
                <div class="xx-box" id="divMiddleOneGund">
                    <ul style="font-size: 12px; text-overflow: ellipsis; margin-top: -7px;">

                        <li>微信<span>sta</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>stkf</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>784</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>chenyongqi</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>558996NS</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>hao8864593</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>coriws</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>1922CYD</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>HUAs991</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>8899bbs</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>chenxin55</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>roddyhore</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>YJP666666</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>zqy16188</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>jiun4684</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>Xiao_Hmily</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>JinAn1019</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>tangtian3</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>chenkun1</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>jiaowonue</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>CZCV5878</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>hlq686</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>GFJ-FANT</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>li_jinwen</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>uanuanoo</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>GFJfs</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>li7nwen</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>78ff</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>pkm7</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>tkmc</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>svmt</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>okm-s</span>您的激活码和软件下载地址已发送 请查收</li>
                        <li>微信<span>fkmt</span>您的激活码和软件下载地址已发送 请查收</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="foot-txt">
    <div class="box">入市有风险，投资需谨慎<br> 浦江合趣网络科技有限公司</div>
</div>
<div class="foot-none"></div>
<div class="fixed-foot">
    <div class="box">
        <div class="txt">
            <span>大数据<em>选股</em></span><span>买卖提示</span><span><em>不要2000</em></span><span><em>免费领取</em></span>
            <i>淘宝同行业销量前列 &nbsp; <em>好评99% &nbsp; 免费赠送一年</em></i>
            <i>享受正版售后服务</i>
        </div>
        <div class="ewm"><b><img class="wechat-ewm"
                                 src="http://jmanagement.nanhong800.com/UploadImage/QRcodeImages/2018124947534705236.png"
                                 width="115" height="115" alt="二维码"></b><span style="font-size:10px" class="wechat-num">微信号:Atang9527xin</span>
        </div>
    </div>
</div>


</body>
</html>