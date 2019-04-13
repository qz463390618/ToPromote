<?php
Route::domain('ww.hctz188.cn')->group(function () {
	//微信论坛推广微信1
    Route::get('lttg',function()
    {
        return view('cmsyuns.lttg.pc_3_1_wxtg');
    });
    //手机 微信论坛推广微信1
    Route::get('slttg',function()
    {
        return view('cmsyuns.lttg.sj_3_1_wxtg');
    });
    //亏损
    Route::get('kuisun',function()
    {
        return view('cmsyuns.kuisun.pc_3_2_kuisun');
    });
    //手机 亏损
    Route::get('skuisun',function()
    {
        return view('cmsyuns.kuisun.sj_3_2_kuisun');
    });
	
	
	
	//投资神器
    Route::get('/', function () {
        return view('cmsyuns.hqfx.pc_3_touzi');

    });
    //手机投资神器
    Route::get('mtouzi', function () {
        return view('cmsyuns.hqfx.sj_3_touzi');
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
    //信管家
    Route::get('xgj',function()
    {
        return view('cmsyuns.xgj.pc_xgj');
    });
    //手机 信管家
    Route::get('mxgj',function()
    {
        return view('cmsyuns.xgj.sj_3_xgj');
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
    //现货
    Route::get('sport',function()
    {
        return view('cmsyuns.the_sport.pc_xh');
    });
    //手机现货
    Route::get('msport',function()
    {
        return view('cmsyuns.the_sport.sj_3_xh');
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
    //金十数据
    Route::get('golden',function()
    {
        return view('cmsyuns.golden.pc_golden');
    });
    //手机 金十数据
    Route::get('sgolden',function()
    {
        return view('cmsyuns.golden.sj_3_golden');
    });
    //贵金属
    Route::get('metal',function()
    {
        return view('cmsyuns.metal.pc_3_metal');
    });
    //手机贵金属
    Route::get('smetal',function()
    {
        return view('cmsyuns.metal.sj_3_metal');
    });
    //大宗
    Route::get('bulk',function()
    {
        return view('cmsyuns.bulk.pc_dz');
    });
    //手机 大宗
    Route::get('sbulk',function()
    {
        return view('cmsyuns.bulk.sj_3_dz');
    });
    //财经日历
    Route::get('calendar',function()
    {
        return view('cmsyuns.calendar.pc_calendar');
    });
    //手机 财经日历
    Route::get('mcalendar',function()
    {
        return view('cmsyuns.calendar.sj_3_calendar');
    });
    //非农数据
    Route::get('nonfarm',function()
    {
        return view('cmsyuns.nonfarm.pc_nonfarm');
    });
    //手机非农数据
    Route::get('snonfarm',function()
    {
        return view('cmsyuns.nonfarm.sj_3_nonfarm');
    });
    //平台查询
    Route::get('platform',function()
    {
        return view('cmsyuns.platform.pc_platform');
    });
    //手机 平台查询
    Route::get('splatform',function()
    {
        return view('cmsyuns.platform.sj_3_platform');
    });
    //期货行情
    Route::get('futures',function()
    {
        return view('cmsyuns.futures.pc_3_futures');
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
    //外汇
    Route::get('forex',function()
    {
        return view('cmsyuns.forex.pc_forex');
    });
    //手机外汇
    Route::get('mforex',function()
    {
        return view('cmsyuns.forex.sj_forex');
    });
    //交易侠
    Route::get('jyx',function()
    {
        return view('cmsyuns.jyx.pc_3_jyx');
    });
    //手机 交易侠
    Route::get('sjyx',function()
    {
        return view('cmsyuns.jyx.sj_3_jyx');
    });
    //快讯通
    Route::get('kxt',function()
    {
        return view('cmsyuns.kxt.pc_3_kxt');
    });
    //手机快讯通
    Route::get('skxt',function()
    {
        return view('cmsyuns.kxt.sj_3_kxt');
    });
    //汇通财经产品中心
    Route::get('htcj',function()
    {
        return view('cmsyuns.htcj.pc_3_htcj');
    });
    //手机 汇通财经产品中心
    Route::get('shtcj',function()
    {
        return view('cmsyuns.htcj.sj_3_htcj');
    });
    //大旗金融新手训练营
    Route::get('dqxs',function()
    {
        return view('cmsyuns.dqxs.pc_3_dqxs');
    });
    //手机 大旗金融新手训练营
    Route::get('sdqxs',function()
    {
        return view('cmsyuns.dqxs.sj_3_dqxs');
    });
    //恒信宣传页
    Route::get('hxxcy',function()
    {
        return view('cmsyuns.xcy.pc_3_xcy');
    });
    //和讯财经
    Route::get('hxcj',function()
    {
        return view('cmsyuns.hxcj.pc_3_hxcj');
    });
    //手机和讯财经
    Route::get('shxcj',function()
    {
        return view('cmsyuns.hxcj.sj_3_hxcj');
    });
    //金融界
    Route::get('jrj',function()
    {
        return view('cmsyuns.jrj.pc_3_jrj');
    });
    //手机 金融界
    Route::get('sjrj',function()
    {
        return view('cmsyuns.jrj.sj_jrj');
    });
    //东方财富
    Route::get('dfcf',function()
    {
        return view('cmsyuns.dfcf.pc_3_dfcf');
    });
    //手机 东方财富
    Route::get('sdfcf',function()
    {
        return view('cmsyuns.dfcf.sj_3_dfcf');
    });
    //金大师
    Route::get('jds',function()
    {
        return view('cmsyuns.jds.pc_3_jds');
    });
    //手机 金大师
    Route::get('mjds',function()
    {
        return view('cmsyuns.jds.sj_3_jds');
    });
    
    //微信推广页1
    Route::get('wxtg1',function()
    {
        return view('cmsyuns.wxtg.pc_3_1_wxtg');
    });
    //手机微信推广页1
    Route::get('swxtg1',function()
    {
        return view('cmsyuns.wxtg.sj_3_1_wxtg');
    });
    //微信推广页2
    Route::get('wxtg2',function()
    {
        return view('cmsyuns.wxtg.pc_3_2_wxtg');
    });
    //手机微信推广页2
    Route::get('swxtg2',function()
    {
        return view('cmsyuns.wxtg.sj_3_2_wxtg');
    });
	
	//微信爆好股
	Route::get('wxbh',function()
    {
        return view('cmsyuns.wxbh.pc_wxbh');
    });
    //微信爆好股-2
    Route::get('wxbht',function()
    {
        return view('cmsyuns.wxbh.pc_wxbht');
    });
    //股票新星
    Route::get('gpxx',function()
    {
        return view('cmsyuns.gpxx.pc_gpxx');
    });
    //手机智能行情交易系统
    Route::get('sznhq',function(){
        return view('cmsyuns.znhq.sj_znhq');
    });
    //新增-金十数据-pc
    Route::get('xjssj',function(){
        return view('cmsyuns.xjssj.xjssj');
    });
    //新增-金十数据-sj
    Route::get('sxjssj',function(){
        return view('cmsyuns.xjssj.sj_xjssj');
    });
    //新增-权威交易-pc
    Route::get('jiaoyi',function(){
        return view('cmsyuns.jiaoyi.pc_jiaoyi');
    });
    //新增-权威交易-sj
    Route::get('sjiaoyi',function(){
        return view('cmsyuns.jiaoyi.sj_jiaoyi');
    });
    //新增-2018投资神器-pc(investment投资)(未推广)
    Route::get('investment',function(){
        return view('cmsyuns.2018tz.pc_2018tz');
    });
    //新增-2018投资神器-sj(未推广)
    Route::get('sinvestment',function(){
        return view('cmsyuns.2018tz.sj_2018tz');
    });
    //80后股市奇才
    Route::get('gushi',function(){
        return view('cmsyuns.gushi.pc_gushi');
    });
    Route::get('gushit',function(){
        return view('cmsyuns.gushi.pct_gushi');
    });
    
    //响应式长江证劵-pc(未推广)
    Route::get('cjzj',function(){
        return view('cmsyuns.cjzj.cjzj');
    });
    //响应式长江证劵-手机(未推广)
    Route::get('scjzj',function(){
        return view('cmsyuns.cjzj.sj_cjzj');
    });
	//微信号beibi7879推广
	Route::get('beibi7879',function(){
        return view('cmsyuns.beibi7879.sj_beibi7879');
    });
    //微信号luhan61236推广
    Route::get('luhan61236',function(){
        return view('cmsyuns.beibi7879.sj_luhan61236');
    });
    //微信号pandakll推广
    Route::get('pandakll',function(){
        return view('cmsyuns.beibi7879.sj_pandakll');
    });
    //微信号shuaigirl147推广
    Route::get('shuaigirl147',function(){
        return view('cmsyuns.beibi7879.sj_shuaigirl147');
    });
	
});
