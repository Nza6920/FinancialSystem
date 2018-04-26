<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// 支出数据模型
class Pay extends Model
{
    protected $table = 'tb_inaccount';        // 绑定数据表 tb_inaccount
    public $timestamps = false;
}
