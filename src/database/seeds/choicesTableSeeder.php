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
        DB::table('choices')->truncate();
        $param = [
            'question_id' => 1,
            'choice' => 'たかなわ',
            'value' => true,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 1,
            'choice' => 'たかわ',
            'value' => false,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 1,
            'choice' => 'こうわ',
            'value' => false,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 2,
            'choice' => 'かめいど',
            'value' => true,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 2,
            'choice' => 'かめと',
            'value' => false,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 2,
            'choice' => 'かめど',
            'value' => false,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 3,
            'choice' => 'こうじまち',
            'value' => true,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 3,
            'choice' => 'おかとまち',
            'value' => false,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 3,
            'choice' => 'かゆまち',
            'value' => false,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);

        $param = [
            'question_id' => 4,
            'choice' => 'むかいなだ',
            'value' => true,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 4,
            'choice' => 'むきひら',
            'value' => false,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);
        $param = [
            'question_id' => 4,
            'choice' => 'むこうひら',
            'value' => false,
            'created_at' => new dateTime('now'),
        ];
        DB::table('choices')->insert($param);
    }
}
