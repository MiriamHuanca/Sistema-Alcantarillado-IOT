<?php
session_start();/*para crear variables de sesion tenemos q abrir una secion*/
if($_SESSION['ingreso'] != "si")/*si el valor de ingreso es distinto de si por que quieran entrar por la url nos quieran vulnerar la pagin*/
/*cuando es si */
   header("Location:index.php?error=2");/**/
?>