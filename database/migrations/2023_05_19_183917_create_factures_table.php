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
            $table->id('facture_id');
            $table->dateTime('date_facture');
            $table->double('montant', 4, 2)->nullable();
            $table->unsignedBigInteger('apprenant_id');
             $table->foreign('apprenant_id')->references('apprenant_id')->on('apprenants')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('deleted_at')->nullable();
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
