<?php

if (! function_exists('wechat_user')) {

    function wechat_user() {

        return \Cache::get('wechat_user');

    }
}