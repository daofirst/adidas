<?php

Route::any('/', function () {
	dd('开发中...');
});

// 微信服务端认证
Route::any('/serve', 'WeChatController@serve');

// 设置公众号菜单
Route::any('/menus/create', 'WeChatController@createMenu');