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
        Schema::create('audience_feature_boards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('audience_feature_id')->references('id')
                ->on('audience_features')->cascadeOnDelete();
            $table->foreignId('board_size_id')->references('id')
                ->on('board_sizes')->cascadeOnDelete();
            $table->foreignId('board_type_id')->references('id')
                ->on('board_types')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audience_feature_boards');
    }
};
