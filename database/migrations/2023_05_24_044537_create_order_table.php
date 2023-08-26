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
        Schema::create('order', function (Blueprint $table) {
            $table->bigInteger("id_pemesanan")->primary();
            $table->bigInteger("id_customer")->unique();
            $table->bigInteger("id_product")->unique();
            $table->bigInteger("kd_promo")->unique();
            $table->bigInteger("kd_ekspedisi")->unique();
            $table->integer("jumlah");
            $table->integer("sub_total");
            $table->integer("total_ongkir");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
