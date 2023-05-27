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
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id('formateur_id');
            $table->string('nom_f');
            $table->string('prenom_f');
            $table->string('email_f')->unique();
            $table->string('numTel_f')->unique();
            $table->enum('genre_f', ['Mâle', 'femelle']);
            $table->string('ville_f')->unique();
            $table->string('codPost_f')->unique();
            $table->date('dateNai_f')->unique();
            $table->string('adresse')->unique();
            $table->double('salaire',8,2)->unique()->nullable(); 
            $table->text('imagePlace_formateur')->unique()->nullable();
            $table->dateTime('deleted_at')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateurs');
    }
};
