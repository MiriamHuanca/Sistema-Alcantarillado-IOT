<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta  http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1">	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  	
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

  <title>grafico</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<?php session_start();

function humo(){
include("config.php");

$sql="SELECT UNIX_TIMESTAMP(hora_a) fecha_a,da_ph FROM registro";/*estamos haciendo el metodo inserccion*/
$rs=mysqli_query($con,$sql) or die(mysqli_error());/*variable boolean llamamos a la consulta y al ser*/


while($result=mysqli_fetch_array($rs))
	{
		echo "[";
		echo $result['fecha_a']*1000;
		echo ",";
		echo $result['da_ph'];
		echo "],";
	}
}
?>

<script>

$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {

    Highcharts.chart('container', {
        chart: {
            zoomType: 'x'
        },
        title: {
            text: 'ESTADISTICAS DE POTENCIAL HIDRÓGENO'
        },
        subtitle: {
            text: document.ontouchstart === undefined ?
                    'Hacer click para agrandar' : 'click en el gr�fico para acercarlo'
        },
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            title: {
                text: 'Dato de Ph'
            }
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            area: {
                fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                },
                marker: {
                    radius: 2
                },
                lineWidth: 1,
                states: {
                    hover: {
                        lineWidth: 1
                    }
                },
                threshold: null
            }
        },

        series: [{
            type: 'area',
            name: 'Ph',
            data: [<?php humo();?>]
        }]
    });
});

</script>


<body>

<!--mimi-->
<?php include("hola.php");?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
<!--mimi-->

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


</body>
</html>
