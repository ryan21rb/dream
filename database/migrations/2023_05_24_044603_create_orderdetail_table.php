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
        Schema::create('orderdetail', function (Blueprint $table) {
            $table->bigInteger("id_pemesanan")->unique();
            $table->date("tgl_pesan");
            $table->date("tgl_kirim");
            $table->bigInteger("kd_ekspedisi")->unique();
            $table->string("status");
            $table->integer("total_harga");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderdetail');
    }
};
