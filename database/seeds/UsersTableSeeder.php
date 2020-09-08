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
        DB::table('users')->insert([
        	[
            'name' 			=> 'forumsiswa123',
        	'username'		=> 'forumsiswa123', 
        	'email' 		=> 'forumsiswa@gmail.com',
        	'password' 		=>  bcrypt('forumsiswa123'),
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta'),
        	'updated_at'	=>	\Carbon\Carbon::now('Asia/Jakarta')
        	]

            ]);
    }
}
