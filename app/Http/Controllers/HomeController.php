<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        // 只允许登陆用户访问
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        $user = Auth::user();
        return view('system.home',compact('user'));
    }
}
