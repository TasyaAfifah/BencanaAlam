<?php

namespace Database\Seeders;

use App\Models\Kategori_Bencana;
use App\Models\Role;
use App\Models\Provinsi;
use App\Models\User2;
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
  
    Role::factory(5)->create(); 

    Provinsi::factory(10)->create();

    // User2::factory(10)->create();

    
    }

}
