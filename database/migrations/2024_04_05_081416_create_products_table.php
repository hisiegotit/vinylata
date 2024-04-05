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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete()->comment('The category that this product belongs to');
            $table->foreignId('vendor_id')->constrained()->cascadeOnDelete()->comment('The vendor who produce the product');
            $table->string('title')->comment('The title of the product');
            $table->text('description')->comment('The description of the product');
            $table->string('attributes')->comment('The attributes of the product');
            $table->text('detail')->comment('The detail of the product');
            $table->string('image')->comment('The image of the product');
            $table->float('price')->comment('The price of the product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
