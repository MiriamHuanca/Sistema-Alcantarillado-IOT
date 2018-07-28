<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/estilo_admin.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
                  body {
                      /*colocamos un fondo de pantalla */
                      background-image:url(imag/foto_principal.jpg);
                      background-repeat:no-repeat;
                      background-size:cover;
                      background-attachment: fixed;
                  }
  </style>

<body>


       <img src="imag/logo.png" width="250" alt=""/>
      <table width="700" border="5" align="center" cellpadding="10" cellspacing="10"  background="imag/foto.jpg"     bordercolor="#000FF" style="font-variant: normal; font-weight: bold;">
         <tr>
    <td>
    <form action="control.php " method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
        <tr>
          <td colspan="2" align="center" background="#0066FF" bgcolor="#FFFFFF" class="titulo">INGRESO DE USUARIOS</td>
        </tr>
        <tr>
          <td colspan="2" align="center" class="texto_centro">
          <?php
		  if(isset($_GET['error'])){/*verificando si se envio el error de control.php*/
			  $error=$_GET['error'];/*recuperamos el error*/
			  if($error==1)/*si el error es 1 enviamos  el mensaje y vuelve al index */
			  echo "usuario y contraseña incorrecta";
			  if($error==2)/*si el  */
			    echo "Debe ingresar con usuario y contraseña validos";
			  }
			 ?> 
          </td>
          </tr>
        <tr>
          <td width="31%" class="texto1"><span class="texto1">USUARIO: </span></td>
          <td width="69%">

              <input name="usr" type="text" id="usr" size="30" />

          </td>
        </tr>
        <tr>
          <td class="texto1">CONTRASEÑA: </td>
          <td><input name="pwd" type="password" id="pwd" size="30" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="ingresar" id="ingresar" value="Ingresar" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</head>
</nav>
</body>
</html>