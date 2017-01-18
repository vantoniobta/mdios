<!DOCTYPE html>
<html>
<head>
   <html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
	 <title>Rincón de Azahar</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/imagen.css">
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

hr.x1 { 
    border: 0; 
  height: 1px; 
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
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
<!-- botones inferior-->
<div class="panel panel-default">
  <div class="panel-body">
    <article class="post clearfix">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="#" class="thumbpull-left">
        <i class="fa fa-car fa-5x" aria-hidden="true" style="color:#7B5B37;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

       <a href="#" class="thumbpull-left">
        <i class="fa fa-laptop fa-5x" aria-hidden="true" style="color:#FF7400;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-motorcycle fa-5x" aria-hidden="true" style="color:#055C5A;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-mobile fa-5x" aria-hidden="true" style="color:#79B947;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-home fa-5x" aria-hidden="true" style="color:#CD9100;"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </a>

      <a href="#" class="thumbpull-left">
        <i class="fa fa-gamepad fa-5x" style="color:#768282;" aria-hidden="true"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   

      </a>
      <a href="#" class="thumbpull-left">
        <i class="fa fa-book fa-5x" aria-hidden="true" style="color:#CD4F39;"></i>
      </a>
    </article>
    </div>
  </div>
 <br><br><br>
    <div class="col-sm-6 col-md-3">
       <div class="mk-metric mk-metric-blue md-padding" layout="row" layout-align="center">
          <md-icon><h2>Servicios</h2></md-icon>
           <div flex layout="column" layout-align="center end">
               <hr class="x1" style=" ">
               <span class="md-body">Somos quienes financiamos tus cosas que ya no usas, haciendo un contrato adecuado.  Y nos encargamos de difundir tu producto en redes sociales. </span>
           </div>
       </div>
    </div>

  <div class="col-sm-6 col-md-3">
       <div class="mk-metric mk-metric-blue md-padding" layout="row" layout-align="center">
          <md-icon><h2>Datos Personales</h2></md-icon>
           <div flex layout="column" layout-align="center end">
               <hr class="x1">
               <span class="md-body">Nos encargamos que proteger tus datos personales de manera segura.</span>
           </div>
       </div>
    </div>


   <div class="col-sm-6 col-md-3">
       <div class="mk-metric mk-metric-blue md-padding" layout="row" layout-align="center">
          <md-icon><h2>Responsabilidad</h2></md-icon>
           <div flex layout="column" layout-align="center end">
           <hr class="x1">
               <span class="md-headline">{{data.stats.uniqueusers}}</span>
               <span class="md-body">Usuarios únicos</span>
           </div>
       </div>
    </div>

 <div class="col-sm-6 col-md-3">
       <div class="mk-metric mk-metric-blue md-padding" layout="row" layout-align="center">
          <md-icon><h2>Resultados</h2></md-icon>
           <div flex layout="column" layout-align="center end">
               <hr class="x1">
               <span class="md-headline">{{data.stats.uniqueusers}}</span>
               <span class="md-body">Usuarios únicos</span>
           </div>
       </div>
    </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <div id="section1" class="section white-text" style="height: 150px; background-image: url(img/bg-azul.jpg)">
         <br>
        <h1 class="flow-text" align="center" style="color: #ffffff">Rincón de Azahar</h1>
        <p class="mb-0" align="center" style="color: #ffffff">Av.Morelos 208, Zona centro, Tamazunchale, S.L.P.<br>
        Tel.(483) 362-0550 E-mail:restaurante.azahar@hotmail.com</p>
    </div>

</body>

</html>