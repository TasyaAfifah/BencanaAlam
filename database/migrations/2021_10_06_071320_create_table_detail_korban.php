<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetailKorban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_detail_korban', function (Blueprint $table) {
            $table->id();
            $table->string("nik",13);
            $table->string("nama",50);
            $table->string("umur",10);
            $table->string("kondisi",10);
            $table->timestamps();

        });
        Schema::table('table_detail_korban', function (Blueprint $table) {
            $table->foreignId('id_laporan')->constrained('table_pelaporan');
            
        });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_detail_korban');
    }
}
