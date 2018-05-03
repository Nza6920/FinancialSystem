<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaysTable extends Migration
{
    // 生成 tb_outaccount(支出信息表)
    public function up()
    {
        Schema::create('tb_outaccount', function (Blueprint $table) {
            $table->increments('id')->comment('编号');                    // 主键自增
            $table->decimal('money', 10, 4)->comment('支出金额');         // 支出金额, 类型: DECIMAL 最大10位 保留4位小数
            $table->date('time')->comment('支出时间');                    // 支出时间, 类型: DATE 格式: 2018-01-01
            $table->string('type', 10)->comment('支出类别');              // 支出类别, 类型: VCHAR 最大10位
            $table->string('address', 100)->comment('支出地点');          // 支出地点, 类型: VCHAR 最大100位
            $table->string('mark', 200)->nullable()->comment('备注');     // 备注   , 类型: VCHAR 最大200位
        });
    }

    // 回滚 tb_outaccount(支出信息表)
    public function down()
    {
        Schema::dropIfExists('tb_outaccount');
    }
}
