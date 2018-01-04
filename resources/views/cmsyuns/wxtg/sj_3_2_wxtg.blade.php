<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>跟着大神炒黄金</title>
    <link rel="stylesheet" type="text/css" href="{{url('/css/wxtg/sj_wxtg.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/share.css')}}">
    <script src="{{url('js/wxtg/jquery.min.js')}}"></script>
    <script src="{{url('js/wxtg/jquery.js')}}"></script>
    <script src="{{url('js/wxtg/animateBackground-plugin.js')}}"></script>
</head>
<body>
<script>
    //start
    var accs=["ljaa090"];
    //end
</script>
<script type="text/javascript">
    var Num1 = "";
    var Num2 = "";
    $(function() {
        for (var i = 0; i < 5; i++) {
            Num1 += Math.floor(Math.random() * 10);
        }
        for (var i = 0; i < 9; i++) {
            Num2 += Math.floor(Math.random() * 10);
        }
        show_num(Num1, 1);
        show_num(Num2, 2);
        setInterval("update_num()", 3000);
    });
    function update_num() {
        Num1 = parseInt(Num1) + Math.floor(Math.random() * 10);
        Num2 = parseInt(Num2) + Math.floor(Math.random() * 10);
        show_num(Num1, 1);
        show_num(Num2, 2);
    }
    function show_num(n, cn) {
        var it = $(".t_num" + cn + " i");
        var len = String(n).length;
        for (var i = 0; i < len; i++) {
            if (it.length <= i) {
                $(".t_num" + cn).append("<i></i>");
            }
            var num = String(n).charAt(i);
            var y = -parseInt(num) * 60;
            var obj = $(".t_num" + cn + " i").eq(i);
            obj.animate({
                backgroundPosition: '(0 ' + String(y) + 'px)'
            }, 'slow', 'swing', function() {});
        }
    }
</script>
<!-- 二维码悬浮 -->
<div class="r_wx" style="display: none;">
    <img src="http://img.zengwf.com/images/wxtg/wxtg2.jpg" alt="">
    <ul>
        <li class="wx_s">扫一扫，即送</li>
        <li>50万模拟金和每日投资攻略</li>
    </ul>
    <p>或搜索微信号<span>HX201805</span></p>
    <a href="weixin://">已复制直接去微信添加</a>
</div>
<div id="banner">
    <div class="banner">
        <div class="b_con">
            <div class="aa">
                <ul class="t_num1"></ul>
            </div>
            <div class="bb">
                <ul class="t_num2"></ul>
            </div>
        </div>
        <div class="hb">
            <ul>
                <li class="scan">扫一扫，即送</li>
                <li>50万模拟金和每日投资攻略</li>
            </ul>
            <i>现在加入即刻获取</i>
            <img src="http://img.zengwf.com/images/wxtg/wxtg2.jpg" alt="">
            <p>或搜索微信号 <span>HX201805</span></p>
            <a href="weixin://">已复制点击去微信添加</a>
        </div>
    </div>
</div>
<div class="content_wx">
    <h2>加微信就送三大福利，先到先得</h2>
    <div class="nav">
        <ul>
            <li class="jump js_btn">
                <p>50万交易金</p>
                <a class="jump js_btn" onclick="_czc.push(['_trackEvent', '点击复制3', '关注微信']);" href="javascript:;">
                    <span>立即<br>领取</span>
                </a>
            </li>
            <li class="jump js_btn">
                <p class="special">VIP高手
                    <br>直播间邀请码</p>
                <a class="jump js_btn" onclick="_czc.push(['_trackEvent', '点击复制3', '关注微信']);" href="javascript:;">
                    <span>立即<br>领取</span>
                </a>
            </li>
            <li class="jump js_btn">
                <p class="special">移动版
                    <br>交易分析软件</p>
                <a class="jump js_btn" onclick="_czc.push(['_trackEvent', '点击复制3', '关注微信']);" href="javascript:;">
                    <span>立即<br>领取</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="simulation">
    <h2><span>模拟账户</span>免费送，50万投资金任意玩</h2>
    <div class="s_content">
        <img class="btn_max jumptwo js_btn" onclick="_czc.push(['_trackEvent', '点击复制5', '关注微信']);" src="http://img.zengwf.com/images/wxtg/button.png" alt="">
    </div>
    <div class="s_img">
        <ul>
            <li>免费申请模拟账户，<span>只需5秒</span>即可赢得百万模拟资金任意玩。</li>
            <li style="padding-left: 4rem;">数据与实盘同步，体验最真实的交易环境，开启<span>无风险投资</span>体验。</li>
            <li style="padding-left: 4rem;">全天候<span>名师坐镇</span>，机会提醒；下单建议；专家答疑异动解析，全部免费</li>
            <li style="padding-left: 4rem;">名师互动交易指导，<span>深入挖掘操盘技巧</span>，不错失买卖良机</li>
        </ul>
    </div>
