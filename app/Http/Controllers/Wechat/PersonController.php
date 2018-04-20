<?php

namespace App\Http\Controllers\Wechat;

use Overtrue\Socialite\User;

class PersonController extends Controller
{
    protected $app;

    public function __construct()
    {
        $this->app = app('wechat.official_account');
    }

    /**
     * 个人中心
     */
    public function index()
    {

        $person = wechat_user()->toArray();

        return view('wechat/welcome', compact('person'));
    }
}