<?php
/******************************************
@author: IBERO-MIT-PILARES
@desc: Módulo del perfil de usuario
******************************************/
if(isset($_SESSION['nombre'])){
  header("Location: index.php");
  exit();
}
  session_start();

include("includes/partidas.class.php");
$link = mysqli_connect("localhost","root","password","tlallimap") or die(mysqli_connect_error());

$obj = new Partidas($link);
$obj->idUsr = $_SESSION['idSesion'];
$infoPartidas = $obj->getPartidas();
$infoPartidasPerdidas = $obj->getPartidasPerdidas();
$infoPartidasGanadas = $obj->getPartidasGanadas();
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css'>
  </head>
  <body>
    <!-- Vista perfil -->
    <div class="heading2JPC">
        <nav><center><br>
          Nombre: <?=$_SESSION['nombre'];?><br>
          Usuario: <?=$_SESSION['usuario'];?><br>
          Partidas ganadas: <?=$infoPartidasGanadas[0]['ganadas'];?><br>
          Perdidas: <?=$infoPartidasPerdidas[0]['perdidas'];?><br>
          Total partidas: <?=$infoPartidas[0]['totalPartidas'];?><br><Total>
          <!--Contraseña: <button class="button" type="submit">Cambiar</button>-->
        </center></nav>
    </div>
    <!-- Canvas -->
    <canvas id="bubble"></canvas>
  </body>
</html>
