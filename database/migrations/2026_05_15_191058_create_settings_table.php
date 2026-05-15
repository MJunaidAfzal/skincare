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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            // Website Information
            $table->string('site_name')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_phone')->nullable();

            // Logo & Favicon
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

            // Social Links
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            // Address
            $table->text('address')->nullable();

            // Currency
            $table->string('currency', 10)->default('PKR');

            // Maintenance Mode
            $table->boolean('maintenance_mode')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
