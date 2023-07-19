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
   Create table Transaccion(
   ID_Transacción varchar(400) primary key,
   Tipo_de_Transaccion varchar(10),x
   Monto Decimal(10,2),
   Saldo_Resultante Decimal(10,2),
   Fecha Date,
   ID_Cuenta1 varchar(400), --(FK) 
   ID_Cajero1  int, --(FK)
   id_user3 int,
   CONSTRAINT fk_id_user3 FOREIGN KEY (id_user3) REFERENCES Usuario (id_user),
   CONSTRAINT fk_ID_Cuenta1 FOREIGN KEY (ID_Cuenta1) REFERENCES Cuenta_Ahorros (ID_Cuenta),
   CONSTRAINT fk_ID_Cajero1 FOREIGN KEY (ID_Cajero1) REFERENCES Cajero (ID_Cajero)
)
   
   */


    public function up(): void
    {
        Schema::create('transacciones', function (Blueprint $table) {
            //$table->string('DPI',400)->primary()->unique();
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
        Schema::dropIfExists('transacciones');
    }
};
