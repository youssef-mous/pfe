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
        Schema::create('formations', function (Blueprint $table) {
            $table->id('formation_id');
            $table->string('domain_form')->unique();
            $table->string('intitule_form')->unique();
            $table->text('objectif_form')->unique();
           
            $table->dateTime('date_deb');
            $table->dateTime('date_fin');
            $table->boolean('certifier')->default(false);
            $table->double('montant', 4, 2)->nullable();
            $table->unsignedBigInteger('formateur_id');
             $table->foreign('formateur_id')->references('formateur_id')->on('formateurs')->onUpdate('cascade')->onDelete('cascade');
            $table->text('imagePlace_formation')->unique()->nullable();
            $table->dateTime('deleted_at')->nullable();
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
