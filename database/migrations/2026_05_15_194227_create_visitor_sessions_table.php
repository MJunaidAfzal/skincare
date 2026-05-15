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
        Schema::create('visitor_sessions', function (Blueprint $table) {
            $table->id();

            // Unique Visitor Token
            $table->string('session_token')->unique();

            // Visitor Information
            $table->ipAddress('ip_address')->nullable();
            $table->text('user_agent')->nullable();

            // Tracking
            $table->timestamp('last_activity')->nullable();

            // Optional Tracking Data
            $table->string('device')->nullable();
            $table->string('browser')->nullable();
            $table->string('platform')->nullable();

            // Visitor Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            // Faster Search Performance
            $table->index('session_token');
            $table->index('last_activity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_sessions');
    }
};
