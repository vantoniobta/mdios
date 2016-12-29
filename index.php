<!DOCTYPE html>
<html>
<head>
   <html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
	<title>Rincón de Azahar</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/imagen.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/test1.css">
  <link rel="icon" href="img/icono.png">
</head>
<style type="text/css">
.fb .fa-facebook-official{
   color: white;
}
  .tw .fa-twitter-square {
  color: white;
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
   <a href=""><img src="img/original.PNG" class="img-rounded"  width="130" height="52"></a>
   </div>
   <!--inicio del menu principal-->
   <div class="collapse navbar-collapse" id="navegacion-fm">
        <ul class="nav navbar-nav">
        <li><a href="##" style="color: white;" class="black-text">Inicio</a></li>
        <li><a href="logica/categoria.php" style="color: white;">Productos</a></li>
        <!--productos lista-->
        <li class="dropdown">

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
        <li><a href="logica/acerca.php" style="color: white;">Acerca de</a></li>
        <li style="top: 8px; left:20px;">
            <div class="inner-addon left-addon">
             <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" placeholder="producto" class="form-control"/>
          </div>
        </li>
        <!-- facebook -->
        <li style="top: 5px; left: 40px;" class="fb">
           <a href="https://www.facebook.com/azaha.restaurante">
           <span class="form-control-feedback">
            <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i>
           </span>
           </a>
        </li>
        <!-- twitter -->
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
<!-- <section class="jumbotron">
	<div class="container"></div>
</section> -->
<!-- botones inferior-->
    <div class="panel panel-default">
    <div class="panel-body">
    <article class="post clearfix">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#" class="thumbpull-left">
        <i class="fa fa-car fa-5x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

       <a href="#" class="thumbpull-left">
        <i class="fa fa-laptop fa-5x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-motorcycle fa-5x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-home fa-5x" aria-hidden="true"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-book fa-5x" aria-hidden="true"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-television fa-5x" aria-hidden="true"></i>
      </a>
    </article>
    </div>
    </div>
    <!--aqui parrafo o texto...-->




<!-- bg-azul -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <div id="section1" class="section white-text" style="background-image: url(img/bg-azul.jpg)">
        <div class="container center-align">
        <h1 class="flow-text" align="center" style="color: #ffffff">Rincón de Azahar</h1>
        <p class="mb-0" align="center" style="color: #ffffff">Av.Morelos 208, Zona centro, Tamazunchale, S.L.P.<br>
        Tel.(483) 362-0550 E-mail:restaurante.azahar@hotmail.com</p>
            
        <!--     <div class="images">
                <img src="./img/bloque1/tv.png" alt="" />
                <img src="./img/bloque1/microfono.png" alt="" />
                <img src="./img/bloque1/antena.png" alt="" />
                <img src="./img/bloque1/lap.png" alt="" />
                <img src="./img/bloque1/mobil.png" alt="" />
            </div> -->
        </div>
    </div>






<section class="main container">
	<div class="container">
		<section class="post cold-md-6" >
   <!--  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title" align="center">Hola!</h3>
      </div>
      <div class="panel-body">
      </div>
    </div> -->

<!-- 		<div class="subbotones">
			<ol class="breadcrumb">
				<li><a href="#">Hola</a></li>
        <li><a href="#"></a></li>
			</ol>
		</div> -->



   













		<!--aqui parrafo o texto...-->
<!--     <div class="panel panel-default">
    <div class="panel-body">
		<article class="post clearfix">
      <a href="#" class="thumbpull-left">
        <i class="fa fa-car fa-5x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</a>

       <a href="#" class="thumbpull-left">
        <i class="fa fa-laptop fa-5x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-motorcycle fa-5x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-mobile fa-5x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-home fa-5x" aria-hidden="true"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-book fa-5x" aria-hidden="true"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-television fa-5x" aria-hidden="true"></i>
      </a>
		</article>
    </div>
    </div>
		<!--aqui parrafo o texto...--> 

		</section>
	</div>
</section>
<!-- botones inferior-->

<section class="main container"></section>

</body>

</html>