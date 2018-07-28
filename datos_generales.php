<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">

	
	</head>
  <body>
  <?php include("hola.php");?>
  <?php include("config.php");?>

    <section class="main container">
     <div class="row">
       <section class="posts col-md-9">
         <div class="miga-de-pan">
           <ol class="breadcrumb">
             <li class="active">DATOS OBTENIDOS</li>
           </ol>
		      </div>
		   </section>
      </div>
     </section>
	 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="imag/777.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="imag/333.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="imag/444.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<div style="margin:50px;">
  <!--datos de totales de los sensores-->
  <div style="margin:50px;">

      <h3>REPORTE DE LOS SENSORES</h3>
      <div class="caja_1" style="width: 40%">
          <p>Fecha:</p>
          <?php
          $sql="select   d.fecha_a
                      from      registro d
                      where     DATE(d.fecha_a)=DATE(CURRENT_TIMESTAMP)";

          $data=mysqli_query($con,$sql);
          while ($row=mysqli_fetch_row($data))
          {
              echo
                  "<p style=\"text-indent: 45px\">".$row["0"]."</p>";
          }
          ?>
      </div>

      <div class="caja_2" style="width: 40%">
          <p>Caudal Inicial:</p>
          <?php
          $sql="select   d.da_caudal
                      from      registro d
                      where     DATE(d.fecha_a)=DATE(CURRENT_TIMESTAMP)";

          $data=mysqli_query($con,$sql);
          while ($row=mysqli_fetch_row($data))
          {
              echo
                  "<p style=\"text-indent: 45px\">".$row["0"]." [l/seg]</p>";
          }
          ?>
      </div>


      <br><br><br><br>

      <table class="tablejquery table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
          <tr>
              <th>Nro</th>
              <th>Dato de temperatura</th>
              <th>Dato del turbidez</th>
              <th>Dato del PH</th>
              <th>Hora</th>
              <th>Fecha</th>
          </tr>
          </thead>
          <tfoot>
          <tr>
              <th>Nro</th>
              <th>Dato de temperatura</th>
              <th>Dato del turbidez</th>
              <th>Dato del PH</th>
              <th>Hora</th>
              <th>Fecha</th>
          </tr>
          </tfoot>
          <tbody>
          <?php


          $sql="select   d.id_registro,d.da_temperatura, d.da_turbidez,
                                d.da_ph,
                                d.hora_a,
                                d.fecha_a
                      from      registro d, persona p
                      where     d.id_carnet=p.id_carnet 
                                group by d.id_registro";

          $data=mysqli_query($con,$sql);
          while ($row=mysqli_fetch_row($data))
          {
              echo "<tr>";
              echo
                  "<td>".$row["0"]."</td>
                   <td>".$row["1"]."</td>
                   <td>".$row["2"]."</td>
                   <td>".$row["3"]."</td>
                   <td>".$row["4"]."</td>
                   <td>".$row["5"]."</td>";
              echo "</tr>";
          }
          ?>
          </tbody>
      </table>

      <P>PROMEDIO DE LAS MUESTRAS DE LOS SENSORES:</P>

      <table class="table-striped table-bordered" cellspacing="0" width="100%">

          <thead>
              <tr>
                  <th>Temperatura</th>
                  <th>Turbidez</th>
                  <th>Pontencial hidrogeno</th>
              </tr>
          </thead>
          <tbody>
          <?php
          $sql="select           AVG (d.da_temperatura)
                      from      registro d, persona p
                      where     d.id_carnet=p.id_carnet";

          $data=mysqli_query($con,$sql);
          while ($row=mysqli_fetch_row($data))
          {
              echo
                  "<td>".$row["0"]."</td>";
          }
          ?>

          <?php
          $sql="select           AVG (d.da_turbidez)
                      from      registro d, persona p
                      where     d.id_carnet=p.id_carnet";

          $data=mysqli_query($con,$sql);
          while ($row=mysqli_fetch_row($data))
          {
              echo
                  "<td>".$row["0"]."</td>";
          }
          ?>
          <?php
          $sql="select           AVG (d.da_ph)
                      from      registro d, persona p
                      where     d.id_carnet=p.id_carnet";

          $data=mysqli_query($con,$sql);
          while ($row=mysqli_fetch_row($data))
          {
              echo
                  "<td>".$row["0"]."</td>";
          }
          ?>
          </tbody>
      </table>

      <br><br>

      <table class="table-striped table-bordered" cellspacing="0" WIDTH="50%">
          <thead>
          <tr>
              <th>Ultima muestra</th>
              <th>Hora</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $sql="    SELECT MAX(r.id_registro), MAX(r.hora_a), p.id_carnet 
                  FROM registro r,persona p 
                  WHERE '10039164'=p.id_carnet AND p.id_carnet=r.id_carnet
                      
                      ";

          $data=mysqli_query($con,$sql);
          while ($row=mysqli_fetch_row($data))
          {
              echo "<tr>";
              echo
                  "<td>".$row["0"]."</td>
                   <td>".$row["1"]."</td>";
              echo "</tr>";
          }
          ?>
          </tbody>
      </table>

        <br><br>

      <hr>
      Inicio grafica
      <canvas id="mi-dibujo-uno"></canvas>
      fin grafica
      <hr>
  </div>

    <?php
    $sql_1="    select da_temperatura
                from    registro
                ORDER BY fecha_a
        ";

    $miarray_1=array();
    $data=mysqli_query($con,$sql_1);
    while ($row=mysqli_fetch_row($data))
    {   $miarray_1[]=$row;
    }
    echo json_encode($miarray_1);

    $sql_2="    select da_ph
                from    registro
                ORDER BY fecha_a
        ";

    $miarray_2=array();
    $data=mysqli_query($con,$sql_2);
    while ($row=mysqli_fetch_row($data))
    {   $miarray_2[]=$row;
    }
    echo json_encode($miarray_2);

    $sql_3="    select da_turbidez
                from    registro
                ORDER BY fecha_a
        ";

    $miarray_3=array();
    $data=mysqli_query($con,$sql_3);
    while ($row=mysqli_fetch_row($data))
    {   $miarray_3[]=$row;
    }
    echo json_encode($miarray_3);

    ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script>
        window.onload = function(){
            var ctx = document.getElementById('mi-dibujo-uno').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [{
                        label: "My First dataset",
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        <?php for($i=0;$i<count($miarray_1);$i++){?>
                        data: [<?php $miarray_1[$i] ?>],
                        <?php } ?>
                    }]
                },

                // Configuration options go here
                options: {}
            });
        }
    </script>





















  <!--datos de los sensores totales-->

  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

	<script>
	$(document).ready(function() {
    $('.tablejquery').dataTable( {
        "language": {         	
	                    "processing": "cargando......",
	                    "lengthMenu": "Mostrar _MENU_ registros",
	                    "zeroRecords": "No existen registros",
		                "info": "pagina _PAGE_ de _PAGES_",
	                    "infoEmpty": "Ningun registro disponible",
	                    "infoFiltered": "(filtrado de  _MAX_ total registros)",
	                    "infoPostFix": "",
	                    "search": "Buscar",
	                    "url": "",
	                            "paginate": {
		                                    "first":    "Primero",
		                                    "previous": "Anterior",
		                                    "next":     "Siguiente",
		                                    "last":     "Ultimo"
				                            }				
                    }
        });
    });
	</script>
	
	
  </body>
</html>