<?php

namespace App\Http\Controllers\Wechat\Auth;

use App\Http\Controllers\Controller;
use App\Model\AdidasCustomerModel;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Mockery\Exception;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        dd(222);die;
        return view('wechat.auth.login');
    }

    public function username()
    {
        return 'user_name';
    }

    protected function guard()
    {
        return \Auth::guard('wechat');
    }


    /**
     * 登录验证
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required',
            'password' => 'required'
        ], [
            'user_name.required' => '必填',
            'password.required' => '必填'
        ]);

        try{
            $customer = AdidasCustomerModel::where([['user_name',$request->get('username')],['password',$request->get('password')]])->first();
            \Auth::guard('wechat')->login($customer);
            $user = \Auth::guard('wechat')->user();
            if($request->ajax()){
                return response()->json([
                    'code' => 200,
                    'message' => '登录成功',
                    'data' => $user
                ])  ;
            }
        }

        catch (\Exception $exception){
            return response()->json([
                'code' => 100,
                'message' => '失败'
            ]);
        }
    }
}
