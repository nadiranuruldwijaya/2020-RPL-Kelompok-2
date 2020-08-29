<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	[ 'category_id' => '1' ,
            'user_id' =>  '1',
            'title'	=>	'Bale Mahaputra',
        	'slug'	=>	'bale mahaputra',
        	'body'	=>	'SMK MAHAPUTRA CERDAS UTAMA memiliki sebuah bangunan yang di desain khusus menyerupai rumah adat Jawa Barat yang sering dikenal dengan Rumah Kasepuhan Cirebon, Dan dinamakan Bale Mahaputra.
             Disana kita bisa melakukan banyak hal dan siswa-siswi bisa melakukan kegiatan Yyang Positif seperti melakukan berbagai event dan pembelajaran.',
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta'),
            'updated_at'    =>  \Carbon\Carbon::now('Asia/Jakarta')
        	],

        	[ 'category_id' => '2' ,
            'user_id' =>  '2',
        	'title'	=>	'Pengibaran bendera',
        	'slug'	=>	'pengibaran bendera',
        	'body'	=>	'SMK MAHAPUTRA sedang mengadakan pengibaran bendera MErah Putih yang diadakan pada tanggal 17 Agustus 2020',
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta'),
            'updated_at'    =>  \Carbon\Carbon::now('Asia/Jakarta')
        	],

        	[ 'category_id' => '3' ,
            'user_id' =>  '2',
        	'title'	=>	'Kolam',
        	'slug'	=>	'kolam',
        	'body'	=>	'SMK MAHAPUTRA memiliki kolam ikan. ',
        	'created_at'	=>	\Carbon\Carbon::now('Asia/Jakarta'),
            'updated_at'    =>  \Carbon\Carbon::now('Asia/Jakarta')
        	] 

        	]);
    }
}
