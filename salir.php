<?php
/*tenemos q cerrar seciion*/
session_start();/*cerrar secion*/
session_destroy();/*destruimos la cesion*/
header("Location:index.php");/*aqui volvemos a la pagina principal*/

?>