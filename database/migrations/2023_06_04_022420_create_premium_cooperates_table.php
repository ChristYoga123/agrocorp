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
        Schema::create('premium_cooperates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("mitra_id");
            $table->unsignedBigInteger("pelaku_agro_id");
            $table->foreign("mitra_id")->references("id")->on("users");
            $table->foreign("pelaku_agro_id")->references("id")->on("users");
            $table->string("product_name");
            $table->integer("quantity");
            $table->bigInteger("price_request");
            $table->string("transaction_proof")->nullable();
            $table->enum("transaction_status", ["Belum Lunas", "Disetujui", "Ditolak"])->default("Belum Lunas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premium_cooperates');
    }
};
