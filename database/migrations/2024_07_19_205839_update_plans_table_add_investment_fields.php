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
        Schema::table('plans', function (Blueprint $table) {
            $table->decimal('min_investment', 10, 2)->after('name');
            $table->decimal('max_investment', 10, 2)->after('min_investment');
            $table->decimal('average_monthly', 5, 2)->after('max_investment');
            $table->decimal('profit', 10, 2)->after('average_monthly');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropColumn(['min_investment', 'max_investment', 'average_monthly', 'profit']);
        });
    }
};
