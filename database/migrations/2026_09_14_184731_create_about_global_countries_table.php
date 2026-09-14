<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_global_countries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('about_global_trade_id')->nullable()->index();
            $table->string('number')->nullable();
            $table->string('icon')->nullable();
            $table->string('country')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_global_countries');
    }
};
