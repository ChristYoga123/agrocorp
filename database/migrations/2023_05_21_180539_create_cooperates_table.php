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
        Schema::create('cooperates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("mitra_id");
            $table->unsignedBigInteger("pelaku_agro_id");
            $table->foreign("mitra_id")->references("id")->on("users");
            $table->foreign("pelaku_agro_id")->references("id")->on("users");
            $table->longText("cooperate_reason");
            $table->longText("cooperate_needs");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cooperates');
    }
};
