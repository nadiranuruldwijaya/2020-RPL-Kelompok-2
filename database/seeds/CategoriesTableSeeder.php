<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
        	'name'	=>	'Artikel',
        	'slug'	=>	'artikel', 
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta')
        	],
        	[
        	'name'	=>	'Ekstrakulikuler' ,
        	'slug'	=>	'ekstrakulikuler' ,
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta')
        	],
        	[
        	'name'	=>	'Pengumuman' ,
        	'slug'	=>	'pengumuman' ,
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta')
        	],

        	[
        	'name'	=>	'Postingan' ,
        	'slug'	=>	'postingan' ,
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta')
        	],
        	]);
    }
}
