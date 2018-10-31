@extends('layouts.master') 
<H1></H1>
<br>
@section('content')
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-10 col-md-offset-5" >
 <div class="well well-sm">
<form class="form-horizontal" method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" placeholder="Diana">
    </div>
    <div class="form-group col-md-4">
      <label for="apellidos">Apellidos</label>
      <input type="text" class="form-control" id="apellidos" placeholder="Rincón Quiroz">
    </div>
    <div class="form-group col-md-4">
    <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>


   
  <div class="radio">
  <label for="sexo">Sexo  </label>  
  <label><input type="radio" name="sexo" checked>M</label>

  <label><input type="radio" name="sexo">F</label>
</div>

  <div class="radio">
  <label for="discapasidad">Tienes Alguna Discapasidad  </label>  
  <label><input type="radio" name="discapasidad" checked>Si</label>

  <label><input type="radio" name="discapasidad">No</label>
  <textarea id="Mensaje" name="Mensaje" placeholder="Especifica:" rows="7"></textarea>

</div>

  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection
