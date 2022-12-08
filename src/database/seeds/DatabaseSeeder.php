<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(big_questionsTableSeeder::class);
        $this->call(questionsTableSeeder::class);
        $this->call(choicesTableSeeder::class);
    }
}
