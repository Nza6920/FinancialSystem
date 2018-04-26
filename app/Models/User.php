<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// 用户数据模型
class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'tb_pwd';        // 绑定数据表 tb_pwd
    public $timestamps = false;

    protected $fillable = [
        'name', 'password',
    ];

    protected $hidden = [
        'password',
    ];


}
