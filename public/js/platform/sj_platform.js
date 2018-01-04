$(function()
{
    $('#fl li').click(function () {
        $(this).addClass("active").siblings("li").removeClass("active");
    });
    $(function(){
        $(".dtcx .cont").myScroll({
            speed:20, //数值越大，速度越慢
            rowHeight:52 //li的高度
        });

        $(".ptbz .ptbz-cont").myScroll({
            speed:20, //数值越大，速度越慢
            rowHeight:152 //li的高度
        });
    });

    window.setInterval(SetRemainTime, 3000); //启动计时器，1秒执行一次
    function SetRemainTime() {
        var rnum = parseInt($('#rnum').html());
        var gnum = parseInt($('#gnum').html());
        var x = 12;
        var y = 1;
        var rand = parseInt(Math.random() * (x - y + 1) + y);
        $('#rnum').html(rnum + rand);
        $('#gnum').html(gnum + rand);
    }

    //点击关键词
    var keyWord = $('.am-checkbox em');

    $(keyWord).click(function()
    {
        console.log($(this));
        var tub = $(this).parent().find('i');
        if($(tub).hasClass('form-affirm-active'))
        {
            $(tub).removeClass('form-affirm-active');
        }else{
            $(tub).addClass('form-affirm-active');
        }
    });
    //获取方块
    var fangList = $('.am-checkbox span i');

    $(fangList).click(function()
    {
        if($(this).hasClass('form-affirm-active')){
            $(this).removeClass('form-affirm-active');
        }else{
            $(this).addClass('form-affirm-active');
        }
    });
});