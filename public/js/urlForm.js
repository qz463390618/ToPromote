/**
 * Created by Administrator on 2017/11/1 0001.
 */

$(function()
{
    //获取遮罩层和表单元素
    var mask = $('#layui-layer-shade3');
    var Form = $('#layui-layer3');

//获取关闭按钮
    var closeBtn = $('.layui-layer-close');
    $(closeBtn).click(function()
    {
        $(mask).css('display','none');
        $(Form).css('display','none');
    });

//获取发送验证码按钮
    var btnYzm = $('#btnYzm1');
    $(btnYzm).click(function()
    {

        //获取姓名表单和手机号表单
        var userName = $('#txtName1');
        var userPhone = $('#txtPhone1');

        if($(userPhone).val() == '')
        {
            alert('请填写手机号');
            return false;
        }

        if($(userName).val() == '')
        {
            alert('请填写姓名');
            return false;
        }
        //写手机正则
        var phone_preg = /^1[34578]\d{9}$/;
        if(phone_preg.test($(userPhone).val()))
        {
            //匹配到正确手机号
            //console.log($(userPhone).val());
            $.ajax({
                url:'/send',
                async:false,
                type:'post',
                data:{
                    phone:$(userPhone).val(),
                    _token:$('#_token').val()
                },
                success:function(data,textStatus,jqXHR)
                {
                    if(data != 400)
                    {
                        //console.log($('#source').val());
                        //console.log($('#keyword').val());
                        alert('验证码发送成功');
                        invokeSettime(btnYzm);
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
                        invokeSettime(btnYzm);
                    }


                }
            });

        }else{
            alert('请填写正确的手机号');
        }
    });


//获取下载按钮
    var btnXz = $('#btn-submit');
    $(btnXz).click(function()
    {
        $.ajax({
            url:'/addClient',
            type:'post',
            async:false,
            data:{
                yzm:$('#txtSmsCode1').val(),
                name:$('#txtName1').val(),
                phone:$('#txtPhone1').val(),
                url:window.location.href,
                sourceUrl : $('input[name=referr]').val(),
                _token:$('#_token').val()
            },
            success:function(data)
            {
                //console.log(data);
                if(data == 101)
                {
                    alert('手机验证码不正确');
                }else if(data == 102)
                {
                    alert('手机验证码已失效');
                }else if(data == 103)
                {
                    alert('手机验证码不能为空');
                }else if(data == 104)
                {
                    alert('网络有延迟,请重试');
                }else if(data == 200)
                {
                    if(browserRedirect())
                    {
                        window.location.href="https://register.fxbtg-bank.com/custom/zAbENf";
                    }else{
                        window.location.href="https://register.fxbtg-bank.com/custom/zAbENf";
                    }
                    $(Form).css('display','none');
                    $(mask).css('display','none');
                }
            }
        });

        /*//获取保存下来的验证码
        var Syzm = $('#smsCodel').val();
        //获取用户输入的验证码
        var Yyzm = $('#txtSmsCode1').val();
        //console.log(Syzm,Yyzm);
        if(Syzm != Yyzm)
        {
            alert('手机验证码不正确');
        }else{
            $.ajax({
                url:'/addClient',
                type:'post',
                async:false,
                data:{
                    name:$('#txtName1').val(),
                    phone:$('#txtPhone1').val(),
                    url:window.location.href,
                    sourceUrl : $('input[name=referr]').val(),
                    _token:$('#_token').val()
                },
                success:function(data)
                {
                    //console.log(data);
                    if(data == 200)
                    {
                        if(browserRedirect())
                        {
                            window.location.href="../file/mt4setup.exe";
                        }else{
                            window.location.href="../file/metatrader4.apk";
                        }
                        $(Form).css('display','none');
                        $(mask).css('display','none');
                    }
                }
            });
        }*/
    });
//验证码倒计时
    function invokeSettime(obj)
    {

        //设定重复发送时间
        var countdown = 60;
        settime(obj);
        function settime(obj)
        {
            if(countdown == 0)
            {
                $(obj).attr("disabled",false);
                $(obj).text("免费获取验证码");
                countdown = 60;
                return;
            }else{
                $(obj).attr("disabled",true);
                $(obj).text("("+countdown+")s 重新发送");
                countdown--;
            }
            setTimeout(function() {
                    settime(obj) }
                ,1000);
        }
    }


    //判断访问设备
    function browserRedirect() {
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
    //获取当前页面的url
    //var url = window.location.href;
    //console.log(url);
});
