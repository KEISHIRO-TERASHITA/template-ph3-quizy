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
            'choice' => 'たかなわ'
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 1,
            'choice' => 'たかわ'
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 1,
            'choice' => 'こうわ'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'choice' => 'かめいど'
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 2,
            'choice' => 'かめと'
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 2,
            'choice' => 'かめど'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'choice' => 'こうじまち'
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 3,
            'choice' => 'おかとまち'
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 3,
            'choice' => 'かゆまち'
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'choice' => 'むかいなだ'
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 4,
            'choice' => 'むきひら'
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 4,
            'choice' => 'むこうひら'
        ];
        DB::table('choices')->insert($param);
    }
}
