<!DOCTYPE html>
<html>
<head>
<style>
.carousel.slide {
  position: fixed; /* or absolute */
  top: 15%;
  left: 27%;
}
.info{
    position: fixed; /* or absolute */
    top: 70%;
    left: 30%;
}
/* enable absolute positioning */
.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .fa-search {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .fa-search  { left:  0px;}
.right-addon .fa-search { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }

</style>
<html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
  <title>Rincón de Azahar</title>
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/scc.css">
  <link rel="stylesheet" type="text/css" href="../css/test1.css">
  <link rel="icon" href="../img/icono.png">
</head>
<style type="text/css">

.fb .fa-facebook-official{
   color: white;
}
  .tw .fa-twitter-square {
  color: white;
}
</style>
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
   <a href="../index.php"><img src="../img/original.PNG" id="logo" class="img-rounded" width="130" height="52"></a>
   </div>
   <!--inicio del menu principal-->
   <div class="collapse navbar-collapse" id="navegacion-fm">
        <ul class="nav navbar-nav">
        <li><a href="##" style="color: white;">Inicio</a></li>
        <li><a href="categoria.php" style="color: white;">Productos</a></li>
        <!--productos lista-->
        <li>

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="color: white;">
        	Categorias<span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">Categoria</a></li>
        <li><a href="#">Categoria2</a></li>
        <li><a href="#">Categoria3</a></li>
        </ul>
        </li>
        <!--productos lista-->
        <li><a href="##" style="color: white;">Clientes</a></li>
        <li><a href="##" style="color: white;">Acerca de</a></li>
         <li style="top: 8px; left:20px;">
            <div class="inner-addon left-addon">
             <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" placeholder="producto" class="form-control"/>
          </div>
        </li>
        <li style="top: 5px; left: 40px;" class="fb">
           <a href="https://www.facebook.com/azaha.restaurante">
           <span class="form-control-feedback">
            <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
           </span>
           </a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li style="top: 5px; left: 60px;" class="tw">
           <a href="https://twitter.com/vantonio_">
           <span class="form-control-feedback">
            <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
           </span>
           </a>
         </li>
        </ul>
   </div>

   </div>
</nav>
</head>
                            <!--code PHP -->
                            <?php
                                $valor=$_GET['id'];
                                include("conexion.php");
                                $con=mysql_connect($host,$user,$password) or die ("problemas al conectar");
                                mysql_select_db($baseDe,$con) or die ("no se puede establecer la conexion con la base de datos");

                                //$re=mysql_query("select nombre,descripcion,costo from producto WHERE code='$a'")or die(mysql_error());
                                //select nombre_img, (select categoria from producto where producto.code=imagenes.clave) as relacion from imagenes

                                //consultas
                                $a=mysql_query("SELECT nombre,descripcion,costo FROM producto WHERE code='$valor'")or die(mysql_error());
                                $r=mysql_query("SELECT clave,nombre_img FROM imagenes WHERE clave='$valor'")or die(mysql_error());
                                ?>


         <!--code PHP -->
         <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
           <div class='col-md-6'> <!-- INICIO DE IMAGENES SLIDERS-->
            <!-- START: Carousel-->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  
              <div class="carousel-inner">
                <div class="item active">
                  <a href="#" data-toggle="modal" data-target="#fullImage1"><img src='http://placehold.it/600x300&text=Image+1' /></a>
                </div>
                <?php

                 while ($y=mysql_fetch_array($r)) {  //img
                       
                       ?>
                        <div class="item" style="width:100% !important;">
                       <?php 
                       ?>
                        <a href="#" data-toggle="modal" data-target="#fullImage1"><img src="../img/<?php echo $y['clave'];?>/<?php echo $y['nombre_img'];?>"></a>
                       <?php
                    
                        ?>
                        </div>
                        <?php
                        }
                 ?>

<!--                 <div class="item">
                  <img src='http://placehold.it/600x300&text=Image+3' />
                </div>
                <div class="item">
                  <img src='http://placehold.it/600x300&text=Image+3' />
                </div>
                <div class="item">
                  <img src='http://placehold.it/600x300&text=Image+4' />
                </div>
                <div class="item">
                  <img src='http://placehold.it/600x300&text=Image+5' />
                </div>
                <div class="item">
                  <img src='http://placehold.it/600x300&text=Image+6' />
                </div>
                <div class="item">
                  <img src='http://placehold.it/600x300&text=Image+7' />
                </div>
                <div class="item">
                  <img src='http://placehold.it/600x300&text=Image+8' />
                </div> -->
                </div>
    
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                  </div>
                  <!-- END: Carousel -->
                </div>
                  <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="info">
                    <!-- CODE PHP -->
                    <?php
                     while ($pdc=mysql_fetch_array($a)) {
                     ?>
                     <h1 align="center"><?php echo $pdc['nombre']; ?></h1>
                     <h4 align="center"><?php echo $pdc['descripcion']; ?></h4>
                     <h5 align="center"><?php echo "PRECIO: $".$pdc['costo']; ?></h5>
                     <?php
                     }
                     ?>
                    <!-- CODE PHP -->
                     <div class="info">

                     <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

                    <script src="https://code.jquery.com/jquery.js"></script>
                    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
                    </body>

<!--                      <div id="section1" class="section white-text" style="background-image: url(../img/bg-azul.jpg)">
                          <div class="container center-align">
                             <h1 class="flow-text" align="center" style="color: #ffffff">Rincón de Azahar</h1>
                              <p class="mb-0" align="center" style="color: #ffffff">Av.Morelos 208, Zona centro, Tamazunchale, S.L.P.<br>
                              Tel.(483) 362-0550 E-mail:restaurante.azahar@hotmail.com</p>
                         </div>
                       </div> -->




                    </html>