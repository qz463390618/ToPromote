/**
 * Created by Administrator on 2017-12-05.
 */
$(function()
{
    //获取发送验证码按钮
    var btnYzm2 = $('input[value=获取验证码]');
    //console.log(btnYzm2);
    $(btnYzm2).click(function()
    {

        //获取姓名表单和手机号表单
        var userName1 = $('#txtName2');
        var userPhone1 = $('#txtPhone2');

        if($(userPhone1).val() == '')
        {
            alert('请填写手机号');
            return false;
        }

        if($(userName1).val() == '')
        {
            alert('请填写姓名');
            return false;
        }
        console.log($(userPhone1).val());
        //写手机正则
        var phone_preg = /^1[34578]\d{9}$/;
        if(phone_preg.test($(userPhone1).val()))
        {
            //匹配到正确手机号
            //console.log($(userPhone).val());
            $.ajax({
                url:'/send',
                async:false,
                type:'post',
                data:{
                    phone:$(userPhone1).val(),
                    _token:$('#_token').val()
                },
                success:function(data,textStatus,jqXHR)
                {
                    if(data != 400)
                    {
                        //console.log($('#source').val());
                        //console.log($('#keyword').val());
                        alert('验证码发送成功');
                        invokeSettime2(btnYzm2);
                        /*if(document.getElementById("smsCodel"))
                         {
                         $('#smsCodel').val(data);
                         invokeSettime(btnYzm);
                         }else{
                         $('#txtSmsCode1').append("<input type=hidden value="+data+" id='smsCodel' name='smsCodel'>");
                         invokeSettime(btnYzm);
                         }*/
                    }else {
                        alert('验证码发送失败');
                        invokeSettime2(btnYzm2);
                    }
                }
            });

        }else{
            alert('请填写正确的手机号');
        }
    });

    //获取下载按钮
    var btnXz1 = $('.btn2');
    $(btnXz1).click(function() {
        $.ajax({
            url: '/addClient',
            type: 'post',
            async: false,
            data: {
                yzm: $('#txtSmsCode12').val(),
                name: $('#txtName2').val(),
                phone: $('#txtPhone2').val(),
                url: window.location.href,
                sourceUrl: $('input[name=referr]').val(),
                _token: $('#_token').val()
            },
            success: function (data) {
                //console.log(data);
                if (data == 101) {
                    alert('手机验证码不正确');
                } else if (data == 102) {
                    alert('手机验证码已失效');
                } else if (data == 103) {
                    alert('手机验证码不能为空');
                } else if (data == 104) {
                    alert('网络有延迟,请重试');
                } else if (data == 200) {
                    if (browserRedirect2()) {
                        window.location.href="../file/Samex_setup.exe";
                        //window.location.href = "../file/mt4setup.exe";
                    } else {
                        if(checkAnIos())
                        {
                            window.location.href="../file/nygj.apk";
                            //window.location.href="../file/metatrader4.apk";
                        }else{
                            window.location.href="../file/MetaTrader 4_4.0.1093.ipa";
                        }
                    }
                    //$(Form).css('display', 'none');
                    //$(mask).css('display', 'none');
                }
            }
        });
    });

    //验证码倒计时
    function invokeSettime2(obj)
    {
        //设定重复发送时间
        var countdown = 60;
        settime(obj);
        function settime(obj)
        {
            if(countdown == 0)
            {
                $(obj).attr("disabled",false);
                $(obj).val("获取验证码");
                countdown = 60;
                return;
            }else{
                $(obj).attr("disabled",true);
                $(obj).val("("+countdown+")s 重新发送");
                countdown--;
            }
            setTimeout(function() {
                    settime(obj) }
                ,1000);
        }
    }

    //判断访问设备
    function browserRedirect2() {
        var sUserAgent = navigator.userAgent.toLowerCase();
        var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
        var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
        var bIsMidp = sUserAgent.match(/midp/i) == "midp";
        var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
        var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
        var bIsAndroid = sUserAgent.match(/android/i) == "android";
        var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
        var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
        //document.writeln("您的浏览设备为：");
        if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
            return false; //手机端
        } else {
            return true; // pc端
        }
    }

    function checkAnIos()
    {
        var u = navigator.userAgent;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
        var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
        if(isAndroid){
            return true;
        }
        if(isiOS)
        {
            return false;
        }
    }

});