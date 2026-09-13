<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_product_size', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->nullable()->index();
            $table->foreignId('product_size_id')->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_product_size');
    }
};
