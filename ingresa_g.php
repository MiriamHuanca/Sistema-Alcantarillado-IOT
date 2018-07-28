<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>REPORTE DE CONTROL DE ALCANTARILLADOS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  
  </head>
  
  <style type="text/css">
      body {
/*colocamos un fondo de pantalla */	        
      background-color: #e0e0e0;
      background-repeat:no-repeat;
      background-size:cover;
      background-attachment: fixed;
      }
  </style>


  <body>
     <?php include("hola.php");?>
    
  <section class="main container">
     <div class="row">
       <section class="posts col-md-9">
            <div class="miga-de-pan">
              <ol class="breadcrumb">
                <li class="active">Perfil</li>
              </ol>
            </div>
       </section>
    </div>
</section>

          <div class="row">
            
            <div class="col-sm-9 col-md-4">
              <div class="thumbnail" style="margin-left:25%;">
                <img style="border-radius: 50%;" src="imag/<?php echo $_SESSION['persona']['foto']?>" alt="...">
                <div class="caption">
                  <h3>Nombre:</h3>
                  <p><?php echo $_SESSION['persona']['nombre'] ?></p>
                  <h3>Cedula de Identidad:</h3>
                  <p><td><?= $_SESSION['persona']['id_carnet'] ?></td></p>
                  <h3>Tipo:</h3>
                  <p><?php echo $_SESSION['persona']['tipo'] ?></p>
                                
                  <!--<p><a href="#" class="btn btn-primary" role="button">Button</a></p>-->
                </div>
              </div>

                <button type="button" class="btn btn-info" style="margin-left: 25%">
                    <a href="registro_empleado.php" style="color:#000">Registro nueva persona
                    </a>
                </button>

            </div>


            <div class="col-sm-6 col-md-7">
              <a class="list-group-item active">
                <h3 class="list-group-item-heading">CALIDAD DE AGUA</h3>
                <p class="list-group-item-text" align="justify">
                    <br>
                    <img  HSPACE="15px" src="imag/foto.jpg" width="90%"><br>
                    <h4>Sensor de PH (Potencia de hidrogeno).</h4><br>
                    <h4>Sensor de Turbidez.</h4><br>
                    <h4>Sensor de Temperatura.</h4><br>
                </p>
                <img  HSPACE="15px" src="imag/foto.jpg" width="90%"><br>
              </a>
            </div>


          </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>