<?php
/******************************************
@author: IBERO-MIT-PILARES
@desc: Módulo para guardar partida
******************************************/
if(isset($_SESSION['nombre'])){
  header("Location: index.php");
  exit();
}

session_start();
$link = mysqli_connect("localhost","root","password","ajedrez") or die(mysqli_connect_error());

if(!isset($_REQUEST)){
	header("Location: index.php");
	exit();
}

$bandera = $_REQUEST['bandera'];

// Si el jugador 1 ha ganado la partida
if($bandera == 1){ 
	echo "El jugador gana";
	// Consultamos cuántas ganadas tiene
	$queryGanadas = "	SELECT ifnull(ganadas,0) AS totalGanadas
						FROM ajedrez.usuario
						WHERE idUsr = '%d'";

	$parametros = array($_SESSION['idSesion']);
	$queryGanadasParam = vsprintf($queryGanadas, $parametros);
	echo $queryGanadasParam;

	if(!$ganadas = $link->query($queryGanadasParam)){
		echo "La consulta falló";
	    echo "Errno: " . $link->errno . "\n";
	    echo "Error: " . $link->error . "\n";
	    header("Location: index.php");
		exit();
	}

	$datosGanadas = $ganadas->fetch_assoc();
	$numGanadas = $datosGanadas['totalGanadas']+1;

	// Insertamos la nueva partida ganada
	$queryUpdateGanadas = "	UPDATE ajedrez.usuario
						SET ganadas = '%d'
						WHERE idUsr = '%d'";

	$parametros = array($numGanadas,$_SESSION['idSesion']);
	$updateGanadasParam = vsprintf($queryUpdateGanadas, $parametros);
	echo $updateGanadasParam;

	if(!$updateganadas = $link->query($updateGanadasParam)){
		echo "La consulta falló";
	    echo "Errno: " . $link->errno . "\n";
	    echo "Error: " . $link->error . "\n";
	    header("Location: index.php");
		exit();
	}
}

// Si el jugador 1 ha perdido la partida
if($bandera == 2){

	// Consultamos cuántas perdidas tiene
	$queryPerdidas = "	SELECT ifnull(perdidas,0) AS totalPerdidas
						FROM ajedrez.usuario
						WHERE idUsr = '%d'";

	$parametros = array($_SESSION['idSesion']);
	$queryPerdidasParam = vsprintf($queryPerdidas, $parametros);

	if(!$perdidas = $link->query($queryPerdidasParam)){
		echo "La consulta falló";
	    echo "Errno: " . $link->errno . "\n";
	    echo "Error: " . $link->error . "\n";
	    header("Location: index.php");
		exit();
	}

	$datosPerdidas = $perdidas->fetch_assoc();
	$numPerdidas = $datosPerdidas['totalPerdidas']+1;

	// Insertamos la nueva partida perdida
	$queryUpdatePerdidas = "	UPDATE ajedrez.usuario
						SET perdidas = '%d'
						WHERE idUsr = '%d'";

	$parametros = array($numPerdidas,$_SESSION['idSesion']);
	$updateGanadasParam = vsprintf($queryUpdatePerdidas, $parametros);

	if(!$updateperdidas = $link->query($updateGanadasParam)){
		echo "La consulta falló";
	    echo "Errno: " . $link->errno . "\n";
	    echo "Error: " . $link->error . "\n";
	    header("Location: index.php");
		exit();
	}

}

// Consultamos el total de partidas jugadas
	$queryPartida = "	SELECT ifnull(totalPartidas,0) AS totalPartidas
						FROM ajedrez.usuario
						WHERE idUsr = '%d'";

	$parametros = array($_SESSION['idSesion']);
	$queryPartidaParam = vsprintf($queryPartida, $parametros);

	if(!$partida = $link->query($queryPartidaParam)){
		echo "La consulta falló";
	    echo "Errno: " . $link->errno . "\n";
	    echo "Error: " . $link->error . "\n";
	    header("Location: index.php");
		exit();
	}

	$datosPartidas = $partida->fetch_assoc();
	$numPartidas = $datosPartidas['totalPartidas']+1;

	// Insertamos la partida jugada
	$updatePartidas = "	UPDATE ajedrez.usuario
							SET totalPartidas = '%d'
							WHERE idUsr = '%d'";

	$parametros = array($numPartidas,$_SESSION['idSesion']);
	$updatePartidasParam = vsprintf($updatePartidas, $parametros);

	if(!$updatePartidas = $link->query($updatePartidasParam)){
		echo "La consulta falló";
	    echo "Errno: " . $link->errno . "\n";
	    echo "Error: " . $link->error . "\n";
	    header("Location: index.php");
		exit();
	}
	exit();
?>