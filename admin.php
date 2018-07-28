<?php
include ("seguridad.php");/*llamando a seguridad.php*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Menu del Administrador</title>
<link href="estilo_admin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    body {
        /*colocamos un fondo de pantalla */
        background-image:url(imag/foto_principal.jpg);
        background-repeat:no-repeat;
        background-size:cover;
        background-attachment: fixed;
    }
</style>
</head>

<body>
<table width="400" border="1" align="center" cellpadding="7" cellspacing="0"     bordercolor="#FFFFFF" >
  <tr>
    <td width="20" height="20" class="texto_centro"><span style="text-align: center; font-weight: normal; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; color: #AAE9F1;">BIENVENIDO</span>:
  <tr>
   
  </tr>
</table>

    <?php
    if($_SESSION['tipo']=='B'){/*protegiendo la pagina */
    ?>
<table width="330" border="1" align="left" cellpadding="1" cellspacing="2">
  <tbody>
    <tr>
      <td width="320" height="45"  style="color: #FFFFFF; font-weight: bold; font-size: 18px; text-align: center;"><span class="titulo"><a href="registro_empleado.php" class="titulo"><span class="texto_enlace">A</a></span></td>
    </tr>
     <?php
    }
    ?>
  </tbody>
</table>
<table width="414" border="1" align="left" cellpadding="1" cellspacing="2">
  <tbody>
    <tr>
      <td width="404" height="45" bgcolor="#000000" class="texto_enlace" style="color: #FFFFFF; font-weight: bold; font-size: 18px; text-align: center;"><a href="registro_sensor.php" class="titulo"><span class="texto_enlace">B</a></td>
    </tr>
  </tbody>
</table>
<table width="353" border="1" align="left" cellpadding="1" cellspacing="2">
  <tbody>
    <tr>
      <td width="5" height="45" bgcolor="#000000" class="texto_enlace" style="color: #FFFFFF; font-weight: bold; font-size: 18px; text-align: center;">C</td>
    </tr>
  </tbody>
</table>
<table width="417" border="1" align="left" cellpadding="1" cellspacing="2">
  <tbody>
    <tr>
      <td width="407" height="45" bgcolor="#000000" class="texto_enlace" style="color: #FFFFFF; font-weight: bold; font-size: 18px; text-align: center;">D</td>
    </tr>
  </tbody>
</table>
</body>
</html>
