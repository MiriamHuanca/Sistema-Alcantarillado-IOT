
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
    <link href="estilo_admin.css" rel="stylesheet" type="text/css" />
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>REPORTE DE CONTROL DE ALCANTARILLADOS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">


    <style type="text/css">
        .btn-group-justified {
    }
    </style>

    </head>
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
      <?php include("hola.php");?>
      

    <section class="main container">
     <div class="row">
       <section class="posts col-md-9">
         <div class="miga-de-pan">
           <ol class="breadcrumb">
             <!--<li><a href="ingresa_g.php">Perfil</a></li>
             <li><a href="implementacion.php">Implementacion de sensores</a></li>-->
             <li class="active">REGISTRO EMPLEADO</li>
           </ol>
          </div>
       </section>
      </div>         
     </section>




  <div class="col-md-6">

      <a class="list-group-item active">
        
      <h3 class="list-group-item-heading">EMPLEADO:</h3>
      </br>
        <form action="grabar.php" method="post" enctype="multipart/form-data" name="form1" id="form1" required>


          <div class="form-group">
            <label for="exampleInputName2">CÉDULA DE IDENTIDAD:</label>
            <input type="text" class="form-control" name="ci" id="ci"  required="required" placeholder="10076284 L.P.">
          </div></br>


          <div class="form-group">
            <label for="exampleInputEmail2">NOMBRE:</label>
            <input type="text" name="nom" id="nom" required="required" class="form-control" placeholder="JOSE TORRES BUSTAMANTE">
          </div></br>
          

          <div class="form-group">
            <label for="exampleInputEmail2">CARGO:</label> 

              <select class="form-control" name="tipo" id="tipo" form="form1">
                  <option>Seleccione...</option>
                  <option value="A">ADMINISTRADOR</option>
                  <option value="B">SUPERVISOR</option>
                  <option value="C">TECNICO</option>
              </select>

          </div></br>

          

          <div class="form-group">
            <label for="exampleInputEmail2">USUARIO:</label>
            <input type="text" name="usr" id="usr" required="required" class="form-control" placeholder="JOS10076284">
          </div></br>



          <div class="form-group">
            <label for="exampleInputEmail2">CONTRASEÑA:</label>
            <input type="password" name="pw1" id="pw1" required="required" class="form-control" placeholder="**********">
          </div></br>


          <div class="form-group">
            <label for="exampleInputEmail2">REPITA CONTRASEÑA:</label>
            <input type="password" name="pw2" id="pw2" required="required" class="form-control" placeholder="**********">
          </div></br>




            <div class="form-group">
              <label for="foto">FOTO:</label>
              <input type="file"  name="foto" id="foto"/>
            </div></br>


          <button type="submit" class="btn btn-danger" name="grabar" id="grabar" class="btn btn-default">REGISTRAR EMPLEADO</button>



        </form>
      </a>

  </div>

  </br>

  <div class="col-md-6">
      <img src="imag/perfil1.jpg">
  </div>








<!--


<td><form action="grabar.php" method="post" enctype="multipart/form-data" name="form1" id="form1" > 
     
    
    <table width="400" border="0" align="left" cellpadding="2" cellspacing="2">
       <tbody>

              <tr>
                <td width="250" class="texto_formulario">CARNET</td>
                <td width="250"><input type="text" name="ci" id="ci"  required="required"/></td>
              </tr>
              

              <tr>
                <td   class="texto_formulario"><span style="color: #000000">NOMBRE:</span></td>
                <td ><input type="text" name="nom" id="nom" required="required" /></td>
              </tr>
                 

                 <tr>
                 <td  width="250" class="texto_formulario">CARGO:</td>
                 <td width="250"><select name="tipo" id="tipo" form="form1">
                  <option>Seleccione...</option>
                  <option value="GERENTE">ADMINISTRADOR</option>
                  <option value="MANTENIMIENTO">SUPERVISOR</option>
                  <option value="MANTENIMIENTO">TECNICO</option>
                 </select></td>
                 </tr>


              <tr>
                <td  class="texto_formulario">USUARIO:</td>
                <td><input type="text" name="usr" id="usr" required="required" /></td>
              </tr>


              <tr >
                <td  class="texto_formulario">CONTRASEÑA:</td>
                <td><input type="text" name="pw1" id="pw1" /></td>
              </tr>
               
               <tr >
                <td  class="texto_formulario">REPITA CONTRASEÑA:</td>
                <td><input type="text" name="pw2" id="pw2" /></td>
              </tr>


      </tbody>
    </table>


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p> 
    <p>&nbsp;</p>  
    


    <table width="400" border="0" align="left" cellpadding="5" cellspacing="5">
      <tbody>
        <tr>
          <td  style="font-size: 15px; text-align: center;">
          
          <input type="submit" name="grabar" id="grabar" value="REGISTRAR EMPLEADO"  /></td>
        </tr>
      </tbody>
    </table>
  
   


</form>
-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
