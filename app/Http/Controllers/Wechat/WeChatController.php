<?php

namespace App\Http\Controllers\Wechat;

use Overtrue\Socialite\User;

class WeChatController extends Controller
{
    protected $app;

    public function __construct()
    {
        $this->app = app('wechat.official_account');
    }


    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        \Log::info('request arrived.');

        $response = $this->app->server->serve();

        return $response;
    }

    /**
     * 设置菜单
     */
    public function createMenu()
    {
        $buttons = [
            [
                "type" => "view",
                "name" => "立即报修",
                "url"  => url('/wechat/repairs/create')
            ],
            [
                "name"       => "订单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "维修进度",
                        "url"  => url('/wechat/repairs/list/in_progress')
                    ],
                    [
                        "type" => "view",
                        "name" => "已完成",
                        "url"  => url('/wechat/repairs/list/finish')
                    ],
                    [
                        "type" => "view",
                        "name" => "已取消",
                        "url" => url('/wechat/repairs/list/cancel')
                    ],
                ],
            ],
            [
                "type" => "view",
                "name" => "个人中心",
                "url"  => url('/wechat/person/center')
            ],
        ];

        $this->app->menu->create($buttons);
    }

    /**
     * 授权回调
     */
    public function authorizeCallback()
    {
        $oauth = $this->app->oauth;

        // 获取 OAuth 授权结果用户信息
        /** @var User $user */
        $user = $oauth->user();

        \Cache::put('wechat_user', $user->toArray(), 3600);

        logger('微信认证', $user->toArray());

        return redirect()->intended(url('/wechat'));
    }
}