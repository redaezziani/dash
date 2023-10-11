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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('adress')->nullable();
            $table->date('date')->nullable();
            $table->string('num_contrat')->nullable();
            $table->integer('full_price')->nullable();
            $table->integer('done_price')->nullable();
            $table->string('credit')->nullable();
            $table->string('credit_price')->nullable();
            $table->string('desc')->nullable();
            $table->string('daccord')->nullable();
            $table->string('condition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
