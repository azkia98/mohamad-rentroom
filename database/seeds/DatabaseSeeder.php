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

        $this->call(EducationTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
