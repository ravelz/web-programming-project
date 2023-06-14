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
        Schema::create('users', function (Blueprint $table) {
            $table->string('id_user')->primary(); //nnti dia hasil string combine dengan id yang angkanya tuh dari autoincrement
            $table->string('username')->unique();
            $table->string('name'); 
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role')->default(1);
            $table->integer('jml_followers')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
