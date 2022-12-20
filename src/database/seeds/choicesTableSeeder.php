<?php

use Illuminate\Database\Seeder;

class choicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'question_id' => 1,
            'choice' => 'たかなわ',
            'value' => true
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 1,
            'choice' => 'たかわ',
            'value' => false
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 1,
            'choice' => 'こうわ',
            'value' => false
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'choice' => 'かめいど',
            'value' => true
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 2,
            'choice' => 'かめと',
            'value' => false
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 2,
            'choice' => 'かめど',
            'value' => false
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'choice' => 'こうじまち',
            'value' => true
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 3,
            'choice' => 'おかとまち',
            'value' => false
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 3,
            'choice' => 'かゆまち',
            'value' => false
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'choice' => 'むかいなだ',
            'value' => true
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 4,
            'choice' => 'むきひら',
            'value' => false
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 4,
            'choice' => 'むこうひら',
            'value' => false
        ];
        DB::table('choices')->insert($param);
    }
}
