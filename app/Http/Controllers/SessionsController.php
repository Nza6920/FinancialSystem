<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SessionRequest;
use Models\User;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
              'except' => ['logout']
        ]);
    }

    // 显示登陆界面
    public function showLogin()
    {
        return view('session.login');
    }

    // 登陆逻辑
    public function login(SessionRequest $request)
    {
        if (Auth::attempt(['name'=>'admin','password' => $request->password,])) {

            return redirect()->route('home.show')->with('success','欢迎回来!');
        } else {

            return redirect('login')->with('danger','密码错误');
        }
    }

    // 退出登陆
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success','您已成功退出');
    }

}
