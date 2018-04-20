<?php

if (! function_exists('wechat_user')) {

    function wechat_user() {

        return session('wechat.oauth_user.default');

    }
}