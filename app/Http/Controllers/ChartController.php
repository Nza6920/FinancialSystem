<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pay;
use App\Models\Income;

class ChartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showIncome(Income $income)
    {
        $dataList = [
            'wage'      => $income->where(['type'=>'工资'])->count(),
            'pluralism' => $income->where(['type'=>'兼职'])->count(),
            'dividend'  => $income->where(['type'=>'分红'])->count(),
            'prize'     => $income->where(['type'=>'奖金'])->count(),
            'other'     => $income->where(['type'=>'其他'])->count()
        ];
        return view('system.incomeChart' ,compact('dataList'));
    }

    public function showPay(Pay $pay)
    {
        $dataList = [
            'food'  => $pay->where(['type'=>'餐费'])->count(),
            'part'  => $pay->where(['type'=>'应酬'])->count(),
            'gift'  => $pay->where(['type'=>'礼金'])->count(),
            'fare'  => $pay->where(['type'=>'车费'])->count(),
            'other' => $pay->where(['type'=>'其他'])->count()
        ];
        return view('system.payChart', compact('dataList'));
    }
}
