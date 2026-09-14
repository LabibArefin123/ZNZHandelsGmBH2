<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_stories', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('caption_label')->nullable();
            $table->string('caption_title')->nullable();
            $table->string('small_heading')->nullable();
            $table->string('title')->nullable();
            $table->text('paragraph_one')->nullable();
            $table->text('paragraph_two')->nullable();
            $table->string('point_one_number')->nullable();
            $table->string('point_one_title')->nullable();
            $table->text('point_one_description')->nullable();
            $table->string('point_two_number')->nullable();
            $table->string('point_two_title')->nullable();
            $table->text('point_two_description')->nullable();
            $table->string('point_three_number')->nullable();
            $table->string('point_three_title')->nullable();
            $table->text('point_three_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_stories');
    }
};
