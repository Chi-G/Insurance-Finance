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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('faq1_title');
            $table->text('faq1_desc');
            $table->string('faq2_title')->nullable();
            $table->text('faq2_desc')->nullable();
            $table->string('faq3_title')->nullable();
            $table->text('faq3_desc')->nullable();
            $table->string('faq4_title')->nullable();
            $table->text('faq4_desc')->nullable();
            $table->string('faq5_title')->nullable();
            $table->text('faq5_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
