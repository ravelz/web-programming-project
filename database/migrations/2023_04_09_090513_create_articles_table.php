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
            $table->integer('membership');
            $table->text('deskripsi');
            $table->integer('jml_like');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
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
