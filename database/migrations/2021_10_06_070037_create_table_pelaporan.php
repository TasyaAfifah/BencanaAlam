<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePelaporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pelaporan', function (Blueprint $table) {
            $table->id();
            $table->date('waktu_bencana');
            $table->smallinteger('status');
            $table->timestamps();

        
        });
        Schema::table('table_pelaporan', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('table_user');
            $table->foreignId('id_bencana')->constrained('table_bencana');
            $table->foreignId('id_kecamatan')->constrained('table_kecamatan');
            
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