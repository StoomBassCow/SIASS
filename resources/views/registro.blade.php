@extends('layouts.master') 
<H1></H1>
<br>
@section('content')
<br>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-12 col-md-offset-6" >
 <div class="well well-sm">
<form class="form-horizontal" method="post">
  <div class="form-row">

    <div class="form-group col-md-12"> 
    <p > <strong> 1. DATOS DE PRESTADOR DE SERVICIO SOCIAL</strong></p> 
  </div> 
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
  <label for="sexo">Sexo</label>  
  <br>
  <label class="mr-sm-2"><input class="mr-sm-2" type="radio" name="sexo" checked>M</label>

  <label class="mr-sm-2"><input  class="mr-sm-2" type="radio" name="sexo">F</label>
</div>

  <div class="radio">
  <label for="discapasidad">Tienes alguna descapasidad </label>  
  <br>
  <label class="mr-sm-2"><input class="mr-sm-2" type="radio" name="discapasidad" checked>SI</label>
  <label class="mr-sm-2"><input class="mr-sm-2" type="radio" name="discapasidad">NO</label>

  <br>
      <label for="especificar">Especificar </label>
      <input type="text" class="form-control" id="especificar" placeholder="Especifique su discapasidad...">
    </div>
   </div>

<div class="form-row">
    <div class="form-group col-md-3">
      <label for="semestre">Semestre</label>
     
      <select class="form-control" id="facultad_id"  >
            <option value="1" >1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
           
            
        </select>                    
    </div>
    <div class="form-group col-md-3">
      <label for="matricula">Matricula</label>
      <input type="text" class="form-control" id="matricula" placeholder="1503150360">
      
    </div>
    <div class="form-group col-md-3">
    <label for="carrera">Carrera</label>
    <input type="text" class="form-control" id="carrera" placeholder="Licenciatura en Nutricion">    
   
      </div>
      <div class="form-group col-md-3">
    <label for="telefono">Telefono:</label>
      <input type="text" class="form-control" id="telefono" placeholder="6181416048">
   
      </div>
      <div class="form-group col-md-12">
      <label for="Domicilio">Domicilio</label>
      <input type="text" class="form-control" id="domicilio" placeholder="Carr. a Mazatlán km. 5.5 Y Circuito Universitario. S/N C.P. 34120">
</div>
<br>

  <div class="form-group col-md-12"> 
  <br>
    <p> <strong> 2. DATOS DE LA INSTITUCIÓN RECEPTORA DEL SERVICIO SOCIAL</strong></p> 
  </div> 

 <div class="form-group col-md-4">  
      <label for="nombreinstitucion">Nombre de la Institucion</label>
      <input type="text" class="form-control" id="nombreinstitucion" placeholder="Instituto Mexicano del Seguro Social IMSS">
    </div>
    <div class="form-group col-md-4">
    <label for="telefonosinstitucion">Telefonos Institucion:</label>
      <input type="text" class="form-control" id="telefonosinstitucion" placeholder="8184560">
</div>
    <div class="form-group col-md-4">
    <label for="emailinstitucion">Email Institucion</label>
      <input type="email" class="form-control" id="emailinstitucion" placeholder="Email">
</div>
<div class="form-group col-md-12">
      <label for="Ubicacion">Ubicacion</label>
      <input type="text" class="form-control" id="ubicacion" placeholder="Carr. a Mazatlán km. 5.5 Y Circuito Universitario. S/N C.P. 34120">
         </div>

