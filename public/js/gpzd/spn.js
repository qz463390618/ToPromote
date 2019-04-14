function GetQueryString(name)
{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
}
function checkData(data, pro, code) {
  var reg = new RegExp("^\d{6}$");
  var flag = false;
  for (var i = 0; i < data.length; i++) {
    var temp = data[i];
	//console.log(code);
    if (temp[pro] == code) {
      flag = true;
      break;
    }
  }
  return flag;
}
$(function(){
  $('.searchBtn').on('click', function () {
    cNum = $(this).siblings('.searchInput').val();
    if (cNum==''||!checkData(s, "c", cNum)) {
      layer.msg('请输入正确的股票代码');
      return false;
    }
    else{
      //cNum = getcode(newCode);
      getCodeInfo(cNum);
      //loadLittle($(".dialog1,.zhegai"));
	  loadLittle($("#layui-layer-shade3,#layui-layer3"));
      $('body,html').animate({
      scrollTop: 0
    }, 200);
    }
  });
  lgrec();
});

function getcode(p) {
  if (p > 0) {
    return p;
  } else {
    for (var i = 0; i < s.length; i++) {
      if (s[i].n == p || s[i].c == p) {
        $('.top_p1 span').text(s[i].n);
        return s[i].c;
      }
    }
    return '';
  }
}
//+++++++++++++++++++++++++++++++
var ogeturl = function () {
$('.phone').val("");
};

function getCodeInfo(code) {
  $.ajax({
      url: 'http://qd.10jqka.com.cn/quote.php?cate=real&type=stock&return=json&callback=showStockData&code=' + code,
      type: 'get',
      dataType: 'jsonp',
      contentType: 'application/x-www-form-urlencoded; charset=utf-8'
    })
    .done(function (r) {
		if(r.info[code].name==''){
			for(var i=0;i<s.length;i++){
			var temp = s[i];
				if(temp['c'] ==code){
					r.info[code].name = temp['n'];
					break;
				}
			}
		}
      $('.gName,.btnBg span,#gptext,.codeName,.btnBgb span,.mnbut i,.pbut i,.cName,.gpname,.gpName,.tcxc h3,.stockName,.diagnosis_code_name,.but i,.dimensionName').html(r.info[code].name); //名称
      $('.gCode,.diagnosis_code_num').text('(' + code + ')'); //代码
      $('.xianjia').text(r.data[code]["10"]); //现价
      $('.zhangdie').text(r.data[code]['264648'].slice(0, -1)); //价格变动
      $('.zhangfu').text(r.data[code]['199112'].slice(0, -1) + '%'); //变动百分比
      $('.zhangting').text(r.data[code]['69']); //涨停
      $('.dieting').text(r.data[code]['70']); //跌停
      $('.jinkai').text(r.data[code]['7']); //今开
      $('.zuigao').text(r.data[code]['8']); //最高
      $('.zuidi').text(r.data[code]['9']); //最低
      $('.zuoshou').text(r.data[code]['6']); //昨收
      $('.chengjiaoliang').text((r.data[code]['13'] / 10000).toFixed(2) + '万'); //成交量
      $('.chengjiaoe').text((r.data[code]['19'] / 100000000).toFixed(2) + '亿'); //成交额
      $('.zhenfu').text((r.data[code]['526792'] / 1).toFixed(2) + '%'); //振幅
      $('.huanshou').text((r.data[code]['1968584'] / 1).toFixed(2) + '%'); //换手
      $('.liutongshizhi').text((r.data[code]['3475914'] / 100000000).toFixed(2) + '亿'); //流通市值
      $('.huanshoulv').text((r.data[code]['1968584'] / 1).toFixed(2) + '%'); //换手
      $('.shiyinglv').text((r.data[code]['2034120'] / 1).toFixed(2)); //市盈率（动）



      if (r.data[code]['199112'] >= 0) {
        $('.zhangdie,.zhangfu,.xianjia').css('color', '#ee3a23');
        $('.zhishu img').attr('src', 'http://www.kmhvip.cn/js/arrow.png')
      } else {
        $('.zhangdie,.zhangfu,.xianjia').css('color', '#03a20c');
        $('.zhishu img').attr('src', 'http://www.kmhvip.cn/js/arrowdown.png')
      }
      if(!r.data[code]['10']){
            $('.xianjia').text('停牌');
            $('.zhangfu').text('');
            $('.zhishu img').css('opacity',0).css('visibility','hidden');
        }
      else{
        $('.zhishu img').css('opacity',1).css('visibility','visible');
      }
    })
    .fail(function () {
      console.log("error");
    })

  //其他的股票信息
    $.ajax({
      url: 'http://nuff.eastmoney.com/EM_Finance2015TradeInterface/JS.ashx?id=' + code + '2&token=4f1862fc3b5e77c150a2b985b12db0fd&cb=jQ&_=1508394368154',
      type: 'get',
      dataType: 'jsonp',
      contentType: 'application/x-www-form-urlencoded; charset=utf-8'
    })
    .done(function (r) {
      console.log(r);
    });
}

