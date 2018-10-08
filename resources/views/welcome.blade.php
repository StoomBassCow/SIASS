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
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content" style="background-color: #dddddd;"> 
                <div class="title m-b-md">
                <img src="./img/u5.png"  align="center" > 
              
                <nav class="navbar navbar-dark" style="background-color: #b0b3b4;"  >

     <ul class="nav navbar-nav">
    <li class="active"><a href="#" style="color:#FFF" > <strong>Inicio </strong></a></li>
      <li ><a href="#" style="color:#FFF"> <strong>Pagina 1 </strong></a></li>
      <li><a href="#" style="color:#FFF"> <strong>Pagina 2 </strong></a></li>
      <li><a href="#" style="color:#FFF"> <strong>Pagina 3 </strong></a></li>
    </ul>
  </div>
</nav> 
 </div>

 <p> <strong>COORDINACIÓN DE SERVICIO SOCIAL</strong>.</p>
 <br>
 <p align="left"> 
El Servicio Social es una vía complementaria de la formación integral de los alumnos, 
al ponerlos en contacto con el sector social y el mercado laboral, y una importante fuente 
de retroalimentación curricular para la Universidad Juárez del Estado de Durango (UJED).
</p>

    <br>
    <p> <strong>Objetivo General</strong>.</p>
    <br>
 <p align="left"> 
 Implementar un Programa Institucional de Servicio Social que propicie normar, planear, coordinar, supervisar, 
 evaluar y dar seguimiento a esta actividad como complemento en la formación integral del estudiante, así mismo 
 que le permita desarrollar la función social que como futuro profesionista debe realizar, en beneficio tanto del 
 desarrollo individual como de su comunidad.
</p>

<br>
    <p> <strong>Objetivos Especificos</strong>.</p>
    <br>
 <p align="left"> 
Operar el PISS como un factor de vinculación de las funciones sustantivas en la UJED y así formar integralmente a los alumnos, reforzado las actitudes solidarias con la comunidad.
<br> <br> Reformar y actualizar la normatividad referente al servicio social para que sea acorde al contexto social y privado.
<br> <br> Establecer acciones institucionales para la incorporación del S.S en la Currícula con la participación de los académicos y estudiantes.
<br> <br> Formación de Tutores de S.S. para contar con recursos humanos en la revisión curricular.
<br> <br> Establecer mecanismos para la programación, evaluación, seguimiento e impacto del PISS y proyectos de S.S.
</p>

<br>
    <p> <strong>Acciones</strong>.</p>
   <p align="left"> 
 <br> Impartir Diplomado en S.S.
 <br> <br> Realizar un foro para analizar la normatividad que rige la prestación del Servicio Social en la UJED, así como reformar y adecuar los reglamentos internos de las U.A.
 <br> <br> Implementación del seminario.

</p>



  
                 

                <div class="links" align="center"style="background-color: #b0b3b4;">
               
                    <a href="https://laravel.com/docs">Contacto</a>
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
