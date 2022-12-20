<?php

use Illuminate\Database\Seeder;

class big_questionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('big_questions')->truncate();
        $param = [
            'title' => 'ガチで東京の人しか解けない！ #東京の難読地名クイズ'
        ];
        DB::table('big_questions')->insert($param);

        $param = [
            'title' => '広島県民なら解けて当然？ #広島県の難読地名クイズ'
        ];
        DB::table('big_questions')->insert($param);
    }
}
