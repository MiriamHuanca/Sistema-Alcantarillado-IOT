    <section class="jumbotron">
        <img src="imag/logo.png" width="100px" class="lado_der">
      <div class="container ">
          <h2>ESTUDIO DE REMOCIÓN DE IONES DE CALCIO Y MAGNESIO EN EL AGUA, APLICADO EN UNA PLANTA ABLANDADORA</h2>
      </div>
    </section>

<header>  
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">       
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand">UTO-FNI</a>
            </div>
          <!--Inicia Menu-->
          <nav class="collapse navbar-collapse " id="myNavbar">
      <!--<?php session_start();?>-->
            <ul class="nav navbar-nav">

              <?php

                if($_SESSION['persona']['tipo']=='B'):
              ?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li class="active"><a href="datos_generales.php">Datos obtenidos</a></li>
                  <li class="active"><a href="index.php">Salir</a></li>

              <?php else:?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li class="active"><a href="reporte_temperatura.php">Temperatura</a></li>
                  <li class="active"><a href="reporte_turbidez.php">Turbidez</a></li>
                  <li class="active"><a href="reporte_ph.php">Ph (Potencial de Hidrogeno)</a></li>
                  <li class="active"><a href="datos_generales.php">Datos obtenidos</a></li>
                  <li class="active"><a href="index.php">Salir</a></li>
              <?php endif;?>
             
            </ul>
          </nav>
        </div>
      </nav>
    </header>
        <!-- Aqui va el jumbotron-->
