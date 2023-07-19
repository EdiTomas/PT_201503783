@extends('app');


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
  <form>
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
      <th scope="row">1</th>
      <td>5.00</td>
      <td>GTQ</td>
      <td>Activo</td>
      <td>18/07/2023</td>
      <td>Edi</td>
      <td>
        <button type="button" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-secondary">Eliminar</button>
      </td>
    
    </tr>
    <tr>
      <th scope="row">1</th>
        <td>5.00</td>
        <td>GTQ</td>
        <td>Activo</td>
        <td>18/07/2023</td>
        <td>Edi</td>
        <td>
          <button type="button" class="btn btn-primary">Actualizar</button>
          <button type="button" class="btn btn-secondary">Eliminar</button>
        </td>
    
    </tr>
    <tr>
    <th scope="row">1</th>
      <td>5.00</td>
      <td>USD</td>
      <td>Inactivo</td>
      <td>18/07/2023</td>
      <td>Edi</td>
      <td>
        <button type="button" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-secondary">Eliminar</button>
      </td>
    
    </tr>
  </tbody>
</table>
</div>

@endsection




