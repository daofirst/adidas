<?php

// 微信服务端认证
Route::any('/serve', 'WeChatController@serve');

// 设置公众号菜单
Route::any('/menus/create', 'WeChatController@createMenu');

// 微信网页用户授权回调
Route::any('/authorize_callback', 'WeChatController@authorizeCallback');

Route::group(['middleware' => 'wechat.oauth'], function () {

    // 个人中心
    Route::get('/person/center', 'PersonController@index');

    Route::any('/', function () {
        dd(wechat_user());
    });
});