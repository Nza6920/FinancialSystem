<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// 收入数据模型
class Revenue extends Model
{
    protected $table = 'tb_outaccount';        // 绑定数据表 tb_outaccount
    public $timestamps = false;
}
