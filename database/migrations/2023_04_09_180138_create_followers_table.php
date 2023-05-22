<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
           $table->string('id_user_f');
           $table->foreign('id_user_f')->references('id_user')->on('users');
           $table->string('id_user_m');
           $table->foreign('id_user_m')->references('id_user')->on('users');
           $table->primary(array('id_user_f', 'id_user_m'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followers');
    }
};