function jQ(r) {
	//$('.gName,.btnBg span,#gptext,.codeName,.btnBgb span,.mnbut i,.pbut i,.cName,.gpname,.gpName').html(r.Value[2]);
	//console.log(r.Value[2]);
	$('.shijinglv').text((r.Value[43] / 1).toFixed(2)); //市净率
	$('.zongshizhi').text((r.Value[46] / 100000000).toFixed(2) + '亿'); //总市值
}
/*


function getCodeInfo(code) {
  getStock(code, function (r) {
    $('.gName,.btnBg span,#gptext,.codeName,.btnBgb span,.mnbut i,.pbut i,.cName,.gpname,.gpName,.tcxc h3,.stockName,.diagnosis_code_name,.but i,.dimensionName,.cc,.dialogBg span,.btnBg2 span').html(r.name); //名称
    $('.gCode,.diagnosis_code_num,.dm').text('(' + code + ')'); //代码
    $('#stockname').val(code); //代码
    $('.xianjia').text(r.xianjia); //现价
    $('.zhangdie').text(r.zhangdie); //价格变动
    $('.zhangfu').text(r.zhangfu); //变动百分比
    $('.zhangting').text(r.zhangting); //涨停
    $('.dieting').text(r.dieting); //跌停
    $('.jinkai').text(r.jinkai); //今开
    $('.zuigao').text(r.zuigao); //最高
    $('.zuidi').text(r.zuidi); //最低
    $('.zuoshou').text(r.zoushou); //昨收
    $('.chengjiaoliang').text(r.chengjiaoliang); //成交量
    $('.chengjiaoe').text(r.chengjiaoe); //成交额
    $('.zhenfu').text(r.zhenfu); //振幅
    $('.huanshou,.huanshoulv').text(r.huanshou); //换手
    $('.liutongshizhi').text(r.liutongshizhi); //流通市值
    $('.shiyinglv').text(r.shiyinglv); //市盈率（动）
    $('.shijinglv').text(r.shijinglv); //市净率
    $('.zongshizhi').text(r.zongshizhi); //总市值

    if (r.zhangdie >= 0) {
      $('.zhangdie,.zhangfu,.xianjia').css('color', '#ee3a23');
        $('.zhishu img').attr('src', 'http://www.kmhvip.cn/js/arrow.png')
    } else {
      $('.zhangdie,.zhangfu,.xianjia').css('color', '#03a20c');
        $('.zhishu img').attr('src', 'http://www.kmhvip.cn/js/arrowdown.png')
    }
    //停牌
    if (!r.xianjia) {
      $('.xianjia').text('停牌');
        $('.zhangfu').text('');
        $('.zhishu img').css('opacity', 0).css('visibility', 'hidden');
      } else {
        $('.zhishu img').css('opacity', 1).css('visibility', 'visible');
      }
  });
}

function getStock(code, callback_) {
  var a = {};
  $.ajax({
    url: 'http://www.kmhvip.cn/js/GetStockInfo.php',
    type: 'get',
    data: {
      code: code
    },
    dataType: 'jsonp',
    cache: false,
    jsonp: "callback",
    contentType: 'application/x-www-form-urlencoded; charset=utf-8'
  }).done(function (r) {
    a.name = r.data[0].Name; //股票名称

    a.xianjia = r.data[0].Price.toFixed(2); //现价

    a.zhangdie = r.data[0].Change.toFixed(2); //价格变动

    a.zhangfu = r.data[0].ChangePercent.toFixed(2) + '%'; //变动百分比

    a.jinkai = r.data[0].Open.toFixed(2); //今开

    a.zuigao = r.data[0].Hige.toFixed(2); //最高

    a.zuidi = r.data[0].Low.toFixed(2); //最低

    a.zoushou = r.data[0].Close.toFixed(2); //昨收

    a.chengjiaoliang = (r.data[0].Volume / 100).toFixed(2) + '万'; //成交量

    a.chengjiaoe = (r.data[0].Amount / 100000000).toFixed(2) + '亿'; //成交额

    a.zhenfu = (r.data[0].Amplitude / 1).toFixed(2) + '%'; //振幅

    a.huanshou = (r.data[0].TurnoverRate / 1).toFixed(2) + '%'; //换手

    a.liutongshizhi = (r.data[0].CirculationWorth / 100000000).toFixed(2) + '亿'; //流通市值

    a.shiyinglv = r.data[0].PERatio.toFixed(2); //市盈率

    a.shijinglv = r.data[0].CityNetRate.toFixed(2); //市净率

    a.zongshizhi = (r.data[0].TotalMarketValue / 100000000).toFixed(2) + '亿'; //总市值

    a.Isstop = r.data[0].Isstop; //是否涨停

    a.zhangting = r.data[0].Max.toFixed(2); //涨停价

    a.dieting = r.data[0].Min.toFixed(2); //跌停价
    $('.banner_code').text(a.name);
    callback_(a);
    setStockState(a)
  }).fail(function () {
    $('.banner_code').text(a.name);
    callback_(a);
    setStockState(a)
  });
}

function setStockState(r) {
  //停牌
  if (r.Isstop) {
    $('.stockState').text('停牌');
    $('.stockStateContent').removeClass('stockStateNormal').addClass('stockStateStop');
    $('.xianjia').text(r.xianjia);
    $('.zhangfu,.zhangdie,.jinkai,.zuigao,.zuidi,.chengjiaoe,.chengjiaoliang,.huanshou,.zhenfu').text('--');
    $('.zhishu img').remove();
    $('.zhangdie,.zhangfu,.xianjia').css('color', '#fff');
    if ($('.xianjia').hasClass('black')) {
      $('.zhangdie,.zhangfu,.xianjia').css('color', '#000');
    }
  } else {
    $.ajax({
        url: 'http://www.kmhvip.cn/js/states.php',
        type: 'get',
        dataType: 'jsonp',


        cache: false,
        jsonp: "callback"
      })
      .done(function (res) {
        $('.stockState').text(res.data[0].strValue);
      })
      .fail(function () {
        console.log("error");
      })
  }

}

*/
//###########
var isGetVCode = false;
var telphone, zpcj, lgs;
var mget = 'http://wsppdg.kmhgold.net.cn/lgrec';
function getMRegUser(mobile, remark) {
  var regs = /^(13[0-9]|15[012356789]|18[0-9]|14[56789]|17[012345678]|19[89]|16[6])\d{8}$/;
  if (!(regs.test(mobile))) {
    layer.close(lgs);
    layer.msg("请输入正确的手机号码！");
    return false;
  }
  if (isGetVCode) {
    layer.close(lgs);
    layer.msg("请勿重复提交！");
    return false;
  } else {
    isGetVCode = true;
    $.ajax({
      type: 'get',
      url: mget,
      statusCode: {
        404: function () {
          console.log('404,Error!');
        }
      },
      data: {
        'url': window.location.href,
        'sturl': window.location.pathname,
        'atn': 'receive',
        'telphone': mobile,
        'classify': remark,
        'rpage': 1
      },
      dataType: 'jsonp',
      jsonp: 'callback'
    }).done(function (data) {
      layer.closeAll();
      if (data.status > 0) {
        layer.open({
          title: false,
          closeBtn: 0,
          content: "提交成功，稍后将有专业人员拨通您的电话！",
          btn: ['确认'],
          yes: function () {
            layer.closeAll();
          }
        });
        ogeturl();
      } else {
        layer.open({
          title: false,
          closeBtn: 0,
          content: "您已经提交过了，稍后将有专业人员与您进行联系。",
          btn: ['确认'],
          yes: function () {
            layer.closeAll();
          }
        });
      }
    })
    .fail(function () {
      layer.closeAll();
      console.log('404,error!');
    });
  }
}
function lgrec() {
  $.ajax({
      type: 'get',
      url: mget,
      statusCode: {
        404: function () {
          console.log('404,Error!');
        }
      },
      data: {
        'url': window.location.href,
        'sturl': window.location.pathname,
        "referer": escape(document.referrer)
      },
      dataType: 'jsonp',
      jsonp: 'callback'
    }).done(function (data) {
      if (data.status > 0) {
        console.log(data.info);
      } else {
        console.log(data.info);
      }
    })
    .fail(function () {
      console.log('404,error!');
    });
}
