<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUserData extends Migration
{

    public function up()
    {
        $user = [
                    [
                        'name'     => 'admin',
                        'password' => bcrypt('qwerty'),
                    ],
                ];
        DB::table('tb_pwd')->insert($user);
    }


    public function down()
    {
        DB::table('tb_pwd')->truncate();
    }
}
