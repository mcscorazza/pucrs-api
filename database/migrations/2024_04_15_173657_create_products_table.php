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
            $table->string('code', 10);
            $table->string('name', 100);
            $table->string('image', 200);
            $table->float('stock', 10, 4);
            $table->float('value', 10, 4);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('mesure_unit_id');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_type_id')->references('id')->on('product_types');
            $table->foreign('mesure_unit_id')->references('id')->on('mesure_units');
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
