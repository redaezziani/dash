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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('adress')->nullable();
            $table->date('date')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('full_price')->nullable();
            $table->integer('done_price')->nullable();
            $table->integer('credit_price')->nullable();
            $table->string('ident')->nullable();
            $table->string('desc')->nullable();
            $table->string('desc_facture_1')->nullable();
            $table->string('qte_1')->nullable();
            $table->string('price_qte_1')->nullable();
            $table->string('total_qte_1')->nullable();
            $table->string('desc_facture_2')->nullable();
            $table->string('qte_2')->nullable();
            $table->string('price_qte_2')->nullable();
            $table->string('total_qte_2')->nullable();  // Corrected from 'total_qte_3'
            $table->string('desc_facture_3')->nullable();
            $table->string('qte_3')->nullable();
            $table->string('price_qte_3')->nullable();
            $table->string('total_qte_3')->nullable();
            $table->string('desc_facture_4')->nullable();
            $table->string('qte_4')->nullable();
            $table->string('price_qte_4')->nullable();
            $table->string('total_qte_4')->nullable();
            $table->string('desc_facture_5')->nullable();
            $table->string('qte_5')->nullable();
            $table->string('price_qte_5')->nullable();
            $table->string('total_qte_5')->nullable();
            $table->string('desc_facture_6')->nullable();
            $table->string('qte_6')->nullable();
            $table->string('price_qte_6')->nullable();
            $table->string('total_qte_6')->nullable();
            $table->string('desc_facture_7')->nullable();
            $table->string('qte_7')->nullable();
            $table->string('price_qte_7')->nullable();
            $table->string('total_qte_7')->nullable();
            $table->string('desc_facture_8')->nullable();
            $table->string('qte_8')->nullable();
            $table->string('price_qte_8')->nullable();
            $table->string('total_qte_8')->nullable();
            $table->string('desc_facture_9')->nullable();
            $table->string('qte_9')->nullable();
            $table->string('price_qte_9')->nullable();
            $table->string('total_qte_9')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
