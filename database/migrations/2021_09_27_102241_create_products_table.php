<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merchant_id')->constrained()->onDelete('cascade');
            $table->foreignId('collection_id')->constrained()->onDelete('cascade');
            $table->text('name');
            $table->string('sku')->nullable();
            $table->double('price');
            $table->double('discount_percent')->nullable();
            $table->integer('stock');
            $table->integer('stock_left');
            $table->text('slug');
            $table->text('video')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('is_draft')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_bestsellers')->default(false);
            $table->boolean('is_top')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
