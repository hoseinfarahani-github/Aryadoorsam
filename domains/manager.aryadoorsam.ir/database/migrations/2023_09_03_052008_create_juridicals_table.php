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
        Schema::create('juridicals', function (Blueprint $table) {
        $table->id();
        $table->string('companyName');
        $table->string('phone');
        $table->string('nationalNumber');
        $table->string('savedNumber')->nullable();
        $table->string('economicNumber')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juridicals');
    }
};
