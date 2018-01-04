/**
 * Created by Administrator on 2017/11/29 0029.
 */
$(function()
{
    var aBtns = $('.dv_left a,.dv_right a');
    //console.log(aBtns);
    $(aBtns).mouseover(function()
    {
        $(aBtns).each(function()
        {
            $(this).removeClass('cur');
        });
        $(this).addClass('cur');
        $('#slide').attr('src','http://img.zengwf.com/images/gold/imgc'+$(this).attr('idx')+'.png')
    });

});