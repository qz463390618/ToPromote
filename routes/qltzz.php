<?php
/**
 * 使用编辑器 PhpStorm.
 * 用户: 曾伟峰
 * 日期: 2017-12-06
 * 时间: 下午 3:04
 */

//360
//ww.qltzz.cn域名下的页面
Route::domain('ww.qltzz.cn')->group(function () {
    //投资神器
    Route::get('/', function () {
        //return view('touzi.pc_touzi');
        //return view('ntouzi.pc_3_touzi');
        return view('hqfx.pc_3_touzi');

    });
    //手机投资神器
    Route::get('mtouzi', function () {
        //return view('touzi.sj_touzi3');
        //return view('ntouzi.sj_3_touzi');
        //return view('hqfx.sj1_3_touzi');
        return view('hqfx.sj.sj_3_touzi');
    });
    //博易大师
    Route::get('boyi', function () {
        return view('boyi.pc_boyi');
    });
    //手机博易大师
    Route::get('mboyi',function()
    {
        return view('boyi.sj_boyi2');
    });
    //mt4
    Route::get('mt4',function()
    {
        return view('mt4.pc_mt4');
    });
    //手机mt4
    Route::get('smt4',function()
    {
        return view('mt4.sj_mt4');
    });
    //mt5
    Route::get('mt5',function()
    {
        return view('mt5.pc_mt5');
    });
    //手机mt5
    Route::get('smt5',function()
    {
        return view('mt5.sj_3_mt5');
    });
    //信管家
    Route::get('xgj',function()
    {
        return view('xgj.pc_xgj');
    });
    //手机 信管家
    Route::get('mxgj',function()
    {
        return view('xgj.sj_3_xgj');
    });
    //赢顺云
    Route::get('xsy',function()
    {
        return view('xsy.pc_xsy');
    });
    //手机 文化财经随身行
    Route::get('mssx',function()
    {
        return view('xsy.sj_ssx3');
    });
    //现货
    Route::get('sport',function()
    {
        return view('the_sport.pc_xh');
    });
    //手机现货
    Route::get('msport',function()
    {
        return view('the_sport.sj_3_xh');
    });
    //黄金白银
    Route::get('gold',function()
    {
        return view('gold.pc_gold');
    });
    //手机 黄金白银
    Route::get('mgold',function()
    {
        return view('gold.sj_3_gold');
    });
    //金十数据
    Route::get('golden',function()
    {
        return view('golden.pc_golden');
    });
    //手机 金十数据
    Route::get('sgolden',function()
    {
        return view('golden.sj_3_golden');
    });
    //贵金属
    Route::get('metal',function()
    {
        return view('nmetal.pc_3_metal');
    });
    //手机贵金属
    Route::get('smetal',function()
    {
        return view('nmetal.sj_3_metal');
    });
    //大宗
    Route::get('bulk',function()
    {
        return view('bulk.pc_dz');
    });
    //手机 大宗
    Route::get('sbulk',function()
    {
        return view('bulk.sj_3_dz');
    });
    //财经日历
    Route::get('calendar',function()
    {
        return view('calendar.pc_calendar');
    });
    //手机 财经日历
    Route::get('mcalendar',function()
    {
        return view('calendar.sj_3_calendar');
    });
    //非农数据
    Route::get('nonfarm',function()
    {
        return view('nonfarm.pc_nonfarm');
    });
    //手机非农数据
    Route::get('snonfarm',function()
    {
        return view('nonfarm.sj_3_nonfarm');
    });
    //平台查询
    Route::get('platform',function()
    {
        return view('platform.pc_platform');
    });
    //手机 平台查询
    Route::get('splatform',function()
    {
        return view('platform.sj_3_platform');
    });
    //期货行情
    Route::get('futures',function()
    {
        return view('nfutures.pc_3_futures');
    });
    //手机期货行情
    Route::get('mfutures',function()
    {
        return view('futures.sj_futures2');
    });
    //外汇
    Route::get('forex',function()
    {
        return view('forex.pc_forex');
    });
    //手机外汇
    Route::get('mforex',function()
    {
        return view('forex.sj_forex1');
    });
    //交易侠
    Route::get('jyx',function()
    {
        return view('jyx.pc_3_jyx');
    });
    //手机 交易侠
    Route::get('sjyx',function()
    {
        return view('jyx.sj_3_jyx');
    });
    //快讯通
    Route::get('kxt',function()
    {
        return view('kxt.pc_3_kxt');
    });
    //手机快讯通
    Route::get('skxt',function()
    {
        return view('kxt.sj_3_kxt');
    });
    //汇通财经产品中心
    Route::get('htcj',function()
    {
        return view('htcj.pc_3_htcj');
    });
    //手机 汇通财经产品中心
    Route::get('shtcj',function()
    {
        return view('htcj.sj_3_htcj');
    });
    //人工智能炒股软件
    Route::get('zncg',function()
    {
        return view('zncg.pc_3_zncg');
    });
    //手机 人工智能炒股软件
    Route::get('mzncg',function()
    {
        return view('zncg.sj_3_zncg');
    });
    //大旗金融新手训练营
    Route::get('dqxs',function()
    {
        return view('dqxs.pc_3_dqxs');
    });
    //手机 大旗金融新手训练营
    Route::get('sdqxs',function()
    {
        return view('dqxs.sj_3_dqxs');
    });
    //恒信宣传页
    Route::get('hxxcy',function()
    {
        return view('xcy.pc_3_xcy');
    });
    //和讯财经
    Route::get('hxcj',function()
    {
        return view('hxcj.pc_3_hxcj');
    });
    //手机和讯财经
    Route::get('shxcj',function()
    {
        return view('hxcj.sj_3_hxcj');
    });
    //金融界
    Route::get('jrj',function()
    {
        return view('jrj.pc_3_jrj');
    });
    //手机 金融界
    Route::get('sjrj',function()
    {
        return view('jrj.sj_3_jrj');
    });
    //东方财富
    Route::get('dfcf',function()
    {
        return view('dfcf.pc_3_dfcf');
    });
    //手机东方财富
    Route::get('sdfcf',function()
    {
        return view('dfcf.sj_3_dfcf');
    });
    //金大师
    Route::get('jds',function()
    {
        return view('jds.pc_3_jds');
    });
    //手机 金大师
    Route::get('mjds',function()
    {
        return view('jds.sj_3_jds');
    });
    //财联社
    Route::get('cls',function()
    {
        return view('cls.pc_3_cls');
    });
    //手机 财联社
    Route::get('mcls',function()
    {
        return view('cls.sj_3_cls');
    });

    //微信推广页1
    Route::get('wxtg1',function()
    {
        return view('wxtg.pc_3_1_wxtg');
    });
    //手机微信推广页1
    Route::get('swxtg1',function()
    {
        return view('wxtg.sj_3_1_wxtg');
    });
    //微信推广页2
    Route::get('wxtg2',function()
    {
        return view('wxtg.pc_3_2_wxtg');
    });
    //手机微信推广页2
    Route::get('swxtg2',function()
    {
        return view('wxtg.sj_3_2_wxtg');
    });







    //测试页面
    Route::get('zlq',function()
    {
        return view('test.test_dfcf_3_sj');
    });
    //测试页面2
    Route::get('zwf',function()
    {
        return view('test.test_s_touzi1');
    });

});