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
        Schema::create('admin', function (Blueprint $table) {
            $table->bigInteger("id_admin")->primary();
            $table->string("username");
            $table->string("nama_lengkap");
            $table->char("jenkel");
            $table->date("tgl_lahir");
            $table->string("alamat");
            $table->char("no_telp");
            $table->string("password");
            $table->string("email");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
