<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddIncomeRequest;
use App\Models\Income;

class IncomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 返回新建收入页面
    public function show(Income $income)
    {
        return view('system.income_create_and_edit',compact('income'));
    }

    // 新建收入
    public function create(AddIncomeRequest $request,Income $income)
    {
      // 将接收到的数据做验证后, 录入到$data数组中
      $data = [
          'money'   => $request->money,
          'time'    => $request->time,
          'type'    => $request->type,
          'handler' => $request->address,
          'mark'    => $request->mark,
      ];

      // fill() 方法会将 $data 中的数据一一对应到 $income 数据模型中
      $income->fill($data);
      $income->save();

      return redirect()->route('income.list')->with('success','新建成功!');
    }

    // 显示所有收入
    public function showIncomeList()
    {
        $incomes = Income::paginate(15);
        $i = 1;
        return view('system.incomeList', compact('incomes','i'));
    }

    // 显示编辑页面
    public function edit(Income $income)
    {
        return view('system.income_create_and_edit',compact('income'));
    }

    // 编辑收入逻辑(隐性路由绑定)
    public function update(Income $income,AddIncomeRequest $request)
    {
        // 将接收到的数据做验证后, 录入到$data数组中
        $data = [
            'money'   => $request->money,
            'time'    => $request->time,
            'type'    => $request->type,
            'handler' => $request->address,
            'mark'    => $request->mark,
        ];
       $income->update($data);

       return redirect()->route('income.list')->with('success','更新成功!');
    }

    // 删除收入
    public function destory(Income $income)
    {
        $income->delete();

        return redirect()->route('income.list')->with('success','删除成功!');
    }
}
