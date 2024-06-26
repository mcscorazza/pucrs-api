<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('sped_codes', function (Blueprint $table) {
            $table->id();
            $table->integer('sped_code');
            $table->text('sped_description', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sped_codes');
    }
};
