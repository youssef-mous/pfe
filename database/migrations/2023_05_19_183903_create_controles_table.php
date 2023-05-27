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
        Schema::create('controles', function (Blueprint $table) {
             $table->id('controle_id');
            $table->dateTime('date_controle');
            $table->integer('duree');
            $table->string('docControle');
             $table->unsignedBigInteger('formateur_id');
             $table->foreign('formateur_id')->references('formateur_id')->on('formateurs')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('controles');
    }
};
