<?php

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Education::class,10)->create();
    }
}
