<?php
/******************************************
@author: IBERO-MIT-PILARES
@desc: Autenticación de usuario
******************************************/
$link = mysqli_connect("localhost","root","password","ajedrez") or die(mysqli_connect_error());

if(!isset($_REQUEST)){
	header("Location: index.php");
	exit();
}

// Validar si los parámetros vienen vacíos
if($_POST['usuarioAuth'] == '' && $_POST['passwordAuth'] == ''){
	header("Location: index.php");
	exit();
}

$usuario  = $_POST['usuarioAuth'];
$password =	$_POST['passwordAuth'];

$queryAutentica = "SELECT 	idUsr,
							nombre, 
							usuario,
							email,
							discapacidad

					FROM 	ajedrez.usuario
					WHERE 	usuario = '%s' AND passwd = '%s';";

$parametros = array($usuario,$password);
$queryAutenticaParam = vsprintf($queryAutentica, $parametros);


if(!$autentica = $link->query($queryAutenticaParam)){
	echo "La consulta falló";
    echo "Errno: " . $link->errno . "\n";
    echo "Error: " . $link->error . "\n";
    header("Location: index.php");
	exit();
}

$datosUsuario = $autentica->fetch_assoc();

if(sizeof($datosUsuario) == 0){
	header("Location: index.php");
	exit();
}else{

	session_start();
	$_SESSION['idSesion'] = $datosUsuario['idUsr'];
	$_SESSION['usuario']  = $datosUsuario['usuario'];
	$_SESSION['nombre']   = $datosUsuario['nombre'];
	$_SESSION['discapacidad']  = $datosUsuario['discapacidad'];
	header("Location: main.php");
}
?>