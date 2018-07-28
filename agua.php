<?php
include("config.php");/*llamar un archivo php*/
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
$q="insert into registro(id_carnet,da_temperatura,da_ph,da_turbidez,da_conductividad,da_caudal,fecha,hora) values ('10039164','$a','$b','$c','$d','$e',CURDATE(),CURTIME())";
/*estamos haciendo el metodo inserccion*/
$rs=mysqli_query($q,$con) or die(mysqli_error());
/*variable boolean llamamos a la consulta y al ser*/
?>