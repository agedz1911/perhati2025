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
        Schema::create('visitings', function (Blueprint $table) {
            $table->id();
            $table->json('category_visit')->nullable();
            $table->json('title_visit')->nullable();
            $table->json('image')->nullable();
            $table->json('description')->nullable();
            $table->json('is_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitings');
    }
};
