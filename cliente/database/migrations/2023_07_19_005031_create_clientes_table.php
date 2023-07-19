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
     Create table Cliente(
        DPI  varchar(400) primary key,
        Pasaporte  varchar(400),
        Nombre varchar(400), 
        Apellido varchar(400),
        Razon_social varchar(400),
        Municipio varchar(400),
        Departamento varchar(400),
        Direccion varchar(400),
        Telefono varchar(400),
        Correo  varchar(400),
        id_user1 int,
        CONSTRAINT fk_id_user FOREIGN KEY (id_user1) REFERENCES Usuario (id_user)
     )*/


    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('DPI');
            $table->string('Pasaporte');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Apellido');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
