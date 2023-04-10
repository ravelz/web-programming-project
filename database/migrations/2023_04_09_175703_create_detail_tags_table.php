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
        Schema::create('detailTags', function (Blueprint $table) {
            $table->string('id_article')->primary();
            $table->foreign('id_article')->references('id_article')->on('articles');
            $table->string('id_tag')->primary();
            $table->foreign('id_tag')->references('id_tag')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailTags');
    }
};