</div>
<div class="layout">
    <h2></h2>
    <div class="layout_img"><img src="http://img.zengwf.com/images/wxtg/img2.png" style="width: 60rem;"></div>
    <div class="layout_img1"><img src="http://img.zengwf.com/images/wxtg/zzzz1.png" style="width: 60rem;"></div>
</div>
<div class="Record">
    <h2><span>当月</span>战绩真实可查</h2>
    <div class="Record_bt">
        <ul>
            <li class="open_t">开仓时间</li>
            <li>产品</li>
            <li>买卖方向</li>
            <li class="bt_s">手数</li>
            <li>开仓价格</li>
            <li>平仓价格</li>
            <li>平仓盈亏</li>
            <li class="bt_s">盈亏</li>
            <li></li>
        </ul>
    </div>
    <!--标题列表-->
</div>
<div id="demo">
    <div id="demo1">
        <ul><li class="open_t">2017-12-20</li><li>美黄金</li><li>买跌</li><li class="bt_s">1</li><li>1282.3</li><li>1281.1</li><li>840</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-20</li><li>美原油</li><li>买跌</li><li class="bt_s">1</li><li>51.78</li><li>51.6</li><li>1260</li><li class="bt_y">止赢</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-20</li><li>美铜</li><li>买跌</li><li class="bt_s">1</li><li>3.192</li><li>3.1895</li><li>437.5</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-20</li><li>美原油</li><li>买跌</li><li class="bt_s">1</li><li>51.75</li><li>51.66</li><li>630</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-20</li><li>美铜</li><li>买跌</li><li class="bt_s">1</li><li>3.1995</li><li>3.1915</li><li>1400</li><li class="bt_y">止赢</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-20</li><li>美黄金</li><li>买跌</li><li class="bt_s">1</li><li>1286.5</li><li>1284.4</li><li>1470</li><li class="bt_y">止赢</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-20</li><li>大恒指</li><li>买跌</li><li class="bt_s">1</li><li>28394</li><li>28399</li><li>225</li><li class="bt_z">止损</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-20</li><li>美元指数</li><li>买涨</li><li class="bt_s">1</li><li>93.265</li><li>93.295</li><li>210</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-20</li><li>美黄金</li><li>买跌</li><li class="bt_s">1</li><li>1290.6</li><li>1288.6</li><li>1400</li><li class="bt_y">止赢</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-20</li><li>小恒指</li><li>买跌</li><li class="bt_s">1</li><li>28358</li><li>28388</li><li>-270</li><li class="bt_z">止损</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>美黄金</li><li>买涨</li><li class="bt_s">1</li><li>1291</li><li>1289.3</li><li>-1190</li><li class="bt_z">止损</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>德指</li><li>买涨</li><li class="bt_s">1</li><li>12954</li><li>12961.5</li><li>1406.25</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>美黄金</li><li>买涨</li><li class="bt_s">1</li><li>1286.5</li><li>1287.5</li><li>700</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>美黄金</li><li>买涨</li><li class="bt_s">1</li><li>1284.1</li><li>1284.5</li><li>280</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>大恒指</li><li>买跌</li><li class="bt_s">1</li><li>28124</li><li>28072</li><li>2340</li><li class="bt_y">止赢</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>大恒指</li><li>买跌</li><li class="bt_s">1</li><li>28295</li><li>28265</li><li>1350</li><li class="bt_y">止赢</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>美铜</li><li>买涨</li><li class="bt_s">1</li><li>3.18</li><li>3.178</li><li>-350</li><li class="bt_z">止损</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>美黄金</li><li>买涨</li><li class="bt_s">1</li><li>1283.1</li><li>1284.5</li><li>980</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>小恒指</li><li>买跌</li><li class="bt_s">1</li><li>28649</li><li>28548</li><li>909</li><li class="bt_y">止赢</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>美元指数</li><li>买涨</li><li class="bt_s">1</li><li>93.295</li><li>93.145</li><li>-1050</li><li class="bt_z">止损</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-19</li><li>小恒指</li><li>买跌</li><li class="bt_s">1</li><li>28705</li><li>28643</li><li>558</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>美黄金</li><li>买跌</li><li class="bt_s">1</li><li>1283.9</li><li>1282.6</li><li>910</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>美原油</li><li>买跌</li><li class="bt_s">1</li><li>52.19</li><li>52.12</li><li>490</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>美原油</li><li>买涨</li><li class="bt_s">1</li><li>52.07</li><li>52.2</li><li>910</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>美黄金</li><li>买跌</li><li class="bt_s">1</li><li>1287.5</li><li>1285</li><li>1750</li><li class="bt_y">止赢</li><li>趋势策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>美元指数</li><li>买涨</li><li class="bt_s">1</li><li>93.375</li><li>93.505</li><li>910</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>大恒指</li><li>买涨</li><li class="bt_s">1</li><li>28686</li><li>28704</li><li>810</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>美铜</li><li>买跌</li><li class="bt_s">1</li><li>3.213</li><li>3.211</li><li>350</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>小恒指</li><li>买涨</li><li class="bt_s">2</li><li>28670</li><li>28717</li><li>846</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>美铜</li><li>买涨</li><li class="bt_s">1</li><li>3.208</li><li>3.2105</li><li>437.5</li><li class="bt_y">止赢</li><li>短线策略</li></ul>
        <ul><li class="open_t">2017-12-18</li><li>小恒指</li><li>买涨</li><li class="bt_s">1</li><li>28659</li><li>28636</li><li>-207</li><li class="bt_z">止损</li><li>短线策略</li></ul>
    </div>
    <div id="demo2"></div>
