<?php
Route::domain('ww.sxzctec018.cn')->group(function () {
        //投资神器
    Route::get('/', function () {
        return view('cmsyuns.hqfx.pc_3_touzi');

    });
	    //博易大师
    Route::get('boyi', function () {
        return view('cmsyuns.boyi.pc_boyi');
    });
    //手机博易大师
    Route::get('mboyi',function()
    {
        return view('cmsyuns.boyi.sj_boyi');
    });
    //mt4
    Route::get('mt4',function()
    {
        return view('cmsyuns.mt4.pc_mt4');
    });
    //手机mt4
    Route::get('smt4',function()
    {
        return view('cmsyuns.mt4.sj_mt4');
    });
    //mt5
    Route::get('mt5',function()
    {
        return view('cmsyuns.mt5.pc_mt5');
    });
    //手机mt5
    Route::get('smt5',function()
    {
        return view('cmsyuns.mt5.sj_3_mt5');
    });
    //pc期货行情新添
    Route::get('pfutures',function()
    {
        return view('cmsyuns.futures.pc_qhxq');
    });
    //手机期货行情
    Route::get('mfutures',function()
    {
        return view('cmsyuns.futures.sj_futures');
    });
    //微信号pandakll小外汇推广
    Route::get('smallpandakll',function()
    {
        return view('cmsyuns.small_pandakll.small_pandakll');
    });
    //微信号luhan61236小外汇推广
    Route::get('smallluhan61236',function()
    {
        return view('cmsyuns.small_pandakll.small_luhan61236');
    });
    //微信号rs0135小外汇推广
    Route::get('smallrs0135',function()
    {
        return view('cmsyuns.small_pandakll.small_rs0135');
    });
    //微信号Liu44437小外汇推广
    Route::get('smallLiu44437',function()
    {
        return view('cmsyuns.small_pandakll.small_Liu44437');
    });
    //微信号jiao2580520小外汇推广
    Route::get('smalljiao2580520',function()
    {
        return view('cmsyuns.small_pandakll.small_jiao2580520');
    });
    //微信号chenhui199212小外汇推广
    Route::get('smallchenhui199212',function()
    {
        return view('cmsyuns.small_pandakll.small_chenhui199212');
    });
    //微信号CK600111小外汇推广
    Route::get('smallCK600111',function()
    {
        return view('cmsyuns.small_pandakll.small_CK600111');
    });
    //微信号chensq0712小外汇推广
    Route::get('smallchensq0712',function()
    {
        return view('cmsyuns.small_pandakll.small_chensq0712');
    });

});