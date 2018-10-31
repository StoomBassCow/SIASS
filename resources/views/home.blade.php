@extends('layouts.master') 
<H1></H1>
@section('content')
<div></div>
<div class="row" aling="center">
 <div class="col-md-7 col-md-offset-4" >
<h1>      </h1>
<h1>      </h1>

<form class="form-horizontal" method="post">
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

</form>
</div>
</div>
@endsection

