<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
              <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
                  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 13px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .header {
    color: #000000;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #000000;
}
        </style>
    </head>
    <body>
       
          @if (Route::has('login'))
                <div class="top-right links"  >
                       @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Acceder</a>
                        <a href="{{ route('register') }}">Registrar</a>
                    @endauth
                </div>
            @endif

            <div class="content" style="background-color: #dddddd;"> 
                <div class="title m-b-md">
                <img src="./img/u5.png"  align="center" > 
              
                <nav class="navbar navbar-dark" style="background-color: #b0b3b4;"  >

     <ul class="nav navbar-nav">
    <li class="active"><a href="/" style="color:#FFF" > <strong>Inicio </strong></a></li>
      <li ><a href="/contacto" style="color:#FFF"> <strong>Contacto </strong></a></li>
      <li><a href="/descargas" style="color:#FFF"> <strong>Descargas</strong></a></li>
      
    </ul>
  </div>
</nav> 
 </div>

 
 <div class="row">
 <div class="col-md-6 col-md-offset-3" >

    
    <legend class="text-center header"> <Strong> CONTACTO</Strong></legend>
 <p class="text-justify"> 
 Si tienes alguna duda, sugerencia, comentario, queja o inconformidad sobre la dirección en general o alguna coordinación,
 puedes mandarnos tu inquietud a través de este formulario.
 Por favor verifica tu correo electrónico, ya que te responderemos por ese medio.
</p>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-6 col-md-offset-3" >
 <div class="well well-sm">
 <form class="form-horizontal" method="post">

 <fieldset>
    <legend class="text-center header"></legend>
    
<div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"> <i class="far fa-clipboard bigicon"></i></span>
 <div class="col-md-8">
 <input id="matricula" name="matricula" type="text" placeholder="Matricula" class="form-control">
 </div>
</div>

 
 <div class="form-group">
  <span class="col-md-1 col-md-offset-2 text-center"><i class="far fa-user bigicon"></i></span>
  <div class="col-md-8">
  <input id="apellidopaterno" name="apellidopaterno" type="text" placeholder="Apellido Paterno" class="form-control">
   </div>
 </div>


 <div class="form-group">
  <span class="col-md-1 col-md-offset-2 text-center"><i class="far fa-user bigicon"></i></span>
  <div class="col-md-8">
  <input id="apellidomaterno" name="apellidomaterno" type="text" placeholder="Apellido Materno" class="form-control">
   </div>
 </div>

 <div class="form-group">
  <span class="col-md-1 col-md-offset-2 text-center"><i class="far fa-user bigicon"></i></span>   
  <div class="col-md-8">
  <input id="nombre" name="nombre" type="text" placeholder="Nombre (s)" class="form-control">
  </div>
 </div>

<div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"><i class="far fa-envelope bigicon"></i></span>
 <div class="col-md-8">
 <input id="correo" name="correo" type="text" placeholder="Correo Electronico" class="form-control">
 </div>
</div>


<div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"><i class="far fa-building bigicon" ></i></span>
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
 <span class="col-md-1 col-md-offset-2 text-center"><i class="far fa-comment bigicon"></i></span>
 <div class="col-md-8">
  <textarea class="form-control" id="message" name="message" placeholder="Escribe aquí tus comentarios." rows="7"></textarea>
 </div>
</div>

<div class="form-group">
<div class="col-md-12 text-center">

<button type="submit" class="btn btn-dark btn-lg">Enviar</button>
</div>
</div>
  </fieldset>
     </form>
    </div>
    </div>
    </div>
</div>
</div>
   
    <br>
</form>   
</div>  
</div>     

                <div class="links" align="center"style="background-color: #b0b3b4;">
               
                    <a href="/contacto">Contacto</a>
                    <a href="https://laracasts.com">Organigrama</a>
                    <a href="https://laravel-news.com">Sobre esta PAGINA</a>
                    <a href="https://nova.laravel.com">Mapa del sitio</a>
                                  </div>
            </div>
            
            
        <footer class="main-footer" >
 <p align="Center">
  <img src="./img/logo-ujed.png"  align="left" >
    <img src="./img/15.png" align="ceter" width="183" height="60.3" >    
    <img src="./img/14.png" align="right" width="146.66" height="43.33"  >
    <div class="float-right d-none d-sm-inline">

    <p align="center" > © Universidad Juárez del Estado de Durango | Dirección de Extensión de los Servicios Universitarios 
Carr. a Mazatlán km. 5.5 Y Circuito Universitario. S/N C.P. 34120   Tel y Fax (618) 811 9614 - Tel. Directo (618) 827 1249
  </p>
  </div>
  

    </p>
 
  </footer>
    </body>
</html>
