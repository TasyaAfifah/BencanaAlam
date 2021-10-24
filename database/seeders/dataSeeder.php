<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 25; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('users')->insert([
    			'nama_user' => $faker->name,
    			'email' => $faker->unique()->email,
    			'tgl_lahir' => $faker->date('Y-m-d'),
                'password' => $faker->sha1,
    		]);
 
    	}
    }
}
