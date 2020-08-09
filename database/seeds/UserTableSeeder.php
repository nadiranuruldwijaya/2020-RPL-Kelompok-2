<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	// $faker = Faker::create();
     	// for ($i=0; $i < 10; $i++) { 
     	   	DB::table('users')->insert([
     	   		'name' 		=> 'admin',
     	   		'username'	=> 'username_admin',
     	   		'email'		=> 'admin@gmail.com',
     	   		'password'	=> bcrypt('password'),
     	   	]);

     	   // }   
    }
}
