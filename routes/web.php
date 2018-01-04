<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//神马
//ww.haodai01.com域名下的页面


//后台
Route::group(['prefix' => 'admin'],function()
{
    Route::get('login',function()
    {
        return view('admin1.login');
    });
    Route::post('doLogin','admin\UserController@doLogin');
    Route::get('logout','admin\UserController@logout');
    Route::get('/','admin\UserController@index');
    Route::get('test','admin\UserController@test');
    Route::get('all','admin\UserController@all');
    Route::get('search','admin\ClientController@search');
    Route::post('delClient','admin\ClientController@delClient');
    Route::get('excel/export/{clients}','ExcelController@export');//导出
    Route::group(['prefix' => 'message'],function(){
        Route::get('/','admin\UrlMessageController@index');
        Route::get('addshow',function()
        {
            return view('admin1.trait.addMessage');
        });
        Route::post('addParameter','admin\UrlMessageController@addParameter');
        Route::post('del','admin\UrlMessageController@delParameter');
        Route::get('editShow/{id}','admin\UrlMessageController@editShow');
        Route::post('editMessage','admin\UrlMessageController@editMessage');
    });

});


Route::post('send','ClientController@sendAuthCode');//发送验证码
Route::post('addClient','ClientController@addClient');//添加数据库

