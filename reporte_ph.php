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
             <li class="active">REPORTE DE PH</li>
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

    <h3>REPORTE DEL SENSOR PH</h3>
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
                  <th>Dato del PH</th>
                  <th>Hora</th>
                  <th>Fecha</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nro</th>
                <th>Dato del PH</th>
                <th>Hora</th>
                <th>Fecha</th>
            </tr>
        </tfoot>
		<tbody>
			<?php


                $sql="select   d.id_registro,
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
                   <td>".$row["3"]."</td>";
                  echo "</tr>";
                }
              ?>
			  </tbody>
          </table>


    <table class="table-striped table-bordered" cellspacing="0" >
        <thead><tr><th>PROMEDIO DE LA MUESTRA</th></tr></thead>
        <tbody>
            <?php
            $sql="select           AVG (d.da_ph)
                      from      registro d, persona p
                      where     d.id_carnet=p.id_carnet";

            $data=mysqli_query($con,$sql);
            while ($row=mysqli_fetch_row($data))
            {
                echo "<tr>";
                echo
                    "<td>".$row["0"]."</td>";
                echo "</tr>";
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


</div>


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