@extends('layouts.master') 
<H1></H1>
@section('content')
<div></div>
<br>
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="col-md-12 col-md-offset-6" >
 <div class="well well-sm">
<form class="form-horizontal" method="post" aling="center">
  <div class="form-row">
 <div class="card" aling="center">
  <div class="card-header" aling="center">
  Directorio de Unidades Receptoras
  </div>
  <div class="card-body"aling="center">
    <p class="card-text">Descargar el archivo "Directorio de Unidades Receptoras" Modificarlo conlos datos de La Faultad Correspondiente.</p>
    <a href="\docs\RPGSS02,A.docx" class="btn btn-primary">Descargar</a>
    <a href="#" class="btn btn-primary">Publicar</a>
   
    <input  type="file" id="ejemplo_archivo_1">
  
  
  </div>
</div>

  </div>

</form>
</div>
</div>
</div>
</div>
</div>

@endsection

