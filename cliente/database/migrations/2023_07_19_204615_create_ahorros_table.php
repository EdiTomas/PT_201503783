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
        Schema::create('ahorros', function (Blueprint $table) {
            $table->integer('Id_Cuenta')->primary()->unique()->increments();
            $table->decimal('Saldo',10,2);
            $table->integer('Estado');
            $table->date('Fecha');
            $table->string('Moneda',20);
            $table->string('ID_Cliente',400);
            $table->integer('iduser2');
            $table->foreign('ID_Cliente')->references('DPI')->on('clientes');
            $table->foreign('iduser2')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ahorros');
    }
};
