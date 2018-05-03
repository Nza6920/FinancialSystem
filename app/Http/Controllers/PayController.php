<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddPayRequest;
use App\Models\Pay;
use App\Models\User;
use Auth;

// 支出控制器
class PayController extends Controller
{
    public function __construct()
    {
      // 只有登录用户可以访问
       $this->middleware('auth');
    }

    // 显示新增支出页面
    public function show(Pay $pay)
    {
        return view('system.pay',compact('pay'));
    }

    // 新增支出逻辑
    public function create(AddPayRequest $request,Pay $pay)
    {
        // 将接收到的数据做验证后, 录入到$data数组中
        $data = [
            'money'   => $request->money,
            'time'    => $request->time,
            'type'    => $request->type,
            'address' => $request->address,
            'mark'    => $request->mark,
        ];

        // fill() 方法会将 $data 中的数据一一对应到 $pay 数据模型中
        $pay->fill($data);
        $pay->save();

        return redirect()->route('pay.list')->with('success','新建成功!');
    }

    // 列出支出清单
    public function showPayList()
    {
        $pays = Pay::all();
        return view('system.payList',compact('pays'));
    }

    // 显示单个支出
    public function showPay(Pay $pay)
    {
        return view('system.payOne',compact('pay'));
    }

    // 显示编辑页面(隐性路由绑定)
    public function edit(Pay $pay)
    {
        return view('system.pay',compact('pay'));
    }

    // 编辑逻辑(隐性路由绑定)
    public function update(AddPayRequest $request,Pay $pay)
    {
        // 将接收到的数据做验证后, 录入到$data数组中
        $data = [
            'money'   => $request->money,
            'time'    => $request->time,
            'type'    => $request->type,
            'address' => $request->address,
            'mark'    => $request->mark,
        ];

       $pay->update($data);

       return redirect()->route('pay.list')->with('success','更新成功!');
    }

    // 删除支出
    public function destory(Pay $pay)
    {
        $pay->delete();

        return redirect()->route('pay.list')->with('success','删除成功!');
    }

}
