<!DOCTYPE html>
<html>
<head>
   <html lang="es">
   <meta charset="UTF-8">
   <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0,maximun-scale-1.0. minium-scale-1.0">
	<title>Rincón de Azahar</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="icon" href="../img/icono.png">
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
        <li><a href="venta.php" style="color: white;">Venta</a></li>
        <li><a href="dashboard.php" style="color: white;">Salir</a></li>
        <!--productos lista-->
        <!--productos lista-->
        </ul>
   </div>

   </div>
</nav>
</head>

<!-- <section class="jumbotron">
	<div class="container"></div>
</section> -->
<!-- botones inferior-->
<section class="main container">
	<div class="container" >
		<section class="post cold-md-9">

    <div class="table-responsive">

    <div class="panel-heading">
      <h2>modificar venta!!</h2>
    </div>

     <div class="alert alert-info">
     <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Introducir codigo">
     <!-- <h6>Listado de Productos Actvos.</h6> -->
     </div>

<?php
require 'mailer/class.phpmailer.php';
// $mail = new PHPMailer;
require 'mailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->Port = 465;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vale.residencia@gmail.com';        // SMTP username
$mail->Password = 'patuovdpdmhdducj';                 // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'vale.residencia@gmail.com';
$mail->FromName = 'Rincon de Azahar';
$mail->AddAddress('vantonio.link@gmail.com', 'valentin');    //   lilitahdez@gmail.com, demonizlatan@gmail.com, andrs298@live.com
$mail->AddAddress('vantonio.link@gmail.com');               //    fosnss@gmail.com, monicasantiago24

$mail->IsHTML(true);                                  // Set email format to HTML,  f2a4a4

$mail->Subject = 'Aviso!!';
$mail->Body    = '<div style="border:1px solid #ccc; padding:30px; border-bottom:4px solid #006400;
                  border-radius:4px;">
                   <img src="https://s5.postimg.org/yb2uukfdz/logo.png" width="170" height="70">
                    
                    <div style="background-color:#d7eebd">
                    <h3 style="color:#ee6123">Hola!: Carlota Aguilar</h3>
                    <h4 style="color:#134836">Para notificarle que su producto ha sido vendido con exito, y que puede a pasar en la sucursal. Gracias! </h4>
                    <h4 style="color:#134836">CÓDIGO: TC0085</h4>
                    <h4 style="color:#134836">PRODUCTO: MINI LAP TOP HP</h4>
                    </div>
                    <h6 align="center">AV. MORELOS 208 ZONA CENTRO TAMAZUNCHALE, S.L.P</h6>
                  </div>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo ".......................................................................................................................................................................................................................................".'<br>';
echo 'Mensaje enviado al correo fue exitoso'.'<br>';
echo ".......................................................................................................................................................................................................................................";

?>
     <!-- RESULT MYSQL -->
     <div class="result">
     </div>
     <!-- RESULT MYSQL -->
</div>
</section>
</div>
</section>
<!-- botones inferior-->
<section class="main container"></section>
</body>
<!-- for event up in text -->
<script type="text/javascript">
$(document).ready(function() {
    var search = $("#codigo");
        search.keyup(function() {
            if (search.val() != '') {
            //----------------------------------------------
                $.post("test.php", { search : search.val() }, function(data) {
                    $(".result").html(data);
                });
            //----------------------------------------------
            }
        });
});
</script>
</html>