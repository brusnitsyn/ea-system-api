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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('serial');
            $table->string('date_buy');
            $table->string('date_wrnt');
            $table->string('date_check');
            $table->foreignId('equipment_id')->references('id')->on('equipment')->cascadeOnDelete();
            $table->foreignId('type_id')->references('id')->on('type_of_accessories')->cascadeOnDelete();
            $table->foreignId('status_id')->references('id')->on('status_accessories')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accessories');
    }
};
