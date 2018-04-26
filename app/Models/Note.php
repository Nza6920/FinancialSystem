<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// 便签数据模型
class Note extends Model
{
    protected $table = 'tb_flag';        // 绑定数据表 tb_flag
    public $timestamps = false;
}
