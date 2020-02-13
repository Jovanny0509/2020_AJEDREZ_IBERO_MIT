<?php
/******************************************
@author: IBERO-MIT-PILARES
@desc: Módulo de ejercicios
******************************************/
$link = mysqli_connect("localhost","root","password","ajedrez") or die(mysqli_connect_error());

if(!isset($_REQUEST)){
	header("Location: index.php");
	exit();
}

// Recibe los parámetros
$nombre 		= $_REQUEST['nombre'];
$password 		= $_REQUEST['password'];
$discapacidad	= $_REQUEST['discapacidad'];
$usuario		= $_REQUEST['usuario'];
$email 			= $_REQUEST['email'];

$queryInsert = "INSERT INTO ajedrez.usuario(nombre,passwd,discapacidad,usuario,email) VALUES('".$nombre."','".$password."',".$discapacidad.",'".$usuario."','".$email."')";

if(!$inserta = $link->query($queryInsert)){
	echo "Errno: " . $link->errno . "\n";
    echo "Error: " . $link->error . "\n";
    header("Location: index.php");
	exit();
}
/*$datosUsuario = $query->fetch_assoc();
$idUsuario = $datosUsuario['idUsuario'];*/
?>