<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIdDetailKorban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_detail_korban', function (Blueprint $table) {
            $table->string("id_detail_korban",5)->unique();
            $table->string("id_laporan",5);
            $table->string("nik",13);
            $table->string("nama",50);
            $table->string("umur",10);
            $table->string("kondisi",10);
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
