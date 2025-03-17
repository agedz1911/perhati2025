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
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('company')->nullable();
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('category')->nullable();
            $table->boolean('is_active')->nullable();
            $table->unsignedBigInteger('no_urut')->nullable();
            $table->text('company_profile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsors');
    }
};
