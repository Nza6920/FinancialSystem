<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNoteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'flag' => 'required|max:200',
        ];
    }

    public function messages()
    {
        return [
            'flag.required' => '标签内容是必填项.',
            'flag.max'      => '字数最多不能超过200.'
        ];
    }
}
