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
        Schema::create('contenus', function (Blueprint $table) {
             $table->id('contenu_id');
            $table->string('type_contenu')->unique();
            $table->dateTime('date_creation');
            $table->string('eplacement');

             $table->unsignedBigInteger('formation_id');
             $table->foreign('formation_id')->references('formation_id')->on('formations')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contenus');
    }
};
