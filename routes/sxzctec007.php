<?php
Route::domain('ww.sxzctec007.cn')->group(function () {

	//投资神器
    Route::get('/', function () {
        return view('cmsyuns.hqfx.pc_3_touzi');

    });
	    // 宏伟商城谢
    Route::get('hongwei',function()
    {
        return view('hongwei.pc_hongwei');
    });
	    // 宏伟商城楼总
    Route::get('hongweilz',function()
    {
        return view('hongwei.pc_hongweilz');
    });
	    // 宏伟商城谢召聪
    Route::get('hongweixzc',function()
    {
        return view('hongwei.pc_hongweixzc');
    });
	    // 宏伟商城徐凯
    Route::get('hongweixk',function()
    {
        return view('hongwei.pc_hongweixk');
    });
        // 手机——宏伟商城谢
    Route::get('shongwei',function()
    {
        return view('hongwei.sj_hongwei');
    });
    // 手机——宏伟商城楼总
    Route::get('shongweilz',function()
    {
        return view('hongwei.sj_hongweilz');
    });
    // 手机——宏伟商城谢召聪
    Route::get('shongweixzc',function()
    {
        return view('hongwei.sj_hongweixzc');
    });
    // 手机——宏伟商城徐凯
    Route::get('shongweixk',function()
    {
        return view('hongwei.sj_hongweixk');
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
	//赢顺云
    Route::get('xsy',function()
    {
        return view('cmsyuns.ysy.pc_xsy');
    });
    //手机 文化财经随身行
    Route::get('mssx',function()
    {
        return view('cmsyuns.ysy.sj_ssx');
    });
    //黄金白银
    Route::get('gold',function()
    {
        return view('cmsyuns.gold.pc_gold');
    });
    //手机 黄金白银
    Route::get('mgold',function()
    {
        return view('cmsyuns.gold.sj_3_gold');
    });
    //手机投资神器
    Route::get('mtouzi', function () {
        return view('cmsyuns.hqfx.sj_3_touzi');
    });
    // 股市下跌
    Route::get('guoshixd',function()
    {
        return view('cmsyuns.guoshixd.pc_guoshixd');
    });
    // 手机股市下跌
    Route::get('sjguoshixd',function()
    {
        return view('cmsyuns.guoshixd.sj_guoshixd');
    });
});

