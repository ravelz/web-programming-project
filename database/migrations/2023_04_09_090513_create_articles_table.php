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
        Schema::create('articles', function (Blueprint $table) {
            $table->string('id_article')->primary();
            $table->string('judul', 255);
            $table->date('tgl_publish');
            $table->integer('jml_comment');
            $table->string('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->integer('status_member');
            $table->string('deskripsi', 255);
            $table->integer('jml_like');
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
        Schema::dropIfExists('articles');
    }
};
