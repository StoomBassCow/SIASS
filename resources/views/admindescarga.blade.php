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
 <div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="Buscar... Cedula de Asiganación Borrador Del Servicio Social">
</div>
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
 <td>Cedula de Asiganación Borrador Del Servicio Social</td>
  <td><a class="text-right btn btn-dark btn-sm"  href="\descarga\RPGSS02,B.docx" download="CEDULA DE ASIGNACIÓN BORRADOR DE SERVICIO SOCIAL.docx"> Descargar</a></td>
  <td><input  type="file" id="ejemplo_archivo_1"></td>
  <td><a href="#" class="btn btn-dark btn-sm">Actualizar</a></td>
    </tr>

    <tr>
    <th scope="row">2</th>
   <td> Informes De Servicio Social De Pasante</td>
  <td> <a class=" btn btn-dark btn-sm"  href="\descarga\RPGSS02,D.docx"   download="INFORMES DE SERVICIO SOCIAL DE PASANTE.docx">Descargar</a></td>
  <td><input  type="file" id="ejemplo_archivo_1"></td>
   <td> <a href="#" class="btn btn-dark btn-sm">Actualizar</a></td>
  </tr>

  <tr>
  <th scope="row">3</th>
  
<td>Registro De Conteo De Horas De Servicio Social</td> 
<td><a class="btn btn-dark btn-sm"  href="\descarga\RPGSS02,E.docx" download="REGISTRO DE CONTEO DE HORAS DE SERVICIO SOCIAL.docx">Descargar</a></td>
<td> <input  type="file" id="ejemplo_archivo_1"></td>
<td><a href="#" class="btn btn-dark btn-sm">Actualizar</a></td>
  </tr>

  <tr>
  <th scope="row">4</th>
  <td>Informe De Actividades Del CSSUA</td>
  <td><a class=" btn btn-dark btn-sm"  href="\descarga\RPGSS01,K.doc" download="INFORME DE ACTIVIDADES DEL CSSUA.docx"> Descargar</a></td>
  <td><input  type="file" id="ejemplo_archivo_1"></td>
  <td><a href="#" class="btn btn-dark btn-sm">Actualizar</a></td>
  </tr>
<tr>
<th scope="row">5</th>

 <td>Enuesta De Satisfaccion Y Desempeño Del Servicio Social</td>
  <td><a class=" btn btn-dark btn-sm"  href="\descarga\RPGSS02,H.docx" download="ENCUESTA DE SATISFACCIÓN Y DESEMPEÑO DEL SERVICIO SOCIAL.docx">Descargar</a></td>
  <td><input  type="file" id="ejemplo_archivo_1"></td>
   <td><a href="#" class="btn btn-dark btn-sm">Actualizar</a></td>
</tr>
   
   
  </tbody>
</table>
<td><a href="/descargas" class="btn btn-dark btn-m">Ir a Descargas</a></td>



    </div>
    </div>
    </div>
    </div>
    </div>


@endsection