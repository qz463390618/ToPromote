$(function()
{
    var aBtns = $('.dv_left a,.dv_right a');
    //console.log(aBtns);
    $(aBtns).click(function()
    {
        $(aBtns).each(function()
        {
            $(this).removeClass('cur');
        });
        $(this).addClass('cur');
        $('#slide').attr('src','http://img.zengwf.com/images/gold/imgc'+$(this).attr('idx')+'.png')
    });

});