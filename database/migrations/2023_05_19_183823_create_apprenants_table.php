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
        Schema::create('apprenants', function (Blueprint $table) {
           $table->id('apprenant_id');
            $table->string('nom_A');
            $table->string('prenom_A');
            $table->string('email_A')->unique();
            $table->string('numTel_A')->unique();
            $table->enum('genre_A', ['Mâle', 'femelle']);
            $table->string('ville_A')->unique();
            $table->string('codPost_A')->unique();
            $table->date('dateNai_A')->unique();
            $table->string('adresse')->unique();
            $table->text('imagePlace_apprenant')->unique()->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprenants');
    }
};
