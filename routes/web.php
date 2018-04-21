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

Route::get('/', function () {
    dd('测试GitHub001');
    return view('welcome');
});

Route::any('github/update', ['middleware' => 'web', 'uses' => 'GitHubController@gitHubUpdate']);