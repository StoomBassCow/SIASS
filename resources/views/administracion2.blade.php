@extends('layouts.master') 
<H1></H1>
@section('content')
<div></div>
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-15 col-md-offset-6" >
 <div class="well well-sm">
 <strong><div class="text-center text-header" alings="text-center">
 CONSTANCIA DE TERMINO DEL SERVICIO SOCIAL
  </div>
  </strong>
  <br>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
  <tr>
            <th scope="col">#</th>
            <th scope="DOC">Documento</th>
            <th scope="D">Descargar</th>
            <th scope="SA">Subir Archivo</th>
            <th scope="AC">Actalizar</th>
    </tr>
   </thead>
  <tbody>
    <tr>
  <th scope="row">1</th>
 <td>Constancia de Termino del Servicio Social</td>
  <td><a class="text-right btn btn-dark btn-m" href="\docs\RPGSS02,G.docx"  download="  CONSTANCIA DE TERMINO DEL SERVICIO SOCIAL.docx"> Descargar</a></td>
  <td><input  type="file" id="ejemplo_archivo_1"></td>
  <td><a href="#" class="btn btn-dark btn-m">Actualizar</a></td>
    </tr>

   
   
  </tbody>
</table>




    </div>
    </div>
    </div>
    </div>
    </div>

@endsection

