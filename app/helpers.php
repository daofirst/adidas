<?php

if (! function_exists('wechat_user')) {

    function wechat_user() {

        dd(session('wechat.oauth_user.default'));

        return session('wechat.oauth_user.default');

    }
}