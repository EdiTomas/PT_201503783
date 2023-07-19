@extends('app');

@include('nav');

@section('content')

<!-- Button trigger modal -->
<div class="container w-10   mt-4" >

<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Transacciones
</button>
</div>  
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="transacciones">Agregar Transacciones</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form>

  <div class="row">
    <div class="col">
         <input type="text" class="form-control" placeholder="First name" aria-label="First name">
    </div>
    <div class="col">
         <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
    </div>
  </div>

  <div class="mb-6">
          <label for="name" class="form-label">Nombre del cliente</label>
          <input type="text" class="form-control" name="name" >
  </div>
 
  <div class="mb-3">
    <label for="saldo" class="form-label">Saldo</label>
    <input type="number" class="form-control" name="Saldo" >
  </div>
  <div class="mb-3">
    <label for="Estado" class="form-label">Estado</label>
    <input type="text" class="form-control" name="Estado" >
  </div>
  <div class="mb-3">
    <label for="Fecha" class="form-label">Fecha</label>
    <input type="number" class="form-control" name="Fecha" >
  </div>
  <div class="mb-3">
    <label for="Moneda" class="form-label">Moneda</label>
    <input type="number" class="form-control" name="Moneda" >
  </div>
  
</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
<div class="container w-10   mt-4" >
<table   class="table"  >
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">ID_Transacción</th>
      <th scope="col">Tipo Transaccion</th>
      <th scope="col">Monto</th>
      <th scope="col">Saldo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Cuenta</th>
      <th scope="col">Cajero</th>
      <th scope="col">Accion</th>





    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th >B45678</th>
      <td>Deposito</td>
      <td>5000</td>
      <td>10000</td>
      <td>18/07/2023</td>
      <td>A1-0124541</td>
      <td>Ruben</td>
      <td>
        <button type="button" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-secondary">Eliminar</button>
      </td>
    
    </tr>
    <tr>
    <th scope="row">2</th>
    <th >B45678</th>
    <td>Deposito</td>
      <td>5000</td>
      <td>10000</td>
      <td>18/07/2023</td>
      <td>A1-0124541</td>
      <td>Alejandro</td>
      <td>
        <button type="button" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-secondary">Eliminar</button>
      </td>
    
    </tr>
    <tr>
    <th scope="row">3</th>
    <th >B45678</th>
    <td>Retiro</td>
      <td>5000</td>
      <td>5000  </td>
      <td>18/07/2023</td>
      <td>A1-0124541</td>
      <td>Alejandro</td>
      <td>
        <button type="button" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-secondary">Eliminar</button>
      </td>
    
    </tr>
  </tbody>
</table>
</div>

@endsection




