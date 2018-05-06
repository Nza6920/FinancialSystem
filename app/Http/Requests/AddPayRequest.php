<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPayRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'money'   => 'required|numeric|regex:/^[0-9]+\.?[0-9]{0,9}$/',
            'time'    => 'required|date_format:Y-m-d',
            'address' => 'required',
            'type'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'money.required'     => '金额是必填项.',
            'money.numeric'      => '金额必须是数字.',
            'money.regex'        => '金额必须是正数.',
            'time.required'      => '时间是必填的.',
            'time.date_format'   => '时间的格式必须是 年-月-日(2018-11-11)',
            'address.required'   => '地址是必填项.',
            'type.required'      => '类型是必选项.'
        ];
    }
}