<div class="form-group col-md-12"> 
  <br>
    <p> <strong> 3. DATOS DEL PROGRAMA EN EL QUE PARTICIPARÁ EL ALUMNO</strong></p> 
  </div> 

 <div class="form-group col-md-4">  
      <label for="nombreprograma">Nombre del programa</label>
      <input type="text" class="form-control" id="nombreprograma" placeholder="Instituto Mexicano del Seguro Social IMSS">
    </div>
   
    <div class="form-group col-md-4">
      <label for="sector">Sector</label>
     
      <select class="form-control" id="sector"  >
      <option value="sector">Seleccione Sector...</option>
            <option value="federal" >Federal</option>
            <option value="estatal">Estatal</option>
            <option value="social">Social</option>
            <option value="descentralizado">Descentralizado</option>
            <option value="educacionsuperior">Educación superior</option>
            <option value="privado">Privado</option>
          
       </select>  
       </div>        

        <div class="form-group col-md-4">  
      <label for="responsableprograma">Responsable del Programa</label>
      <input type="text" class="form-control" id="responsableprograma" placeholder="Dr.Juan Alvarez Garcias">
    </div>
 
    <div class="form-group col-md-12">  
      <label for="actividadesprograma">Actividades que desarrollará el prestador: </label>
      <input type="text" class="form-control" id="actividadesprograma" placeholder="Especificar las actividades a realizar...">
    </div>


    <div class="form-group col-md-12"> 
  <br>
    <p> <strong> 4. DATOS DE LA COORDINACIÓN</strong></p> 
  </div> 
  <div class="form-group col-md-12">
   <div class="form-inline">
      
   <label class="mr-sm-2" for="diaI">Periodo de prestación del:</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="diaI">
   
            <option value="diaI">Día</option>
            <option value="I1" >1</option>
            <option value="I2">2</option>
            <option value="I3">3</option>
            <option value="I4">4</option>
            <option value="I5">5</option>
            <option value="I6">6</option>
            <option value="I7">7</option>
            <option value="I8">8</option>
            <option value="I9">9</option>
            <option value="I10">10</option>
            <option value="I11">11</option>
            <option value="I12">12</option>
            <option value="I13" >13</option>
            <option value="I14">14</option>
            <option value="I15">15</option>
            <option value="I16">16</option>
            <option value="I17">17</option>
            <option value="I18">18</option>
            <option value="I19">19</option>
            <option value="I20">20</option>
            <option value="I21">21</option>
            <option value="I22">22</option>
            <option value="I23">23</option>
            <option value="I24">24</option>            
            <option value="I25">25</option>
            <option value="I26">26</option>
            <option value="I27">27</option>
            <option value="I28">28</option>
            <option value="I29">29</option>
            <option value="I30">30</option>
            <option value="I31">31</option>
          
       </select> 

       <label class="mr-sm-2" for="mesI">de</label>
       <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="mesI">
   
            <option value="mesI">Mes</option>
            <option value="I1" >Enero</option>
            <option value="I2">Febrero</option>
            <option value="I3">Marzo</option>
            <option value="I4">Abril</option>
            <option value="I5">Mayo</option>
            <option value="I6">Junio</option>
            <option value="I7">Julio</option>
            <option value="I8">Agosto</option>
            <option value="I9">Septiembre</option>
            <option value="I10">Octubre</option>
            <option value="I11">Noviembre</option>
            <option value="I12">Diciembre</option>
          </select>

           <label class="mr-sm-2" for="diaT">al</label>
       <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="diaT">
   
       <option value="diaT">Día</option>
            <option value="T1" >1</option>
            <option value="T2">2</option>
            <option value="T3">3</option>
            <option value="T4">4</option>
            <option value="T5">5</option>
            <option value="T6">6</option>
            <option value="T7">7</option>
            <option value="T8">8</option>
            <option value="T9">9</option>
            <option value="T10">10</option>
            <option value="T11">11</option>
            <option value="T12">12</option>
            <option value="T13" >13</option>
            <option value="T14">14</option>
            <option value="T15">15</option>
            <option value="T16">16</option>
            <option value="T17">17</option>
            <option value="T18">18</option>
            <option value="T19">19</option>
            <option value="T20">20</option>
            <option value="T21">21</option>
            <option value="T22">22</option>
            <option value="T23">23</option>
            <option value="T24">24</option>            
            <option value="T25">25</option>
            <option value="T26">26</option>
            <option value="T27">27</option>
            <option value="T28">28</option>
            <option value="T29">29</option>
            <option value="T30">30</option>
            <option value="T31">31</option>
          </select>

           <label class="mr-sm-2" for="mesT">de:</label>
       <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="mes2T">
   
            <option value="mesT">Mes</option>
            <option value="T1" >Enero</option>
            <option value="T2">Febrero</option>
            <option value="T3">Marzo</option>
            <option value="T4">Abril</option>
            <option value="T5">Mayo</option>
            <option value="T6">Junio</option>
            <option value="T7">Julio</option>
            <option value="T8">Agosto</option>
            <option value="T9">Septiembre</option>
            <option value="T10">Octubre</option>
            <option value="T11">Noviembre</option>
            <option value="T12">Diciembre</option>
          </select>

            <label class="mr-sm-2" for="año">de:</label>
       <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="año">
   
            <option value="año">año</option>
            <option value="T1" >2018</option>
            <option value="T2">2019</option>
            <option value="T3">2020</option>
            <option value="T4">2021</option>
            <option value="T5">2022</option>
            <option value="T6">2023</option>
            <option value="T7">2024</option>
            <option value="T8">2025</option>
            <option value="T9">2026</option>
            <option value="T10">2027</option>
            <option value="T11">2028</option>
            <option value="T12">2029</option>
            <option value="T13">2030</option>
          </select>
        </div>        
            
   </div>
   <div class="form-group col-md-12">
       <div class="radio">
  <label for="tiposs">Servicio Social:</label>  
  <br>
  <label class="mr-sm-2"><input class="mr-sm-2" type="radio" name="tiposs" checked>Universitario</label>

  <label class="mr-sm-2"><input class="mr-sm-2" type="radio" name="tiposs">Pasante</label>
</div>
</div>
 
<div class="form-group col-md-12">
   <div class="form-inline">
      
   <label class="mr-sm-2" for="duracion">Duracion del Servicio Social:</label>
    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="duracion">
    <label class="mr-sm-2" for="horas">horas</label>
    </div>
    </div>


<div class="form-group col-md-12">
    <div class="radio">
  <label for="economico">Se proporcionará estímulo económico:</label>  
  <br>
  <label class="mr-sm-2"><input class="mr-sm-2" type="radio" name="economico" checked>SI</label>

  <label class="mr-sm-2"><input class="mr-sm-2" type="radio" name="economico">NO</label>
</div>
</div>

<div class="form-group col-md-12">
   <div class="form-inline">
      
   <label class="mr-sm-2" for="fecha">Durango, Dgo. a:</label>
    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="fecha">
    <label class="mr-sm-2" for="fechadia">de</label>
    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="fechadia">
    <label class="mr-sm-2" for="fechaaño">del</label>
    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="fechaaño">
    
    </div>
    </div>










<div class="form-group col-md-12 text-right">
<div class= "btn-group btn-group-xs">
 <button type="button" class="btn btn-dark btn-m">Dar de Alta</button>
</div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>

@endsection
