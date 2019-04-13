<?php
Route::domain('ww.kfxiong.com.cn')->group(function () {
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
});