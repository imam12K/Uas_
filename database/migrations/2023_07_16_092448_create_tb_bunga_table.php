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
        Schema::create('tb_bunga', function (Blueprint $table) {
            $table->increments('bunga_id');
            $table->string('bunga_id_jenisbunga');
            $table->string('bunga_nama');
            $table->string('bunga_harga');
            $table->string('bunga_stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_bunga');
    }
};
