<table class="table table-bordered" style="">
<thead >
<tr>
 <td align="center" style="background-color:#5E6B6A; color: #ffffff">Clave</td>
 <td align="center" style="background-color:#5E6B6A; color: #ffffff">Nombre</td>
 <td align="center" style="background-color:#5E6B6A; color: #ffffff">Descripción</td>
 <td align="center" style="background-color:#5E6B6A; color: #ffffff">Precio</td>
 <td align="center" style="background-color:#5E6B6A; color: #ffffff">Celular</td>
 <td align="center" style="background-color:#5E6B6A; color: #ffffff">Email</td>
 </tr>

<?php
include("conexion.php");
$valor = $_POST['search'];
mysql_select_db($baseDe,$con) or die ("no hay conexio a la bd");
$query= mysql_query("SELECT producto.code, producto.nombre,producto.barras, producto.descripcion, producto.costo, contrato.cel,contrato.correo FROM producto
                       LEFT JOIN contrato ON producto.code = contrato.id
                       WHERE producto.barras='$valor'");
       while ($x=mysql_fetch_array($query)) {
     	 ?>
       <td align="center"><?php echo $x['code'];?></td>
			 <td align="center"><?php echo $x['nombre'];?></td>
			 <td align="center"><?php echo $x['descripcion'];?></td>
			 <td align="center"><?php echo "$".$x['costo'];?></td>
			 <td align="center"><?php echo $x['cel'];?></td>
       <td align="center"><?php echo $x['correo'];?></td>
     	 
       <?php
     }
?>
<!--   </table> -->