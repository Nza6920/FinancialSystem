<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// 支出数据模型
class Pay extends Model
{
    protected $table = 'tb_outaccount';        // 绑定数据表 tb_outaccount
    public $timestamps = false;

    protected $fillable = [
        'money','time','type','address','mark',
    ];
}
