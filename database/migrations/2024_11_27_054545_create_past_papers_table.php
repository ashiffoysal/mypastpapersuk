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
        Schema::create('past_papers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('exam_type')->nullable(); // Use unsignedTinyInteger for small values
            $table->string('exam_board')->nullable();
            $table->string('subject')->nullable();
            $table->string('year')->nullable(); // Use the year column type for years
            $table->string('ques_link')->nullable();
            $table->string('ans_link')->nullable();
            $table->boolean('is_active')->default(true); // Use boolean for flags
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('past_papers');
    }
};
