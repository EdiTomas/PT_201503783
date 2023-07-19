<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     *   
     */

   
 /*
 
 Create table Cuenta_Ahorros(
        ID_Cuenta  varchar(400) primary key,
        Saldo decimal(10,2),
        Estado int,
        Fecha date,
        Moneda decimal(10,2) ,
        ID_Cliente varchar(400),  --(FK)
        id_user2 int,--(FK)
        CONSTRAINT fk_id_user2 FOREIGN KEY (id_user2) REFERENCES Usuario (id_user),
        CONSTRAINT fk_ID_Cliente FOREIGN KEY (ID_Cliente) REFERENCES Cliente (DPI)
    )
 */


    public function up(): void
    {
        Schema::create('ahorros', function (Blueprint $table) {
            $table->id('ID_Cuenta')->primary()->unique()->increments();
            $table->decimal('Saldo',10,2);
            $table->integer('Estado');
            $table->date('Fecha');
            $table->string('Moneda',20);
            $table->string('ID_Cliente',400);
            $table->integer('iduser2');
            $table->foreign('ID_Cliente')->references('DPI')->on('clientes');
            $table->foreign('iduser2')->references('id')->on('Users');
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
