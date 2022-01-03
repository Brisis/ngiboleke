<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->double('total');
            $table->string('status')->default('pending');
            $table->boolean('is_paid')->default(false);
            $table->string('date_ordered')->nullable();
            $table->string('date_packaging')->nullable();
            $table->string('date_ready')->nullable();
            $table->string('date_transit')->nullable();
            $table->string('date_dropped')->nullable();
            $table->string('date_delivered')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
