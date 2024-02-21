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
        Schema::create('audience_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('audience_id')->references('id')
                ->on('audiences')->cascadeOnDelete();
            $table->integer('capacity')->default(0);
            $table->boolean('multimedia')->default(false);
            $table->integer('computers_count')->default(0);
            $table->boolean('interact_board')->default(false);
            $table->string('features')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audience_features');
    }
};
