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
        Schema::create('buktiPayment', function (Blueprint $table) {
            $table->string('id_bukpay')->primary();
            $table->date('tgl_payment');
            $table->string('id_payment');
            $table->foreign('id_payment')->references('id_payment')->on('payments');
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
        Schema::dropIfExists('buktiPayment');
    }
};
