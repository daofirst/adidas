<?php

if (! function_exists('wechat_user')) {

    function wechat_user() {

        dd(env('APP_ENV') );
        if (env('APP_ENV') == 'local') {

            $TestData = [
                'id' => 'oK4b2wocWmsU6kk3hUYXbo03OTC0',
                'name' => '随风',
                'nickname' =>'随风',
                'avatar' => 'http://thirdwx.qlogo.cn/mmopen/vi_32/VtdPCejSfSl8Jrf54FrN8TiatqHuicaFcWYWIibOk5JuaBEHswIofblH0txyMKHXXZgcyC46ibCygps7Iywx58SniaA/132',
                'email' => null,
                'original' => [
                    "openid" => "oK4b2wocWmsU6kk3hUYXbo03OTC0",
                    "nickname" => "随风",
                    "sex" => 1,
                    "language" => "zh_CN",
                    "city" => "宿迁",
                    "province" => "江苏",
                    "country" => "中国",
                    "headimgurl" => "http://thirdwx.qlogo.cn/mmopen/vi_32/VtdPCejSfSl8Jrf54FrN8TiatqHuicaFcWYWIibOk5JuaBEHswIofblH0txyMKHXXZgcyC46ibCygps7Iywx58SniaA/132",
                    "privilege" => [],
                ],
                'token' =>[
                    "access_token" => "9_N4kjCd9OPqx0JoV93BkBBNE6jhu5eOwpv-LVMR8JzKHTUugLJ3dWrVZkxO2bju5Abq06WKvbsyf1nLQF06TpDg",
                    "expires_in" => 7200,
                    "refresh_token" => "9_2ZEMvhDCMw14A2gho-nGt1vyUB-ipqK_m5QXvNpOvLxS-l2hku4c3BRY7skCfdfveQA2GcleAEw-eDCB_xyUtg",
                    "openid" => "oK4b2wocWmsU6kk3hUYXbo03OTC0",
                    "scope" => "snsapi_userinfo",
                ],
                "provider" => "WeChat"
            ];

            return collect($TestData);

        }

        return session('wechat.oauth_user.default');

    }
}