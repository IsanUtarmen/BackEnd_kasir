<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_id');
            $table->string('nama_menu', 255);
            $table->double('harga');
            $table->string('image', 255);
            $table->string('deskripsi', 255);
            $table->timestamps();
            $table->foreign('jenis_id')->references('id')->on('jenis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
