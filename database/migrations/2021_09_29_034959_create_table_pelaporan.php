<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIdLaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pelaporan', function (Blueprint $table) {
           
            $table->string("id_user")->unique();
            $table->string("id_bencana",50);
            $table->string("id_kecamatan",30);
            $table->string("waktu_bencana",10);
            $table->string("status",10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pelaporan');
    }
}
