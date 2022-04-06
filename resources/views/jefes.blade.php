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
                    <h3 class="text pink color">Jefes principales</h3>
                </section>
                
            </div>
            </div>

            <section class="center-align">
                <div class="container">
                <div class="row">
                    <div class="col l4 m6 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="patriarca.jpg">
                          <span class="card-action pink darken-4 white-text">patriarca</span>
                        </div>
                      </div>
                    </div>
    
    
                        <div class="col l4 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="matriarca.jpg">
                              <span class="card-action pink darken-4 white-text">Matriarca</span>
                            </div>
                          </div>
                        </div>
    
                        <div class="col l4 m6 s12">
                            <div class="card">
                              <div class="card-image">
                                <img src="KFPS.jpg">
                                <span class="card-action pink darken-4 white-text">King Fleshpound</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </section>

            <section class="center-align">
                <div class="container">
                <div class="row">
                    <div class="col l6 m8 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="hansvolt.jpg">
                          <span class="card-action pink darken-4 white-text">Dr. Hans Volter</span>
                        </div>
                      </div>
                    </div>

                            <div class="col l6 m8 s12">
                              <div class="card">
                                <div class="card-image">
                                  <img src="abo.jpg">
                                  <span class="card-action pink darken-4 white-text">Abominacion</span>
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