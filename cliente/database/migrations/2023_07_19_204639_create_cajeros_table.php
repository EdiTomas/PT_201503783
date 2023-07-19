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
        Schema::create('cajeros', function (Blueprint $table) {
            $table->integer('ID_Cajero')->primary()->unique()->increments();
            $table->string('Nombre',400);
            $table->integer('ID_Agencia1');
            $table->foreign('ID_Agencia1')->references('ID_Agencia')->on('agencias');
            $table->timestamps(); 


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cajeros');
    }
};
