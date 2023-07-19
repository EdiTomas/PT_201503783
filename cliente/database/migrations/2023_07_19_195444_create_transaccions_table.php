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
        Schema::create('transaccions', function (Blueprint $table) {
          
            $table->id('ID_Transaccion')->primary()->unique()->increments();
            $table->decimal('Monto',10,2);
            $table->decimal('Saldo_Restante',10,2);
            $table->date('Fecha');
            $table->integer('iduser3');
            $table->integer('ID_Cajero1');
            $table->integer('ID_Cuenta1');
            $table->foreign('ID_Cuenta1')->references('ID_Cuenta')->on('ahorros');
            $table->foreign('ID_Cajero1')->references('ID_cajero')->on('cajeros');
            $table->foreign('iduser3')->references('id')->on('Users');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaccions');
    }
};
