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
    <input type="text" class="search form-control" placeholder="Buscar... Ej: 1503150360">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
  <tr>
            <th scope="col">#</th>
            <th scope="AP">Apellido Paterno</th>
            <th scope="AM">Apellido Materno</th>
            <th scope="N">Nombre</th>
            <th scope="S">Semestre</th>
            <th scope="MT">Matricula</th>
            <th scope="C">Carrera</th>
            <th scope="F">Facultad</th>
            <th scope="SS">Servicio Social</th>
            <th scope="I">Institucion</th>
            <th scope="I">1. Asignación 2. Liberacion </th>
            
    </tr>
   </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Beltran</td>
      <td>Avitia</td>
      <td>Jose Miguel</td>
      <td>10</td>
      <td>1503150470</td>
      <td>Contador Publico</td>
      <td>FECA</td>
      <td>Universitario</td>
      <td>SAT</td>
     <td> <ins><a href="\docs\RPGSS02,C.docx" download=" CARTA DE ASIGNACIÓN DE SERVICIO SOCIAL.docx"> 1. Generar</a></ins>
  <ins><a href="\docs\RPGSS02,G.docx"  download="  CONSTANCIA DE TERMINO DEL SERVICIO SOCIAL.docx"> 2. Generar</a></ins> 
  </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Macías</td>
      <td>Morales</td>
      <td>Mariana Guadalupe</td>
      <td>11</td>
      <td>14632980</td>
      <td>Licenciatura en Administracion</td>
      <td>FECA</td>
      <td>Pasante</td>
      <td>FECA</td>
      <td> <ins><a href="\docs\RPGSS02,C.docx" download=" CARTA DE ASIGNACIÓN DE SERVICIO SOCIAL.docx"> 1. Generar</a></ins>
  <ins><a href="\docs\RPGSS02,G.docx"  download="  CONSTANCIA DE TERMINO DEL SERVICIO SOCIAL.docx"> 2. Generar</a></ins> 
  </td>
    </tr>
   
  </tbody>
</table>




    </div>
    </div>
    </div>
    </div>
    </div>


@endsection