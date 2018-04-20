<?php

if (! function_exists('wechat_user')) {

    function wechat_user() {

        return request()->cookie('wechat_user');

    }
}