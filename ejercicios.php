<?php
/******************************************
@author: IBERO-MIT-PILARES
@desc: Módulo de ejercicios
******************************************/
if(isset($_SESSION['nombre'])){
  header("Location: index.php");
  exit();
}
  session_start();
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <title>Ejercicios</title>
    <base href="./" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css'>
    <link rel="stylesheet" type="text/css" href="css/jvsj.css">
     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
    <!--<script  src="js/ejercicios.js"></script>-->
    <!--<script src="js/helper_functions.js"></script>-->
    <!--<script src="https://unpkg.com/@chrisoakman/chessboardjs@1.0.0/dist/chessboard-1.0.0.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/chess.js/0.10.2/chess.js"></script>-->
    <script src="js/jvsj.js"></script>
  </head>
  <body>
    <div class="container">
    <img src="img/construccion.jpg">
    </div>


    
    <!-- Canvas -->
    <canvas id="bubble"></canvas>
    <!-- Footer -->
    <footer class="footer">
      <img src="img/pilares.jpg" width="25%" height="20%">
      <img src="img/ibero.png" width="25%" height="20%">
      <img src="img/mit.png" width="25%" height="20%">
    </footer>
    <!-- Scripts -->

  </body>
</html>
