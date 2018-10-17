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
  </div>
</nav> 
 </div>
 <div class="row">
 <div class="col-md-6 col-md-offset-3" >
<fieldset>
    <legend class="text-center header"> <Strong> DESCARGAS</Strong></legend>
  <div>
  <p class="text-left">Cedula de Asiganación Borrador Del Servicio Social</p>
  <a href="\descarga\RPGSS02,B.docx" download="CEDULA DE ASIGNACIÓN BORRADOR DE SERVICIO SOCIAL.docx"> <ins> Descargar</ins></a></div>
  <br>
  <legend>
   </legend>
   <br>
   <p class="text-left">Informes De Servicio Social De Pasante</p>
  <div><a href="\descarga\RPGSS02,D.docx" download="INFORMES DE SERVICIO SOCIAL DE PASANTE.docx"><ins> Descargar</ins></a></div>
  <br>
  <legend>
   </legend>
   <br>
   <p class="text-left">Registro De Conteo De Horas De Servicio Social</p>
  <div ><a href="\descarga\RPGSS02,E.docx" download="REGISTRO DE CONTEO DE HORAS DE SERVICIO SOCIAL.docx"><ins> Descargar</ins></a></div>
  <br>
  <legend>
   </legend>
   <br>
  <p class="text-left">Enuesta De Satisfaccion Y Desempeño Del Servicio Social</p> 
  <div><a href="\descarga\RPGSS02,H.docx" download="ENCUESTA DE SATISFACCIÓN Y DESEMPEÑO DEL SERVICIO SOCIAL.docx"><ins> Descargar</ins></a></div>
  <br>
  <legend>
   </legend>
   <br>
   <p class="text-left">Informe De Actividades Del CSSUA</p>
  <div><a href="\descarga\RPGSS01,K.doc" download="INFORME DE ACTIVIDADES DEL CSSUA.docx"><ins> Descargar</ins></a></div>
  <br>
  <legend>
   </legend>
 
             

<br>
<br>
<br><br>

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
   
</html> </body>
