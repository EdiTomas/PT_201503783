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
  <form>

  <div class="row">
    <div class="col">
         <input type="text" class="form-control" placeholder="Nombre*" aria-label="Nombre">
    </div>
    <div class="col">
         <input type="text" class="form-control" placeholder="Apellido*" aria-label="Apellido">
    </div>
  </div>

  <div class="row">
    <div class="col">
         <input type="text" class="form-control" placeholder="Dpi /Pasaporte*" aria-label="Dpi">
    </div>
    <div class="col">
         <input type="number" class="form-control" name="Saldo" placeholder="Saldo*" aria-label="Saldo" >
    </div>
    

  </div>

  <div class="row">
    <div class="col">
         <input type="date" class="form-control" placeholder="Fecha*" aria-label="Fecha">
    </div>
    <div class="col">
         <input type="text" class="form-control" placeholder="Municipio*" aria-label="Municipio">
    </div>
  </div>

  <div class="row">
    <div class="col">
         <input type="text" class="form-control" placeholder="Razon Social*" aria-label="Razon Social">
    </div>
    <div class="col">
         <input type="text" class="form-control" placeholder="Departamento*" aria-label="Departamento">
    </div>
  </div>

  <div class="row">
    <div class="col">
         <input type="text" class="form-control" placeholder="Direccion*" aria-label="Razon Social">
    </div>
    <div class="col">
         <input type="text" class="form-control" placeholder="Telefono*" aria-label="Telefono">
    </div>
  </div>
  <div class="row">
    <div class="col">
       <select name="pets" id="pet-select">
                  <option value="">--Eliga la Moneda--</option>
                  <option value="GTQ">GTQ</option>
                  <option value="USD">USD</option>
        </select>


    </div>




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




