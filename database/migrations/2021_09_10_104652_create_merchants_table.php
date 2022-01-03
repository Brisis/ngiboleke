<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('name');
            $table->string('username')->unique();
            $table->longText('description')->nullable();
            $table->string('merchant_logo')->nullable();
            $table->string('merchant_cover')->nullable();
            $table->string('country');
            $table->string('city');
            $table->text('address')->nullable();
            $table->longText('map_iframe')->nullable();
            $table->string('country_code')->nullable();
            $table->string('phone')->nullable();
            $table->text('video')->nullable();
            $table->boolean('verified')->default(false);
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
        Schema::dropIfExists('merchants');
    }
}
