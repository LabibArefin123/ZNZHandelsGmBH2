<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->nullable()->index();
            $table->foreignId('product_brand_id')->nullable()->index();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price', 12, 2);
            $table->decimal('old_price', 12, 2)->nullable();
            $table->string('currency')->nullable();
            $table->string('image');
            $table->json('images')->nullable();
            $table->json('colors')->nullable();
            $table->json('tags')->nullable();
            $table->string('material')->nullable();
            $table->string('origin')->nullable();
            $table->string('fit')->nullable();
            $table->string('availability')->default('In Stock');
            $table->unsignedInteger('stock')->default(0);
            $table->decimal('rating', 3, 2)->default(0);
            $table->unsignedInteger('review_count')->default(0);
            $table->string('badge')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
