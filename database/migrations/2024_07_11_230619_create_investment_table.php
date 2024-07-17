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
        Schema::create('investment', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('daily_%', 5, 2); // Percentage
            $table->decimal('per_day', 10, 2); // Amount per day
            $table->decimal('min_invest', 10, 2); // Minimum investment
            $table->decimal('max_invest', 10, 2)->nullable(); // Maximum investment
            $table->decimal('average_month', 10, 2); // Average per month
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment');
    }
};
