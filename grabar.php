<?php
include("config.php");/*llamar un archivo php*/
$i=$_POST['ci'];
$n=$_POST['nom'];
$f1=$_FILES['foto']['name'];
$u=$_POST['usr'];
$c=$_POST['pw1'];
//$c=MD5($c);
$t=$_POST['tipo'];

$q="insert into persona(id_carnet,nombre,foto,usuario,contrasena,tipo) values ('$i','$n','$f1','$u','$c','$t')";/*estamos haciendo el metodo inserccion*/
$rs=mysqli_query($con,$q) or die(mysqli_error());/*variable boolean llamamos a la consulta y al ser*/
if($rs){/**/
	
	echo "
	<script>
	alert('empleado registrada');
	location.href='registro_empleado.php';
	</script>
	";
}


?>