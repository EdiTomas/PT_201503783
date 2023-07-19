@extends('app');
@section('content')
  <div class="container w-25  boder p-4 mt-4">
      <form action="{{route('Ahorro')}}" method ="POST">
      @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email"  required>
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
