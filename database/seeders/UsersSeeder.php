<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => '名前',
                'email' => 'メールアドレス',
                'password' => 'パスワード',
                'age' => 20,
                'sex_id' => 1,
                'like_titles_id' => 1,
                'like_titles_id' => 1,
                'comment' => 'コメント',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'last_login_at' => new DateTime(),
         ]);
    }
}