</div>
<script type="text/javascript">
    var speed = 40;
    var ZJJDemo = document.getElementById('demo');
    var ZJJDemo1 = document.getElementById('demo1');
    var ZJJDemo2 = document.getElementById('demo2');
    ZJJDemo2.innerHTML = ZJJDemo1.innerHTML;

    function Marquee1() {
        if (ZJJDemo2.offsetHeight - ZJJDemo.scrollTop <= 0)
            ZJJDemo.scrollTop -= ZJJDemo1.offsetHeight
        else {
            ZJJDemo.scrollTop++
        }
    }
    var MyMar1 = setInterval(Marquee1, speed)
    ZJJDemo.onmouseover = function() { clearInterval(MyMar1) }
    ZJJDemo.onmouseout = function() { MyMar1 = setInterval(Marquee1, speed) }

</script>
<div class="buttons">
    <img class="btn_min jumptwo js_btn" onclick="_czc.push(['_trackEvent', '点击复制6', '关注微信']);" src="http://img.zengwf.com/images/wxtg/buttons.png" alt="">
</div>
<div class="copyright">
    <h2 style="margin-bottom: 0;">投资有风险,入市需谨慎</h2>
    <p>&copy; 版权所有：金创互动科技（深圳）有限公司   ICP备案号：粤ICP备16102940号-1</p>
</div>
<div class="tankuang hide">
    <div class="close"></div>
    <p class="txt_one">微信扫一扫</p>
    <p class="txt_one1">现在加入，即刻获取</p>
    <div class="tk_img"><img src="http://img.zengwf.com/images/wxtg/wxtg2.jpg" alt=""></div>
    <div class="tk_font">
        <p class="txt_two">或手动添加微信号</p>
        <p class="txt_three"> HX201805</p>
        <a href="weixin://">已复制直接去微信添加</a>
    </div>

</div>
<div class="box" style="display: none;"></div>
<script>
    var offmax = $(".nav").offset().top;

    $(window).scroll(function() {

        if ($(this).scrollTop() > offmax) {
            $(".max").css({ "position": "fixed", "bottom": "0", "z-index": "3" });
            $(".slideposition").css({
                "right": 0
            });
        } else {
            $(".max").css({ "position": "static" });
            $(".slideposition").css({
                "right": "-220px"
            });
        }
    });
    // 判断滚动条高度
    $('.r_wx').hide();
    $(window).scroll(function() {
        var _top = $(window).scrollTop();
        if (_top > 500) {
            $('.r_wx').fadeIn();
        } else {
            $('.r_wx').fadeOut();
        }
    });
    $(".js_btn").click(function() {
        $(".shadow").removeClass("hide");
        $(".tankuang").removeClass("hide");
        $(".box").show();
    });
    $(".close").click(function() {
        $(".shadow").addClass("hide");
        $(".tankuang").addClass("hide");
        $(".box").hide();
    })
    //声明_czc对象:
    var _czc = _czc || [];
    //绑定siteid，请用您的siteid替换下方"XXXXXXXX"部分
    _czc.push(["_setAccount", "1262563663"]);
</script>

</body>
</html>