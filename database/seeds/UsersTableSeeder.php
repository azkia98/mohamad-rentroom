<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'mahdi',
            'familyname' => 'ebrahimi',
            'email' => 'azkia@iran.ir'
        ]);
        
        
        $users = factory(App\User::class, 5)->create();
    }
}
