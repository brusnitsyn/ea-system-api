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
        Schema::create('table_contents', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('audience_id')->references('id')
                ->on('audiences')->cascadeOnDelete();
            $table->foreignId('base_table_content_id')->references('id')
                ->on('base_table_contents')->cascadeOnDelete();
            $table->foreignId('faculty_id')->nullable()->references('id')
                ->on('faculties')->cascadeOnDelete();
            $table->foreignId('table_another_fill_id')->nullable()->references('id')
                ->on('table_another_fills')->cascadeOnDelete();
            $table->foreignId('table_fill_event_id')->nullable()->references('id')
                ->on('table_fill_events')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_contents');
    }
};
