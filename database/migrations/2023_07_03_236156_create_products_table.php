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
            $table->text('description')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('brand_model_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
            $table->foreign('brand_id')->on('brands')->references('id')->cascadeOnDelete();
            $table->foreign('brand_model_id')->on('brand_models')->references('id')->cascadeOnDelete();
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
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
