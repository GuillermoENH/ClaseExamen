@extends('plantilla')
@section('content')
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head >

    <body>
      <header class="background-color black">
        <div class="row">
        <div class="col 12">
            <section>
                <h3 class="text center align text pink color">Bienvenido a la pagina de Killing Floor</h3>
            </section>
            <section>
                <img src="principal.jpg" width="100%" height="100%">
            </section>
        </div>
        </div>

        <div class="row">
            <div class="col s12 m6">
              <div class="card red darken-4">
                <div class="card-content white-text">
                  <span class="card-title">Clases</span>
                  <p>En esta seccion se mostraran las diferentes clases que existen en el juego</p>
                </div>
                <div class="card-action">
                  <a href="{{route ('cl')}}" class="black-text">ir</a>
                </div>
              </div>
            </div>

            <div class="col s12 m6">
                <div class="card red darken-4">
                  <div class="card-content white-text">
                    <span class="card-title">Dificultad</span>
                    <p>En esta seccion se mostraran las diferentes dificultades que existen en el juego</p>
                  </div>
                  <div class="card-action">
                    <a href="{{route ('di')}}" class="black-text">ir</a>
                  </div>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col s12">
              <div class="card red darken-4">
                <div class="card-content white-text center-align">
                  <span class="card-title">Jefes</span>
                  <p>En esta seccion se mostraran los diferentes Jefes que existen en el juego</p>
                </div>
                <div class="card-action center-align">
                  <a href="{{route ('je')}}" class="black-text">ir</a>
                </div>
              </div>
            </div>            
        </header>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
@endsection