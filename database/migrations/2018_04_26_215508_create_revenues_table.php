<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevenuesTable extends Migration
{
    // 生成 tb_inaccount(收入信息表)
    public function up()
    {
        Schema::create('tb_inaccount', function (Blueprint $table) {
            $table->increments('id')->comment('编号');                 // 主键自增
            $table->decimal('money', 10, 4)->comment('收入金额');      // 收入金额, 类型: DECIMAL 最大10位 保留4位小数
            $table->dateTime('time')->comment('收入时间');             // 收入时间, 类型: DATETIME 格式: 1000-01-01 00：00：00
            $table->string('type', 10)->comment('收入类别');           // 收入类别, 类型: VCHAR 最大10位
            $table->string('handler', 100)->comment('付款方');         // 付款方, 类型: VCHAR 最大100位
            $table->string('mark', 200)->comment('备注');              // 备注   , 类型: VCHAR 最大200位
        });
    }

    // 回滚 tb_inaccount(收入信息表)
    public function down()
    {
        Schema::dropIfExists('tb_inaccount');
    }
}
