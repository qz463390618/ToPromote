$(function()
{
    //点击li 改变样式
    $('#fl li').click(function(){
        $(this).addClass('active').siblings('li').removeClass('active');
    });

    window.setInterval(SetRemaintime,3000);

    function SetRemaintime()
    {
        var rnum = parseInt($('#rnum').html());
        var gnum = parseInt($('#gnum').html());
        var x = 12;
        var y = 1;
        //console.log(rnum,gnum);
        var rand = parseInt(Math.random() * (x - y +1) +y);
        //console.log(rand);
        $('#rnum').html(rnum + rand);
        $('#gnum').html(gnum + rand);
        //console.log($('#rnum').html());
        //console.log($('#gnum').html());
    }
    //SetRemaintime();


    //点击关键词
    var keyWord = $('label');
    //console.log(keyWord);
    $(keyWord).click(function()
    {
        var tub = $(this).find('i');
        if($(tub).hasClass('form-affirm-active'))
        {
            $(tub).removeClass('form-affirm-active');
        }else{
            $(tub).addClass('form-affirm-active');
        }
    });

    var data = [
        [
            ['137****4412','诚信外汇'],
            ['189****9012','admiral 外汇'],
            ['135****1370','金道贵金属'],
            ['131****6561','CompassFX'],
            ['189****1586','admiral 外汇'],
            ['188****8103','英国FCA'],
            ['130****6666','gts外汇'],
            ['189****2888','诚信外汇'],
            ['136****4130','XL外汇'],
            ['138****6026','iforex外汇']
        ],
        [
            ['131****0828','英国FCA'],
            ['158****6375','CMC Market'],
            ['138****4747','诚信外汇'],
            ['158****6375','ACY稀万'],
            ['130****0570','GLOR'],
            ['137****3673','东城国际'],
            ['130****4623','诚信外汇'],
            ['138****1308','温莎外汇'],
            ['159****9190','温莎外汇'],
            ['152****5555','英国FCA']
        ]
    ];

    function clientScroll()
    {

    }

    $(document).ready(function(){
        $('.dtcx .cont:even').addClass('lieven');
        $('.ptbz .ptbz-cont:even').addClass('lieven');
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

});

