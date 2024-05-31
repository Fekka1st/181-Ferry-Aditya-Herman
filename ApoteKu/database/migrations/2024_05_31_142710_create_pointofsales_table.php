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
        Schema::create('pointofsales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_obat');
            $table->unsignedBigInteger('id_user');
            $table->float('harga');
            $table->integer('jumlah');
            $table->float('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pointofsales');
    }
};
