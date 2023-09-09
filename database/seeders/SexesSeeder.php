<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SexesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexes')->insert([
                'sex' => '男',
         ]);
        DB::table('sexes')->insert([
                'sex' => '女',
         ]);
        DB::table('sexes')->insert([
                'sex' => 'その他',
         ]);
        DB::table('sexes')->insert([
                'sex' => '選択しない',
         ]);
    }
}