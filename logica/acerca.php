<!DOCTYPE html>
<html>
<head>
<html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
	<title>Rincón de Azahar</title>
  <!-- AIzaSyAMyMm7Hv8veHoYR47ibGSDauqa9O8g2h8 -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMyMm7Hv8veHoYR47ibGSDauqa9O8g2h8"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/imagen.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
   <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
   <span class="sr-only">desplegar/ocultar menu</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>
   <a href="../index.php"><img src="../img/original.PNG" id="logo"  width="130" height="52"></a>
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
        <li><a href="" style="color: white;">Acerca de</a></li>
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

<section class="post cold-md-6">


  <div class="panel panel-default">
      <div class="panel-body">
          <div id="map" class="map" style="width: 550px; height: 350px; left: 80px; top: 0px">
          <!-- aqui va el google maps  -->
         </div>
      </div>
  </div>


</section>
      <script type="text/javascript">
              var mapOptions = {
                  center: new google.maps.LatLng(0, 0),
                  zoom: 16
              },
              map     = new google.maps.Map(document.getElementById("map"), mapOptions)
              marker  = new google.maps.Marker({
                                   position: map.getCenter(),
                                   map: map,
                                   title: 'Drag to set position',
                                   draggable: true,
                                   flat: false
                         });
              google.maps.event.addListener(marker, 'dragend', function() {
                            latlng = marker.getPosition();
                            url = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='+ latlng.lat() + ',' + latlng.lng() + '&sensor=false';
                            $.get(url, function(data) {
                                  if (data.status == 'OK') {
                                      map.setCenter(data.results[0].geometry.location);                
                                      if (confirm('Do you also want to change location text to ' + data.results[0].formatted_address) === true) {
                                            $('#location').val(data.results[0].formatted_address);
                                            $('#lat').val(data.results[0].geometry.location.lat);
                                            $('#lng').val(data.results[0].geometry.location.lng);
                                            }
                                          }
                                      });    
                                  });
                    if ($('#map').hasClass('hidden')) {
                           $('#map').removeClass('hidden').fadeIn().addClass('show');
                           google.maps.event.trigger(map, 'resize');
                        }
                    var address = 'Tamazunchale, san luis potosi'
                        if (address.length == 0) {
                           $('#map').removeClass('show').fadeOut().addClass('hidden');
                    }
                    url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' + address + '&sensor=false';
                           $.get(url, function(data) {
                            if (data.status == 'OK') {
                               map.setCenter(data.results[0].geometry.location);
                               marker.position=map.getCenter();
                          }
                    });
      </script>


      <!-- baner superios -->
 <div id="section1" class="section white-text" style="height: 150px; background-image: url(../img/bg-azul.jpg)"><br>
        <!-- <div class="container center-align"> -->
        <h1 class="flow-text" align="center" style="color: #ffffff">Rincón de Azahar</h1>
        <p class="mb-0" align="center" style="color: #ffffff">Av.Morelos 208, Zona centro, Tamazunchale, S.L.P.<br>
        Tel.(483) 362-0550 E-mail:restaurante.azahar@hotmail.com</p>
    <!--     </div> -->
    </div>
</body>
</html>