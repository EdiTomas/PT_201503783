<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


     /*
     Create table Agencia(
   ID_Agencia  int primary key,
   Nombre varchar(400)
)
     */
    public function up(): void
    {
        Schema::create('agencias', function (Blueprint $table) {
            //$table->id();
            $table->id('ID_Agencia')->primary()->unique()->increments();
            $table->string('Nombre',400);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencias');
    }
};
