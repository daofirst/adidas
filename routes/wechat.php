<?php

// 微信服务端认证
Route::any('/serve', 'WeChatController@serve');

// 设置公众号菜单
Route::any('/menus/create', 'WeChatController@createMenu');

// 微信网页用户授权回调
Route::any('/authorize_callback', 'WeChatController@authorizeCallback');

/*
 * 中间件: 微信用户账号公众号授权, ...系统用户登录
 */
//Route::group(['middleware' => 'wechat.oauth'], function () {

    // 个人中心
    Route::get('/person/center', 'PersonController@index');

    Route::any('/', 'PersonController@index');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
//});