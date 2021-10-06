<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kota', function (Blueprint $table) {
            $table->id();
            $table->string("nama",50);
            $table->timestamps();


        });
        Schema::table('table_kota', function (Blueprint $table) {
            $table->foreignId('id_provinsi')->constrained('table_provinsi');
       
    });
    
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_kota');
    }
}
