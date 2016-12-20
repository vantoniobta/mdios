<?php

include("conexion.php");
$valor = $_POST['search'];
mysql_select_db($baseDe,$con) or die ("no hay conexio a la bd");
$query= mysql_query("SELECT producto.code, producto.nombre,producto.barras, producto.descripcion, producto.costo, contrato.cel, contrato.correo FROM producto
                       LEFT JOIN contrato ON producto.code = contrato.id
                       WHERE producto.barras='$valor'");
?>