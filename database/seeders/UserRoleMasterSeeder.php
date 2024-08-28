<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_role_masters')->insert([
            ['user_role' => '管理者'],
            ['user_role' => '有料会員'],
            ['user_role' => '無料会員'],  // デフォルトの「無料会員」
        ]);
    }
}
