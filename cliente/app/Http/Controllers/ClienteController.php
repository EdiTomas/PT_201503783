<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Ahorro;

class ClienteController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'DPI'=>'required'
        ]);
/*
        $table->string('DPI',400)->primary()->unique();
        $table->string('Nombre',400);
        $table->string('Apellido',400);
        $table->string('Razon_social',400);
        $table->string('Municipio',400);
        $table->string('Departamento',400);
        $table->string('Direccion',400);
        $table->string('Telefono',400);
        $table->string('Correo',400)->unique();
        $table->integer('iduser1');
        $table->foreign('iduser1')->references('id')->on('users');
       */


        $cliente = new Cliente;
        $cliente->DPI = $request->DPI;
        $cliente->Nombre = $request->Nombre;
        $cliente->Apellido = $request->Apellido;
        $cliente->Razon_social = $request->Razon_social;
        $cliente->Municipio = $request->Municipio;
        $cliente->Departamento = $request->Departamento;
        $cliente->Direccion = $request->Direccion;
        $cliente->Telefono = $request->Telefono;
        $cliente->Correo = $request->Correo;
        $cliente->iduser1 = 1;
        $cliente->save();
 
        $ahorro = new Ahorro;
        $ahorro->Saldo = $request->Saldo;
        $ahorro->Estado = 1;
        $ahorro->Fecha = $request->Fecha;
        $ahorro->Moneda = $request->Moneda;
        $ahorro->ID_Cliente  = $request->DPI;
        $ahorro->iduser1 = 1;
        $ahorro->save();
        return redirect()->router('Ahorro')->with('success','Se ha insertado correctamente');
   }
}
