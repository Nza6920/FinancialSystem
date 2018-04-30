<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ResetPswController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 显示重置密码界面
    public function showResetPsw()
    {
        return view('session.resetPsw');
    }

    // 重置密码逻辑
    public function resetPsw(SessionRequest $request)
    {
        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();
        Auth::logout();
        return redirect('login')->with('message', '密码更新成功!');
    }
}
