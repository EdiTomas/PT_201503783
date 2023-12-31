@extends('app');

@include('nav');

@section('content')

<!-- Button trigger modal -->
<div class="container w-10   mt-4" >

<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Crear Cuenta
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear Cuenta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form action="{{route('Ahorro')}}" method ="POST">
    @csrf
    <div class="row">
    <div class="col">
         <input type="text" class="form-control" name="Nombre" placeholder="Nombre*" aria-label="Nombre" required>
    </div>
    <div class="col">
         <input type="text" class="form-control" name="Apellido" placeholder="Apellido*" aria-label="Apellido" required>
    </div>
  </div>

  <div class="row">
    <div class="col">
         <input type="text" class="form-control" name="DPI" placeholder="Dpi /Pasaporte*" aria-label="Dpi" required>
    </div>
    <div class="col">
         <input type="number" class="form-control" name="Saldo" placeholder="Saldo*" aria-label="Saldo" required>
    </div>
  </div>

  <div class="row">
    <div class="col">
         <input type="date" class="form-control" name="Fecha" placeholder="Fecha*" aria-label="Fecha" required>
    </div>
    <div class="col">
         <input type="text" class="form-control" name="Municipio" placeholder="Municipio*" aria-label="Municipio" required>
    </div>
  </div>

  <div class="row">
    <div class="col">
         <input type="text" class="form-control"  name="Razon_social" placeholder="Razon Social*" aria-label="Razon Social" required>
    </div>
    <div class="col">
         <input type="text" class="form-control" name="Departamento" placeholder="Departamento*" aria-label="Departamento" required>
    </div>
  </div>

  <div class="row">
    <div class="col">
         <input type="text" class="form-control" name="Direccion" placeholder="Direccion*" aria-label="Razon Social" required>
    </div>
    <div class="col">
         <input type="text" class="form-control" name="Telefono" placeholder="Telefono*" aria-label="Telefono" required>
    </div>
  </div>
  <div class="row">
    <div class="col">
       <select name="Moneda" id="pet-select">
                  <option value="">--Eliga la Moneda--</option>
                  <option value="GTQ">GTQ</option>
                  <option value="USD">USD</option>
        </select>
    </div>
    <div class="col">
    <input type="email" class="form-control" name="Correo" placeholder="Correo*" aria-label="Correo" required>
    
    </div>
    
  </div>

        <button type="submit" class="btn btn-primary">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      
</form>
      </div>
      <div class="modal-footer">
      </div>
  
    </div>
  </div>
</div>


<div class="container w-10   mt-4" >
<table   class="table"  >
  <thead>
    <tr>
      <th scope="col">#ID_CUENTA</th>
      <th scope="col">Saldo</th>
      <th scope="col">Moneda</th>
      <th scope="col">Estado</th>
      <th scope="col">Fecha</th>
      <th scope="col">Cliente</th>
      <th scope="col">Accion</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($clientes as $client)
    

    <th scope="row">1</th>
      <td>5.00</td>
      <td>GTQ</td>
      <td>Activo</td>
      <td>18/07/2023</td>
      <td>{{$client->Nombre}}</td>
      <td>
        <button type="button" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-secondary">Eliminar</button>
      </td>

    @endforeach


    
    </tr>
    
  </tbody>
</table>
</div>

@endsection




