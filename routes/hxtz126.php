<?php
/**
 * 使用编辑器 PhpStorm.
 * 用户: 曾伟峰
 * 日期: 2017-12-06
 * 时间: 下午 3:09
 */
Route::domain('ww.hxtz126.cn')->group(function () {
    //投资神器
    Route::get('touzi', function () {
        //return view('touzi.pc_touzi1');
        //return view('ntouzi.pc_s_touzi');
        return view('hqfx.pc_s_touzi');
    });
    //手机投资神器
    Route::get('mtouzi', function () {
        //return view('touzi.sj_touzi');
        //return view('ntouzi.sj_s_touzi');
        //return view('hqfx.sj1_s_touzi');
        return view('hqfx.sj.sj_s_touzi');
    });
    //博易大师
    Route::get('/', function () {
        return view('boyi.pc_boyi1');
    });
    //手机博易大师
    Route::get('mboyi',function()
    {
        return view('boyi.sj_boyi3');
    });
    //mt4
    Route::get('mt4',function()
    {
        return view('mt4.pc_mt41');
    });
    //手机mt4
    Route::get('smt4',function()
    {
        return view('mt4.sj_mt41');
    });
    //mt5
    Route::get('mt5',function()
    {
        return view('mt5.pc_mt51');
    });
    //手机mt5
    Route::get('smt5',function()
    {
        return view('mt5.sj_s_mt5');
    });
    //信管家
    Route::get('xgj',function()
    {
        return view('xgj.pc_xgj1');
    });
    //手机 信管家
    Route::get('mxgj',function()
    {
        return view('xgj.sj_s_xgj');
    });
    //赢顺云
    Route::get('xsy',function()
    {
        return view('xsy.pc_xsy1');
    });
    //文化财经随身行
    Route::get('mssx',function()
    {
        return view('xsy.sj_ssx');
    });
    //现货
    Route::get('sport',function()
    {
        return view('the_sport.pc_xh1');
    });
    //手机现货
    Route::get('msport',function()
    {
        return view('the_sport.sj_s_xh');
    });
    //黄金白银
    Route::get('gold',function()
    {
        return view('gold.pc_gold1');
    });
    //手机 黄金白银
    Route::get('mgold',function()
    {
        return view('gold.sj_s_gold');
    });
    //金十数据
    Route::get('golden',function()
    {
        return view('golden.pc_golden1');
    });
    //手机 金十数据
    Route::get('sgolden',function()
    {
        return view('golden.sj_s_golden');
    });
    //贵金属
    Route::get('metal',function()
    {
        return view('nmetal.pc_s_metal');
    });
    //手机贵金属
    Route::get('smetal',function()
    {
        return view('nmetal.sj_s_metal');
    });
    //大宗
    Route::get('bulk',function()
    {
        return view('bulk.pc_dz1');
    });
    //手机 大宗
    Route::get('sbulk',function()
    {
        return view('bulk.sj_s_dz1');
    });
    //财经日历
    Route::get('calendar',function()
    {
        return view('calendar.pc_calendar1');
    });
    //手机 财经日历
    Route::get('mcalendar',function()
    {
        return view('calendar.sj_s_calendar');
    });
    //非农数据
    Route::get('nonfarm',function()
    {
        return view('nonfarm.pc_nonfarm1');
    });
    //手机非农数据
    Route::get('snonfarm',function()
    {
        return view('nonfarm.sj_s_nonfarm');
    });
    //期货行情
    Route::get('futures',function()
    {
        return view('nfutures.pc_s_futures');
    });
    //手机期货行情
    Route::get('mfutures',function()
    {
        return view('futures.sj_futures');
    });
    //外汇
    Route::get('forex',function()
    {
        return view('forex.pc_forex');
    });
    //手机外汇
    Route::get('mforex',function()
    {
        return view('forex.sj_forex2');
    });
    //平台查询
    Route::get('platform',function()
    {
        return view('platform.pc_s_platform');
    });
    //手机 平台查询
    Route::get('splatform',function()
    {
        return view('platform.sj_s_platform');
    });
    //交易侠
    Route::get('jyx',function()
    {
        return view('jyx.pc_s_jyx');
    });
    //手机 交易侠
    Route::get('sjyx',function()
    {
        return view('jyx.sj_s_jyx');
    });
    //快讯通
    Route::get('kxt',function()
    {
        return view('kxt.pc_s_kxt');
    });
    //手机快讯通
    Route::get('skxt',function()
    {
        return view('kxt.sj_s_kxt');
    });
    //汇通财经产品中心
    Route::get('htcj',function()
    {
        return view('htcj.pc_s_htcj');
    });
    //手机 汇通财经产品中心
    Route::get('shtcj',function()
    {
        return view('htcj.sj_s_htcj');
    });
    //人工智能炒股软件
    Route::get('zncg',function()
    {
        return view('zncg.pc_s_zncg');
    });
    //手机 人工智能炒股软件
    Route::get('mzncg',function()
    {
        return view('zncg.sj_s_zncg');
    });
    //大旗金融新手训练营
    Route::get('dqxs',function()
    {
        return view('dqxs.pc_s_dqxs');
    });
    //手机 大旗金融新手训练营
    Route::get('sdqxs',function()
    {
        return view('dqxs.sj_s_dqxs');
    });
    //恒信宣传页
    Route::get('hxxcy',function()
    {
        return view('xcy.pc_s_xcy');
    });
    //和讯财经
    Route::get('hxcj',function()
    {
        return view('hxcj.pc_s_hxcj');
    });
    //手机和讯财经
    Route::get('shxcj',function()
    {
        return view('hxcj.sj_s_hxcj');
    });
    //金融界
    Route::get('jrj',function()
    {
        return view('jrj.pc_s_jrj');
    });
    //手机 金融界
    Route::get('sjrj',function()
    {
        return view('jrj.sj_s_jrj');
    });
    //东方财富
    Route::get('dfcf',function()
    {
        return view('dfcf.pc_s_dfcf');
    });
    //手机东方财富
    Route::get('sdfcf',function()
    {
        return view('dfcf.sj_s_dfcf');
    });
    //金大师
    Route::get('jds',function()
    {
        return view('jds.pc_s_jds');
    });
    //手机 金大师
    Route::get('mjds',function()
    {
        return view('jds.sj_s_jds');
    });
    //财联社
    Route::get('cls',function()
    {
        return view('cls.pc_s_cls');
    });
    //手机 财联社
    Route::get('mcls',function()
    {
        return view('cls.sj_s_cls');
    });
});