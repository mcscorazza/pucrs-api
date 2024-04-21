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
        Schema::create('movements', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_number');
            $table->datetime('date');
            $table->float('quantity', 10, 4);
            $table->float('value', 10, 4);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('movement_type_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('supplier_id')->nulable();
            $table->unsignedBigInteger('customer_id')->nulable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('movement_type_id')->references('id')->on('movement_types');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
