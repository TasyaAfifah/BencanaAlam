<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBencana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_bencana', function (Blueprint $table) {
            $table->id();
            $table->string("nama_bencana",50);
            $table->timestamps();


        });
        Schema::table('table_bencana', function (Blueprint $table) {
            $table->foreignId('id_kategori_bencana')->constrained('table_kategori_bencana');
            
        });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_bencana');
    }
}
