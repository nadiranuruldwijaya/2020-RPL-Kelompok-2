<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        	[ 
        	'name'	=>	'Mahaputra',
        	'slug'	=>	'mahaputra',
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta'),
        	'updated_at'    =>  \Carbon\Carbon::now('Asia/Jakarta')

        	],

        	[ 
        	'name'	=>	'Osis',
        	'slug'	=>	'osis',
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta'),
        	'updated_at'    =>  \Carbon\Carbon::now('Asia/Jakarta')
        	],

        	[ 
        	'name'	=>	'Panahan',
        	'slug'	=>	'panahan',
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta'),
        	'updated_at'    =>  \Carbon\Carbon::now('Asia/Jakarta')
        	],

        	[ 
        	'name'	=>	'Adiwiyata',
        	'slug'	=>	'adiwiyata',
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta'),
        	'updated_at'    =>  \Carbon\Carbon::now('Asia/Jakarta')
        	],

        	[ 
        	'name'	=>	'Chonbuk',
        	'slug'	=>	'chonbuk',
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta'),
        	'updated_at'    =>  \Carbon\Carbon::now('Asia/Jakarta')
        	],
        ]);
    }
}
