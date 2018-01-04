$(function()
{
    $('.two-left>img:eq(2)').addClass('two-left-3');
    $('.two-left>img:eq(3)').addClass('two-left-4');
    $('.two-left>img:eq(4)').addClass('two-left-5');
    $('.two-right').addClass('two-r');
    $('.b-1').addClass('one-right-2');
    $('.b-2').addClass('one-right-2');

    $('.three-left').removeClass('three-l');
    $('.three-right>img:eq(2)').removeClass('three-right-3');
    $('.three-right>img:eq(3)').removeClass('three-right-4');
    $('.three-right>img:eq(4)').removeClass('three-right-5');

    $('.four-left>img:eq(1)').removeClass('four-left-2');
    $('.four-left>img:eq(2)').removeClass('four-left-3');
    $('.four-right').removeClass('four-right');

    function checkIf()
    {
        var aList = $('#fp-nav li a');
        var a = $(aList[0]).hasClass('active');
        var b = $(aList[1]).hasClass('active');
        var c = $(aList[2]).hasClass('active');
        if ( a == true ) {
            $('.two-left>img:eq(2)').addClass('two-left-3');
            $('.two-left>img:eq(3)').addClass('two-left-4');
            $('.two-left>img:eq(4)').addClass('two-left-5');
            $('.two-right').addClass('two-r');
            $('.b-1').addClass('one-right-2');
            $('.b-2').addClass('one-right-2');

            $('.three-left').removeClass('three-l');
            $('.three-right>img:eq(2)').removeClass('three-right-3');
            $('.three-right>img:eq(3)').removeClass('three-right-4');
            $('.three-right>img:eq(4)').removeClass('three-right-5');

            $('.four-left>img:eq(1)').removeClass('four-left-2');
            $('.four-left>img:eq(2)').removeClass('four-left-3');
            $('.four-right').removeClass('four-right');

        }
        else if ( b == true ){
            $('.three-left').addClass('three-l');
            $('.three-right>img:eq(2)').addClass('three-right-3');
            $('.three-right>img:eq(3)').addClass('three-right-4');
            $('.three-right>img:eq(4)').addClass('three-right-5');

            $('.two-left>img:eq(2)').removeClass('two-left-3');
            $('.two-left>img:eq(3)').removeClass('two-left-4');
            $('.two-left>img:eq(4)').removeClass('two-left-5');
            $('.two-right').removeClass('two-r');
            $('.b-1').removeClass('one-right-2');
            $('.b-2').removeClass('one-right-2');

            $('.four-left>img:eq(1)').removeClass('four-left-2');
            $('.four-left>img:eq(2)').removeClass('four-left-3');
            $('.four-right').removeClass('four-right');

        }
        else if ( c == true ){
            $('.four-left>img:eq(1)').addClass('four-left-2');
            $('.four-left>img:eq(2)').addClass('four-left-3');
            $('.four-right').addClass('four-right');

            $('.two-left>img:eq(2)').removeClass('two-left-3');
            $('.two-left>img:eq(3)').removeClass('two-left-4');
            $('.two-left>img:eq(4)').removeClass('two-left-5');
            $('.two-right').removeClass('two-r');
            $('.b-1').removeClass('one-right-2');
            $('.b-2').removeClass('one-right-2');

            $('.three-left').removeClass('three-l');
            $('.three-right>img:eq(2)').removeClass('three-right-3');
            $('.three-right>img:eq(3)').removeClass('three-right-4');
            $('.three-right>img:eq(4)').removeClass('three-right-5');
        }

    }

    document.body.onmousewheel = function()
    {
        checkIf();
    }
    var aLists = $('#fp-nav li a');
    $(aLists).click(function()
    {
        var aList = $('#fp-nav li a');
        //console.log(aList)
        var a = $(aList[0]).hasClass('active');
        var b = $(aList[1]).hasClass('active');
        var c = $(aList[2]).hasClass('active');
        //console.log(a,b,c);
        //console.log(this);
        var abc = this;
        var mark = 0;
        $(aList).each(function()
        {

            if(abc == this)
            {
                return false;
            }
            mark += 1;
        });
        if ( mark == 0 ) {
            $('.two-left>img:eq(2)').addClass('two-left-3');
            $('.two-left>img:eq(3)').addClass('two-left-4');
            $('.two-left>img:eq(4)').addClass('two-left-5');
            $('.two-right').addClass('two-r');
            $('.b-1').addClass('one-right-2');
            $('.b-2').addClass('one-right-2');

            $('.three-left').removeClass('three-l');
            $('.three-right>img:eq(2)').removeClass('three-right-3');
            $('.three-right>img:eq(3)').removeClass('three-right-4');
            $('.three-right>img:eq(4)').removeClass('three-right-5');

            $('.four-left>img:eq(1)').removeClass('four-left-2');
            $('.four-left>img:eq(2)').removeClass('four-left-3');
            $('.four-right').removeClass('four-right');

        }
        else if (mark == 1 ){
            $('.three-left').addClass('three-l');
            $('.three-right>img:eq(2)').addClass('three-right-3');
            $('.three-right>img:eq(3)').addClass('three-right-4');
            $('.three-right>img:eq(4)').addClass('three-right-5');

            $('.two-left>img:eq(2)').removeClass('two-left-3');
            $('.two-left>img:eq(3)').removeClass('two-left-4');
            $('.two-left>img:eq(4)').removeClass('two-left-5');
            $('.two-right').removeClass('two-r');
            $('.b-1').removeClass('one-right-2');
            $('.b-2').removeClass('one-right-2');

            $('.four-left>img:eq(1)').removeClass('four-left-2');
            $('.four-left>img:eq(2)').removeClass('four-left-3');
            $('.four-right').removeClass('four-right');

        }
        else if ( mark == 2 ){
            $('.four-left>img:eq(1)').addClass('four-left-2');
            $('.four-left>img:eq(2)').addClass('four-left-3');
            $('.four-right').addClass('four-right');

            $('.two-left>img:eq(2)').removeClass('two-left-3');
            $('.two-left>img:eq(3)').removeClass('two-left-4');
            $('.two-left>img:eq(4)').removeClass('two-left-5');
            $('.two-right').removeClass('two-r');
            $('.b-1').removeClass('one-right-2');
            $('.b-2').removeClass('one-right-2');

            $('.three-left').removeClass('three-l');
            $('.three-right>img:eq(2)').removeClass('three-right-3');
            $('.three-right>img:eq(3)').removeClass('three-right-4');
            $('.three-right>img:eq(4)').removeClass('three-right-5');
        }
    });


    });

