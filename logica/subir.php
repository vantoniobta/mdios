<!DOCTYPE html>
<html>
<head>
   <html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
	<title>Rincón de Azahar</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="icon" href="../img/icono.png">  
  <link rel="stylesheet" href="../css/subir.css">

  <style type="text/css">
  .fileUpload {
      position: relative;
      overflow: hidden;
      margin: 10px;
  }
  .fileUpload input.upload {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 20px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
}
  </style>

</head>
<body>
<head>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color: #006699;">
   <div class="container" >
   <div class="navbar-header" >
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
   <span class="sr-only">desplegar/ocultar menu</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>
   <a href="principal.php"><img src="../img/original.PNG" class="img-rounded"  width="130" height="52"></a>
   </div>
   <!--inicio del menu principal-->
   <div class="collapse navbar-collapse" id="navegacion-fm">
        <ul class="nav navbar-nav">
        <li><a href="principal.php" style="color: white;">Dashboard</a></li>
        <li><a href="../index.php" style="color: white;">Frontend</a></li>
        <li><a href="dashboard.php" style="color: white;">Salir</a></li>
        </ul>
   </div>

   </div>
</nav>
</head>
<!-- botones inferior-->
<section class="main container">
	<div class="container" >
		<section class="post cold-md-9">
     <?php 
      $optener=$_GET['id'];
     ?>
     <br><br>
    <!-- **********************************************************-->
    <div style="background-color:#ccffcc; height: 100px;" >
     <form action="upload.php?id=<?php echo $optener; ?>" method="post" enctype="multipart/form-data" class="form-horizontal" name="multiple_upload_form" id="multiple_upload_form">
          <div class="fileUpload btn btn-danger-outline btn-sm">
            <div class="fileUpload btn btn-danger"><i class="fa fa-upload fa-3x" aria-hidden="true"></i>&nbsp;&nbsp;SUBIR FOTOS
              <input type="file" name="file[]" id="phs" class="upload" multiple/>
            </div>
          </div>
              <button class="btn btn-success" type="submit" name="submit" style="width: 100px;">
              <i class="fa fa-floppy-o fa-3x" aria-hidden="true"></i>
             </button>
      </form>
      </div>
     <!-- **********************************************************-->
     <label>Imagenes del producto</label>
     <br>
     
     <!--crear directorio -->
     <div class="table-responsive">
     <table class="table table-bordered">
  <tr>
<!--     <th></th> -->
    <td align="center" width="50px" style="background-color:#5E6B6A; color: #ffffff">Code</td>
    <td align="center" style="background-color:#5E6B6A; color: #ffffff">Name img</td>
    <td align="center" style="background-color:#5E6B6A; color: #ffffff">Image</td>
    <td align="center" width="70px" style="background-color:#5E6B6A; color: #ffffff">Delete</td>
  </tr>
  <?php
  include("conexion.php");
  $con=mysql_connect($host,$user,$password) or die ("problemas al conectar");
  mysql_select_db($baseDe,$con) or die ("no se puede establecer la conexion con la base de datos");
    $re=mysql_query("select * from imagenes WHERE clave='$optener'")or die(mysql_error());
    while ($f=mysql_fetch_array($re)) {
  ?>
  <tr>
<!--   <th><input class='check_all' type='checkbox' onclick="select_all()"/></th> -->
    <td align="center"><?php echo $f['clave'];?></td>
    <td align="center"><?php echo $f['nombre_img'];?></td>
    <td align="center"><?php echo "<img class=\"imagen\" src=\""."../img/$optener/".$f['nombre_img']."\"/>";?></td>
     <td align="center"><?php echo "<a class=\"btn btn-danger\"/ data-id=\"". $f['clave']."\"/   href=\"delete.php?id=".$f['nombre_img']."\"/><li  class=\"fa fa-trash fa-lg\"/></li></a>";?></td>
<!--      <i class="fa fa-trash" aria-hidden="true"></i>   
 -->
   <!--  <td><?php echo "<a class=\"btn btn-danger\"/ data-id=\"". $f['clave']."\"/   href=\"delete.php?id=".$f['nombre_img']."\"/>Eliminar</a>";?></td> -->
  </tr>
  <?php
  }
  ?>
  </table>
  </div>
</div>
</section>
</div>
</section>
</body>
</html>