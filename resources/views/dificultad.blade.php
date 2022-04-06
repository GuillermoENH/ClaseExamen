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

        <div class="row">
            <div class="col 12">
                <section class="center-align">
                    <h3 class="text pink color">Dificultades del juego</h3>
                </section>
                
            </div>
            </div>

        <section class="center-align blue lighten-3">
            <div class="container">
            <div class="row">
                <div class="col l3 m6 s12">
                  <div class="card">
                    <div class="card-image">
                      <img src="facil.jpg">
                      <span class="card-action pink darken-4 white-text">Principiante</span>
                    </div>
                    <div class="card-content">
                        <p>Esta dificultad es recomendada para los jugadores por 1era vez ya que necesitan conocer el mapa antes de entrar de lleno a la verdadera jugabilidad. Los especímenes en esta dificultad son extremádamente frágiles teniendo un 50% de su salud base. La cantidad de especímenes por oleada es bastante baja, tienen el 30% de su daño original y dan altas recompensas cuando mueren. Los especímenes se mueven al 95% de su velocidad y solo tu armadura recibe todo el daño de sus ataques, además de los gritos de la Siren, las bolas de fuego del Husk y cualquier cosa del Patriarca. Los jugadores aparecen con £300. También hay una extensión del tiempo de la Mercader del 50%, dándote más de 30 segundos para prepararte para otra oleada. No se necesitan tácticas para ganar esta dificultad sin importar si estás jugando con un escuadrón o solo. Inclusive el Patriarca, comparado con otras dificultades, debería ser fácil de matar.</p>
                        <br><br>
                    </div>
                  </div>
                </div>


                    <div class="col l3 m6 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="medio.jpg">
                          <span class="card-action pink darken-4 white-text">Normal</span>
                        </div>
                        <div class="card-content">
                          <p>Esta dificultad es para jugadores que ya hayan jugado en principiante(beginner) unas cuantas veces y piensen que están listos para algo más desafiante. Los especímenes tienen una base de salud y daño normal (lo que es un cambio significativo). Los jugadores aparecen con £250. La recompensa de cada espécimen es reducida a la mitad en comparación con el nivel principiante(beginner). El Patriarca es ahora un desafío sólido para aquellos buscando algo más complejo. El modo Normal requiere trabajo en equipo y no debería ser subestimado por el jugador que recién empieza.</p>
                              <br><br>
                        </div>
                      </div>
                    </div>

                    <div class="col l3 m6 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="Dificil.jpg">
                          <span class="card-action pink darken-4 white-text">Dificil</span>
                        </div>
                        <div class="card-content">
                          <p>Este modo es para jugadores que han subido de nivel sus perks(clases) un poco y sienten que la dificultad normal ya no es problema. La cantidad de especímenes por oleada se ha incrementado y su salud aumentado un 35% de lo normal junto con un 25% más de daño.También tienen 15% más de velocidad de movimiento y no desaparecen al pasar un rato. Los jugadores comienzan con £250. Matar al Patriarca requiere planeación previa y trabajo en equipo, especialmente para equipos con poco nivel, las estrategias son importantes y no habrá nadie jugando separado del grupo en un servidor lleno</p>
                              <br><br>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="col l3 m6 s12">
                        <div class="card">
                          <div class="card-image">
                            <img src="suicida.jpg">
                            <span class="card-action pink darken-4 white-text">Suicida</span>
                          </div>
                          <div class="card-content">
                              <p>La cantidad de especímenes en cada oleada es bastante alta comparada con otras dificultades, se mueven un 30% más rápido, su daño y salud está incrementada un 55%. Además del incremento de estadísticas, los jugadores no se pueden mover si son agarrados por los especímenes (a diferencia de solo ser ralentizados) . Los jugadores empiezan con £200 y la cantidad de recompensa que dan los especímenes es extremádamente baja; aquellos que hayan matado más deberían donar a los que necesitan dinero y equipo. El Patriarca barre a aquellos equipos despistados con gran facilidad y cualquier jugador solitario será fácilmente erradicado. Las tácticas son un requisito primordial y sin trabajo en equipo el escuadrón fracasará muy rápido. Modificaciones adicionales se han hecho para hacer el juego más difícil:</p>
                                <br><br>
                            </p>
                          </div>
                        </div>
                      </div>
                      </div>
                  </div>
              </div>
        </section>

        <section>
                         <div class="col l6 m6 s3">
                          <div class="card">
                            <div class="card-image">
                              <img src="infierno.jpg">
                              <span class="card-action pink darken-4 white-text">Infierno</span>
                            </div>
                            <div class="card-content">
                                <p>La dificultad Infierno en la tierra fue añadida en la actualización de Navidad del 2010, en relación a la dificultad normal, los especímenes tienen 75% más de salud, hacen 75% más de daño y se mueven un 30% más rápido. Los jugadores comienzan con £100 y tienen un 35% menos de recompensas. Modificadores adicionales fueron hechos para hacer el juego más difícil:</p>
                                <br><br>
                            </div>
                          </div>
                        </div>
        </section>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
  @endsection