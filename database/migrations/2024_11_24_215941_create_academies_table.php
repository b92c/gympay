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
        Schema::create('academies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 55);
            $table->unsignedBigInteger('cnpj')->unique();
            $table->string('phone', 20);
            $table->string('email', 55)->unique();
            $table->string('address', 55);
            $table->string('neighborhood', 55);
            $table->unsignedMediumInteger('number');
            $table->unsignedSmallInteger('city');
            $table->unsignedSmallInteger('state');
            $table->unsignedSmallInteger('country');
            $table->unsignedBigInteger('zip');
            $table->string('website', 55)->nullable();
            $table->string('slug', 55)->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academies');
    }
};
