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

        factory(User::class)->create([
            'name' => 'mohamad',
            'familyname' => 'mohamad',
            'email' => 'mohamad@email.com'
        ]);
        
        
        $users = factory(App\User::class, 20)->create();
    }
}
