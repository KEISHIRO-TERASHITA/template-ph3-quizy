<?php

use Illuminate\Database\Seeder;

class questionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->truncate();
        $param = [
            'big_question_id' => 1,
            'image' => 'takanawa',
            'created_at' => new dateTime('now'),
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'image' => 'kameido',
            'created_at' => new dateTime('now'),
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'image' => 'koujimachi',
            'created_at' => new dateTime('now'),
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'mukainada',
            'created_at' => new dateTime('now'),
        ];
        DB::table('questions')->insert($param);
    }
}
