<?php

namespace App\Http\Middleware;

use Closure;

class CheckWechatAuthorize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (empty(wechat_user())) {
            $app = app('wechat.official_account');

            $oauth = $app->oauth;

            return $oauth->redirect();
        }

        return $next($request);
    }
}
