<?php
/******************************************
@author: IBERO-MIT-PILARES
@desc: Módulo para presentar equipo de desarrollo
******************************************/
if(isset($_SESSION['nombre'])){
  header("Location: index.php");
  exit();
}
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css'> 
    <style type="text/css">
      h2{font-size: 14px;}
      p{font-size: 10px;}
      canvas{overflow-y: auto;}
    </style> 
  </head>
  <body>
  <!-- Vista equipo desarrollo -->
    <div class="headingg">
        <center>Equipo de Desarrollo </center>
        <center>Front-End y Back-End</center>
    </div><br>
    <canvas id="bubble"></canvas>
    <div class="row">
      <div class="column">
        <div class="card">
          <img src="img/rosa.png" alt="John" style="width:100%">
          <div class="container">
            <h2>Rosa González</h2>
            <p class="title">Universidad Iberoamericana</p>
            <p>Estudiante</p>
            <p>Ingeniería en Tecnologías de Cómputo y Telecomunicaciones</p>
            <p>Rol: Front-End</p>
            <p><br></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="img/diana.png" alt="John" style="width:100%">
          <div class="container">
            <h2>Diana González</h2>
            <p class="title">Universidad Iberoamericana</p>
            <p>Estudiante</p>
            <p>Ingeniería en Tecnologías de Cómputo y Telecomunicaciones</p>
            <p>Rol: Back-End</p>
            <p><br></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="img/jovanny.jpg" alt="John" style="width:100%">
          <div class="container">
            <h2>Jovanny Ulloa</h2>
            <p class="title">Universidad Iberoamericana</p>
            <p>Estudiante</p>
            <p>Ingeniería en Tecnologías de Cómputo y Telecomunicaciones</p>
            <p>Rol: Back-End</p>
            <p><br></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="img/david.png" alt="John" style="width:100%">
          <div class="container">
            <h2>David Moreno</h2>
            <p class="title">Universidad Iberoamericana</p>
            <p>Estudiante</p>
            <p>Ingeniería en Mecatrónica y Producción</p>
            <p>Rol: Back-End</p>
            <p><br></p>
            <p><br></p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="img/angel.png" alt="John" style="width:100%">
          <div class="container">
            <h2>Ángel Rodríguez</h2>
            <p class="title">Universidad Iberoamericana</p>
            <p>Estudiante</p>
            <p>Ingeniería en Tecnologías de Cómputo y Telecomunicaciones</p>
            <p>Rol: Back-End</p>
            <p><br></p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="img/israel.png" alt="John" style="width:100%">
          <div class="container">
            <h2>Israel Campuzano</h2>
            <p class="title">Universidad Iberoamericana</p>
            <p>Estudiante</p>
            <p>Ingeniería en Mecatrónica y Producción</p>
            <p>Rol: Back-End</p>
            <p><br></p>
            <p><br></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="column">
        <div class="card">
          <img src="img/libni.png" alt="John" style="width:100%">
          <div class="container">
            <h2>Libni Chamán</h2>
            <p class="title">Universidad Iberoamericana</p>
            <p>Estudiante</p>
            <p>Ingeniería en Tecnologías de Cómputo y Telecomunicaciones</p>
            <p>Rol: Back-End</p>
            <p><br></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <img src="img/dianaR.jpg" alt="John" style="width:100%">
          <div class="container">
            <h2>Diana Rentería</h2>
            <p class="title">Massachusetts Institute of Technology</p>
            <p>Estudiante</p>
            <p>Ingeniería biológica</p>
            <p>Rol: Back-End</p>
            <p><br></p>
            <p><br></p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="img/manuel.jpg" alt="John" style="width:100%">
          <div class="container">
            <h2>Manuel Morales</h2>
            <p class="title">Massachusetts Institute of Technology</p>
            <p>Estudiante</p>
            <p>Ingeniería física</p>
            <p>Rol: Back-End</p>
            <p><br></p>
            <p><br></p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="img/stephanie.jpg" alt="John" style="width:100%">
          <div class="container">
            <h2>Stephanie Baez</h2>
            <p class="title">Massachusetts Institute of Technology</p>
            <p>Estudiante</p>
            <p>Ingeniería civil</p>
            <p>Rol: Front-End</p>
            <p><br></p>
            <p><br></p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="img/eduardoB.jpg" alt="John" style="width:100%">
          <div class="container">
            <h2>Eduardo Barrios</h2>
            <p class="title">Massachusetts Institute of Technology</p>
            <p>Estudiante</p>
            <p>Ingeniería mecánica</p>
            <p>Rol: Front-End</p>
            <p><br></p>
            <p><br></p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="img/essau.PNG" alt="John" style="width:100%">
          <div class="container">
            <h2>Essaú Olvera</h2>
            <p class="title">PILARES </p>
            <p>Estudiante de prepa abierta</p>
            <p>Interés en la ingeniería mecatrónica </p>
            <p>Rol: Back-End</p>
            <p><br></p>
            <p><br></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="column">
          <div class="card">
            <img src="img/eduardoG.jpeg" alt="John" style="width:100%">
            <div class="container">
              <h2>Eduardo Gutiérrez</h2>
              <p class="title">PILARES </p>
              <p>Estudiante de prepa abierta</p>
              <p>Interés en la ingeniería mecatrónica </p>
              <p>Rol: Front-End</p>
              <p><br></p>
              <p><br></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="img/estefania.PNG" alt="John" style="width:100%">
            <div class="container">
              <h2>Estefanía Cruz</h2>
              <p class="title">PILARES </p>
              <p>Estudiante de secundaria</p>
              <p>Interés en la ingeniería mecatrónica </p>
              <p>Rol: Front-End</p>
              <p><br></p>
              <p><br></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="img/fernanda.PNG" alt="John" style="width:100%">
            <div class="container">
              <h2>Fernanda Cruz</h2>
              <p class="title">PILARES </p>
              <p>Estudiante de prepa</p>
              <p>Interés en la ingeniería química y derecho </p>
              <p>Rol: Front-End</p>
              <p><br></p>
              <p><br></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="img/daniel.jpg" alt="Jane" style="width:100%">
            <div class="container">
              <h2>Daniel Pineda</h2>
              <p class="title">Universidad Nacional Autónoma de México</p>
              <p>PILARES Docente</p>
              <p><br></p>
              <p><br></p>
              <p><br></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="img/orlando.jpg" alt="Mike" style="width:100%">
            <div class="container">
              <h2>Orlando Salvador</h2>
              <p class="title">Universidad Nacional Autónoma de México</p>
              <p>PILARES Docente</p>
              <p><br></p>
              <p><br></p>
              <p><br></p>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
