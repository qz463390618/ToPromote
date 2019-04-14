var ogeturl = function () {
  $('.phone').val("");
  $('.dialog1').css("display", "none");
  $('.zhegai').css("display", "none");
};
$(function () {
  var num = 3414317;
  var _i = 0;
  var loop = setInterval(function () {
    _i = _i + 1000000;
    if (_i >= num) {
      _i = num;
      clearInterval(loop);

      magic_number(num);
      setTimeout(function () {
        magic_number(num);
      }, 100);
      return;
    }
    magic_number(_i);
  }, 500);
})

layer.config({
  maxWidth: '560'
});
var stoname = Math.round(Math.random() * s.length);

var cNum = GetQueryString("gp") ? GetQueryString("gp") : s[stoname].c;

$('.pbtn').on('click', function () {
  zpcj = cNum;
  if (zpcj == '' || !checkData(s, "c", zpcj)) {
    layer.msg('请输入正确的股票代码');
    return false;
  } else {
    $('.dialog_title').html("诊断报告已计算完成");
    //loadLittle($(".dialog1,.zhegai"));
	loadLittle($("#layui-layer-shade3,#layui-layer3"));
  }
});
if (!$('#loadBox').size()) {
  var loadHtml = '<div class="loadBox" id="loadBox">\n' +
    '    <div class="load_content">\n' +
    '        <div class="load_title">\n' +
    '            <div class="load_discuss">正在从数据库中调取<span class="kindName">诊断</span>报告<span class="spot">...</span></div>\n' +
    '            <div class="load_barbox">\n' +
    '                <div class="load_barline">\n' +
    '                    <div style="width:0;" class="load_charts"></div>\n' +
    '                </div>\n' +
    '            </div>\n' +
    '        </div>\n' +
    '    </div>\n' +
    '</div>';
  $('body').append($(loadHtml));
}

function hideLittle() {
  clearInterval(spotNum);
  $("#loadBox").hide();
  $(".load_charts").stop(true);
  $(".load_charts").width("0px");
}
$('.circle1').click(function () {
  layer.confirm('您确认要放弃这次让资产翻倍的机会吗？', {title:false,closeBtn:false,
    btn: ['让资产翻倍', '我不想赚钱']
  }, function (index) {
    layer.close(index);
  }, function () {
    cancel(this);
  })
});

function cancel(t) {
  $('.dialog1').css("display", "none");
  $('.zhegai').css("display", "none");
}

function loadLittle(Popup) {
  var n = '.';
  $("#loadBox").css("display", "block");
  spotNum = setInterval(function () {
    if (n.length < 4) {
      $('.load_discuss .spot').text(n);
      n = n + '.';
    } else {
      n = '.';
      $('.load_discuss .spot').text(n);
    }
  }, 400);
  $(".load_charts").animate({
    width: "100%"
  }, 3000, "", function () {
    hideLittle();
    Popup.show();
  });
}

$('#btn9').on('click', function () {
  zpcj = cNum;
  if (zpcj == '' || !checkData(s, "c", zpcj)) {
    layer.msg('请输入正确的股票代码');
    return false;
  } else {
    telphone = $('.phone').val();
    lgs = layer.load(1, {
      shade: [0.8, '#393D49']
    });
    getMRegUser(telphone, zpcj);
  }
})


function magic_number(value) {
  var num = $("#number");
  num.animate({
    count: value
  }, {
    duration: 500,
    step: function () {
      num.text(String(parseInt(this.count)));
    }
  });
}
//获取股票基础信息
if (cNum != '') getCodeInfo(cNum);


//时间变换
function showLocale(objD) {
  var str, colorhead, colorfoot;
  var yy = objD.getYear();
  if (yy < 1900) yy = yy + 1900;
  var MM = objD.getMonth() + 1;
  if (MM < 10) MM = '0' + MM;
  var dd = objD.getDate();
  if (dd < 10) dd = '0' + dd;
  var hh = objD.getHours();
  if (hh < 10) hh = '0' + hh;
  var mm = objD.getMinutes();
  if (mm < 10) mm = '0' + mm;
  var ss = objD.getSeconds();
  if (ss < 10) ss = '0' + ss;
  var ww = objD.getDay();
  if (ww == 0) colorhead = "<font>";
  if (ww > 0 && ww < 7) colorhead = "<font >";
  str = colorhead + yy + "-" + MM + "-" + dd + " &nbsp&nbsp" + hh + ":" + mm + ":" + ss + " ";
  return (str);
}

function tick() {
  var today;
  today = new Date();
  document.getElementById("new_data").innerHTML = showLocale(today);
  window.setTimeout("tick()", 1000);
}
tick();

$('.plList img').one('click', function () {
  $(this).attr('src', '/js/redgood.png');
  var n = parseInt($(this).parents('p').find('.red').text());
  $(this).parents('p').find('.red').text(n + 1);
});

// 股友评论滚动
scrollPL();

function scrollPL() {
  var i = 1;
  var len = $('.plList li').length;
  $('.plList').append($('.plList li').clone());
  var _table = $('.plList').eq(0);
  setInterval(function () {
    _table.css('marginTop', -114 * i);
    i++;
    if (i == len + 1) {
      setTimeout(function () {
        _table.css('transition', 'none');
        _table.css('marginTop', 2);
        i = 1;
        setTimeout(function () {
          _table.css('transition', 'all .6s')
        }, 700);
      }, 1000)
    }
  }, 5000);
}
scrollTable3();

function scrollTable3() {
  var i = 1;
  var len = $('.alone_list li').length;
  $('.alone_list').append($('.alone_list li').clone());
  var _table = $('.alone_list').eq(0);
  setInterval(function () {
    _table.css('marginTop', -60 * i);
    i++;
    if (i == len + 1) {
      setTimeout(function () {
        _table.css('transition', 'none');
        _table.css('marginTop', 2);
        i = 1;
        setTimeout(function () {
          _table.css('transition', 'all .6s')
        }, 700);
      }, 1000)
    }
  }, 2500);
}

$('#zd_btn3585').on('click', function () {
  cNum = $(this).siblings('.input_text').val();
  if (cNum == '' || !checkData(s, "c", cNum)) {
    layer.msg('请输入正确的股票代码');
    return false;
  } else {
    getCodeInfo(cNum);
    $('body,html').animate({
      scrollTop: 0
    }, 200);
  }
});
