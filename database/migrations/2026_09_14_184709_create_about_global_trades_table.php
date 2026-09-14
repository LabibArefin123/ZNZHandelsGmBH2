<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_global_trades', function (Blueprint $table) {
            $table->id();
            $table->string('small_heading')->nullable();
            $table->string('title_before_emphasis')->nullable();
            $table->string('title_emphasis')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_global_trades');
    }
};
