<?php

namespace App\Http\Controllers\Wechat;

class WeChatController extends Controller
{
    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        \Log::info('request arrived.');

        $app = app('wechat.official_account');

        $response = $app->server->serve();

        return $response;
    }

    /**
     * 设置菜单
     */
    public function createMenu()
    {
        $app = app('wechat.official_account');

        $buttons = [
            [
                "type" => "view",
                "name" => "立即报修",
                "url"  => url('/repairs/create')
            ],
            [
                "name"       => "订单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "维修进度",
                        "url"  => url('/repairs/list/in_progress')
                    ],
                    [
                        "type" => "view",
                        "name" => "已完成",
                        "url"  => url('/repairs/list/finish')
                    ],
                    [
                        "type" => "view",
                        "name" => "已取消",
                        "url" => url('/repairs/list/cancel')
                    ],
                ],
            ],
            [
                "type" => "view",
                "name" => "个人中心",
                "url"  => url('/person/center')
            ],
        ];

        $app->menu->create($buttons);
    }
}