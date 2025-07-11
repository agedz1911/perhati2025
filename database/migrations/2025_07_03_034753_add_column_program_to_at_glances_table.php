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
        Schema::table('at_glances', function (Blueprint $table) {
            $table->string('room')->nullable();
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('color')->nullable();
            $table->unsignedMediumInteger('no_urut')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('at_glances', function (Blueprint $table) {
            //
        });
    }
};
