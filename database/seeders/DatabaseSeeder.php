<?php

namespace Database\Seeders;

use App\Models\Kategori_Bencana;
use App\Models\Role;
use App\Models\Provinsi;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
    Kategori_Bencana::factory(10)->create();
  
    Role::factory(10)->create(); 

    Provinsi::factory(10)->create();
    }

}
