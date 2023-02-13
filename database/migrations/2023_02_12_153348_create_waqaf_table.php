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
        Schema::create('waqaf', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_bank')->nullable(true);
            $table->string('nama_rekening')->nullable(true);
            $table->string('nomor_rekening')->nullable(true);
            $table->string('total_kebutuhan')->default('0');
            $table->string('dana_terkumpul')->default('0');
            $table->string('total_kekurangan')->default('0');
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
        Schema::dropIfExists('waqaf');
    }
};
