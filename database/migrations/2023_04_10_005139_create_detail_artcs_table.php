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
        Schema::create('detailArtcs', function (Blueprint $table) {
            $table->string('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('id_article');
            $table->foreign('id_article')->references('id_article')->on('articles');
            $table->integer('jml_view');
            $table->primary(array('id_user', 'id_article'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailArtcs');
    }
};
