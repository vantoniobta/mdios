<?php
	 if ($_REQUEST['id']) {
	 	include("conexion.php");
	 	$_var=$_GET['id'];
	 	$con=mysql_connect($host,$user,$password) or die ("problemas al conectar");
        mysql_select_db($baseDe,$con) or die ("no se puede establecer la conexion con la base de datos");
	    mysql_query("DELETE FROM imagenes WHERE nombre_img='$_var'",$con);
	    header("Location: principal.php");
	 }else{
	 	echo "no hay id de la tabla";
	 }
 ?>