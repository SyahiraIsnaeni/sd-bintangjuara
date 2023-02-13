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
        Schema::create('fakta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jumlah_siswa')->default('0');
            $table->string('jumlah_guru')->default('0');
            $table->string('tahun_berjalan')->default('0');
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
        Schema::dropIfExists('fakta');
    }
};
