<?php
/**
 * 使用编辑器 PhpStorm.
 * 用户: 曾伟峰
 * 日期: 2017-12-06
 * 时间: 下午 3:13
 */
//神马
//ww.haodai01.com域名下的页面
Route::domain('ww.haodai01.com')->group(function () {
    //文化财经随身行
    /*Route::get('/',function()
    {
        return view('xsy.sj_ssx2');
    });*/
    Route::get('ssx',function()
    {
        return view('xsy.sj_ssx2');
        //return view('mt4.sj_mt42');
    });
    //手机博易大师
    Route::get('mboyi',function()
    {
        return view('boyi.sj_boyi');
        //return view('mt4.sj_mt42');
    });
    //手机投资神器
    Route::get('/', function () {
        //return view('touzi.sj_touzi2');
        //return view('mt4.sj_mt42');
        //return view('ntouzi.sj_m_touzi');
        //return view('hqfx.sj1_m_touzi');
        return view('hqfx.sj.sj_m_touzi');
    });
    //手机期货行情
    Route::get('mfutures',function()
    {
        return view('futures.sj_futures2');
        //return view('mt4.sj_mt42');
    });
    //手机外汇
    Route::get('mforex',function()
    {
        return view('forex.sj_forex');
        //return view('mt4.sj_mt42');
    });
    //手机mt4
    Route::get('smt4',function()
    {
        return view('mt4.sj_mt42');
    });
    //手机mt5
    Route::get('smt5',function()
    {
        return view('mt5.sj_m_mt5');
        //return view('mt4.sj_mt42');
    });
    //手机 黄金白银
    Route::get('mgold',function()
    {
        return view('gold.sj_m_gold');
        //return view('mt4.sj_mt42');
    });
    //手机贵金属
    Route::get('smetal',function()
    {
        return view('nmetal.sj_m_metal');
        //return view('mt4.sj_mt42');
    });
    //手机现货
    Route::get('msport',function()
    {
        return view('the_sport.sj_m_xh');
        //return view('mt4.sj_mt42');
    });
    //手机 金十数据
    Route::get('sgolden',function()
    {
        return view('golden.sj_m_golden');
        //return view('mt4.sj_mt42');
    });
    //手机 大宗
    Route::get('sbulk',function()
    {
        return view('bulk.sj_m_dz');
        //return view('mt4.sj_mt42');
    });
    //手机非农数据
    Route::get('snonfarm',function()
    {
        return view('nonfarm.sj_m_nonfarm');
        //return view('mt4.sj_mt42');
    });
    //手机 财经日历
    Route::get('mcalendar',function()
    {
        return view('calendar.sj_m_calendar');
        //return view('mt4.sj_mt42');
    });
    //手机 信管家
    Route::get('mxgj',function()
    {
        return view('xgj.sj_m_xgj');
        //return view('mt4.sj_mt42');
    });
    //手机 平台查询
    Route::get('splatform',function()
    {
        return view('platform.sj_m_platform');
        //return view('mt4.sj_mt42');
    });
    //手机 交易侠
    Route::get('sjyx',function()
    {
        return view('jyx.sj_m_jyx');
        //return view('mt4.sj_mt42');
    });
    //手机 汇通财经产品中心
    Route::get('shtcj',function()
    {
        return view('htcj.sj_m_htcj');
        //return view('mt4.sj_mt42');
    });
    //手机快讯通
    Route::get('skxt',function()
    {
        return view('kxt.sj_m_kxt');
        //return view('mt4.sj_mt42');
    });
    //手机 人工智能炒股软件
    Route::get('mzncg',function()
    {
        return view('zncg.sj_m_zncg');
        //return view('mt4.sj_mt42');
    });
    //手机 大旗金融新手训练营
    Route::get('sdqxs',function()
    {
        return view('dqxs.sj_3_dqxs');
    });
    //手机和讯财经
    Route::get('shxcj',function()
    {
        return view('hxcj.sj_m_hxcj');
    });
    //手机 金融界
    Route::get('sjrj',function()
    {
        return view('jrj.sj_3_jrj');
    });
    //手机东方财富
    Route::get('sdfcf',function()
    {
        return view('dfcf.sj_m_dfcf');
    });
    //手机 金大师
    Route::get('mjds',function()
    {
        return view('jds.sj_m_jds');
    });
    //手机 财联社
    Route::get('mcls',function()
    {
        return view('cls.sj_m_cls');
    });
});