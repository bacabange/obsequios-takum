<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\User::class)->create([
    		'name' => 'Admin',
    		'email' => 'admin@example.com',
    		'password' => bcrypt('admin'),
    		'type' => 'admin',
    		'remember_token' => str_random(10)
    	]);

    	factory(App\User::class)->create([
    		'name' => 'User',
    		'email' => 'user@example.com',
    		'password' => bcrypt('user'),
    		'type' => 'user',
    		'remember_token' => str_random(10)
    	]);

    	factory(App\User::class, 10)->create();
    }
}
