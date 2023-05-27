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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id('inscription_id');
            $table->boolean('valider')->default(false);
            $table->boolean('regler')->default(false);

            $table->unsignedBigInteger('apprenant_id');
            $table->foreign('apprenant_id')->references('apprenant_id')->on('apprenants')->onUpdate('cascade')->onDelete('cascade');
           
            $table->unsignedBigInteger('facture_id');
            $table->foreign('facture_id')->references('facture_id')->on('factures')->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedBigInteger('formation_id');
            $table->foreign('formation_id')->references('formation_id')->on('formations')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTimeTz('date_inscription');
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
