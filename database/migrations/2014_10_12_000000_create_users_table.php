<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    // 生成 tb_pwd(密码信息) 表
    public function up()
    {
        Schema::create('tb_pwd', function (Blueprint $table) {
            $table->increments('id');                                  // 主键自增
            $table->string('name',10);                              // 用户名, 类型: VCHAR
            $table->string('password')->comment('用户密码');        // 用户密码字段, 类型: VCHAR
            $table->rememberToken();
        });
    }

    // 回滚 tb_pwd(密码信息) 表
    public function down()
    {
        Schema::dropIfExists('tb_pwd');
    }
}
