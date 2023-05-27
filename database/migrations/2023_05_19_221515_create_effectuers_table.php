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
        Schema::create('effectuers', function (Blueprint $table) {
            $table->unsignedBigInteger('apprenant_id');
            $table->foreign('apprenant_id')->references('apprenant_id')->on('apprenants')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('controle_id');
            $table->foreign('controle_id')->references('controle_id')->on('controles')->onUpdate('cascade')->onDelete('cascade');
            $table->double('note', 4, 2)->nullable();
            $table->string('reponses');
             $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('effectuers');
    }
};
