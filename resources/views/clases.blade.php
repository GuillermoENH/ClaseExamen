@extends('plantilla')
@section('content')

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <header class="deep-purple lighten-2">
        <div class="row">
            <div class="col 12">
                <section class="center-align">
                    <h3 class="text pink color">Clases</h3>
                </section>
                
            </div>
            </div>

            <section class="center-align">
                <div class="container">
                <div class="row">
                    </div>

                    <div class="col l3 m6 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="comande.jpg">
                          <span class="card-action pink darken-4 white-text">Comando</span>
                        </div>
                      </div>
    
                        <div class="col l3 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="sup.jpg">
                              <span class="card-action pink darken-4 white-text">Apoyo</span>
                            </div>
                          </div>
                        </div>
    
                        

                        <div class="col l3 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="pistolero.jpg">
                              <span class="card-action pink darken-4 white-text">Pistolero</span>
                            </div>
                          </div>
                        </div>

                        <div class="col l3 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="swat.jpg">
                              <span class="card-action pink darken-4 white-text">SWAT</span>
                            </div>
                          </div>
                        </div>

                        

                        <div class="col l3 m6 s12">
                            <div class="card">
                              <div class="card-image">
                                <img src="mele.jpg">
                                <span class="card-action pink darken-4 white-text">Berserker</span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col l3 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="Medico.jpg">
                              <span class="card-action pink darken-4 white-text">Medico</span>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </section>

            <section class="center-align">
                <div class="container">
                <div class="row">
                    <div class="col l6 m6 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="demoman.jpg">
                          <span class="card-action pink darken-4 white-text">Demolicion</span>
                        </div>
                      </div>
                    </div>

                    <div class="col l6 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="piro.jpg">
                              <span class="card-action pink darken-4 white-text">Piromano</span>
                            </div>
                          </div>
                        </div>

                        <div class="col l6 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="tirador.jpg">
                              <span class="card-action pink darken-4 white-text">Tirador</span>
                            </div>
                          </div>
                        </div>

                        

                            <div class="col l6 m6 s12">
                              <div class="card">
                                <div class="card-image">
                                  <img src="superviviente.jpg">
                                  <span class="card-action pink darken-4 white-text">superviviente</span>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
            </section>
          </header>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>

@endsection