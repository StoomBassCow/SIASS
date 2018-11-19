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
 ENCUESTA DE SATISFACCIÓN DE UNIDADES RECEPTORAS
  </div>
  </strong>
 <br>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
  <tr>
            <th scope="col">#</th>
            <th scope="DOC">Documento</th>
            <th scope="Link">Link (Encuesta en linea Gogle-forms)</th>
            <th scope="GM">Descarga</th>
            <th scope="OL">Opciones de envio</th>
            
    </tr>
   </thead>
  <tbody>
    <tr>
  <th scope="row">1</th>
 <td>Encuesta de Satisfacción de Unidades Receptoras</td>
 <td> <ins><a href="https://goo.gl/forms/mAyfT04E8PA4Ispj1">https://goo.gl/forms/mAyfT04E8PA4Ispj1</a></ins> </td>
 <td><a class=" btn btn-dark btn-m"  href="\descarga\RPGSS02,H.docx" download="ENCUESTA DE SATISFACCIÓN Y DESEMPEÑO DEL SERVICIO SOCIAL.docx">Descargar Archivo</a></td>
   
   <td>

  
         <a href="https://mail.google.com">  <ins> Gmail</ins></a>
         <br>
            <a href="https://outlook.live.com/owa/"> <ins> Outlook</ins></a>
            <br>
            <a href="https://espanol.yahoo.com/"> <ins> Yahoo</ins></a>
   </td>
    </tr>
  </tbody>
</table>

<div class="form-group">
  <span class="col-md-1 col-md-offset-2 text-center"></span>   
  <div class="col-md-8">
  <input id="nombreinstitucion" name="nombreinstitucion" type="text" placeholder="Nombre del Archivo" class="form-control">
  </div>
 </div>

<div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"></span>
 <div class="col-md-8">
 <input id="correoinstitucion" name="correoinstitucion" type="text" placeholder="Correo Electronico de la Institucion" class="form-control">
 </div>
</div>
<div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"></span>
 <div class="col-md-8" >
 
         <select class="form-control" id="facultad_id" >
            <option value="FU" >Facultad</option>
            <option value="FCF">Facultad de Ciencias Forestales (FCF) </option>
            <option value="FCE">Facultad de Ciencias Exactas (FCE)</option>
            <option value="FECA">Facultad de Economía, Contaduría y Administración (FECA)</option>
            <option value="FCQ">Facultad de Ciencias Químicas (FCQ)</option>
            <option value="FADER">Facultad de Derecho y Ciencias Políticas (FADERyCIPOL)</option>
            <option value="FTS">Facultad de Trabajo Social (FTS)</option>
            <option value="ELe">Escuela de Lenguas (ELe)</option>
            <option value="FCCFYD">Facultad de Ciencias de la Cultura Física y Deporte (FCCFyD)</option>
            <option value="FAEO">Facultad de Enfermería y Obstetricia (FAEO)</option>
            <option value="FAMEN">Facultad de Medicina y Nutrición (FAMEN)</option>
            <option value="FAOD">Facultad de Odontología (FAOD)</option>
            <option value="FPYTCH">Facultad de Psicología y Terapia de la Comunicación Humana (FPyTCH)</option>
            <option value="EPEA">Escuela de Pintura, Escultura y Artesanías (EPEA)</option>
            <option value="ESM">Escuela Superior de Música (ESM)</option>
            <option value="FMVZ">Facultad de Medicina Veterinaria y Zootecnia (FMVZ)</option>
            
        </select>                    
 </div>
</div>
<div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"></span>
 <div class="col-md-8">
  <textarea class="form-control" id="messageinstitucion" name="messageinstitucion" placeholder="Escribe aquí el mensaje" rows="7"></textarea>
 </div>
</div>
<div class="form-group">
<span class="col-md-1 col-md-offset-2 text-center"></span>
 <div class="col-md-8">
<input  type="file" id="ejemplo_archivo_1">
</div>

</div>
</div>


<div class="form-group col-md-8 text-right">
<div class= "btn-group btn-group-m">
 <button type="button" class="btn btn-dark btn-m">Enviar</button>
</div>
</div>




    </div>
    </div>
    </div>
    </div>
    </div>


@endsection