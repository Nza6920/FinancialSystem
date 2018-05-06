<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class StaticPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showHelp()
    {
        return view('system.help');
    }

    public function showData()
    {
        return view('system.dataManage');
    }
}
