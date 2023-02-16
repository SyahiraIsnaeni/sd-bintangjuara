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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_penulis')->default('Admin Bintang Juara');
            $table->string('judul');
            $table->text('slug');
            $table->text('body');
            $table->integer('kategori_kegiatan_id');
            $table->string('gambar_artikel');
            $table->boolean('is_active');
            $table->string('delete')->default('N');
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
        Schema::dropIfExists('kegiatan');
    }
};
