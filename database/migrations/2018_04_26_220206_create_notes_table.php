<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    // 生成 tb_flag(便签表)
    public function up()
    {
        Schema::create('tb_flag', function (Blueprint $table) {
            $table->increments('id')->comment('编号');                // 主键自增
            $table->string('flag', 200)->comment('便签内容');         // 便签内容, 类型: VCHAR 最大200位
        });
    }

    // 回滚 tb_flag(便签表)
    public function down()
    {
        Schema::dropIfExists('tb_flag');
    }
}
