<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_user_role', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::table('table_user_role', function (Blueprint $table) {
            $table->foreignId('id_user')->constrained('table_user');
            $table->foreignId('id_role')->constrained('table_role');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_user_role');
    }
}
