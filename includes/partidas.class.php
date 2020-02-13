<?php
class Partidas{

	var $link;
	var $idUsr;

	function __construct($link) {
        $this->link = $link;
    }

    function getPartidas(){

    	$queryPartidas = "	SELECT ifnull(totalPartidas,0) AS totalPartidas
							FROM ajedrez.usuario
							WHERE idUsr = '%d'";

		$parametros = array($this->idUsr);
		$queryPartidasParam = vsprintf($queryPartidas, $parametros);

		if(!$partida = $this->link->query($queryPartidasParam)){
		    return "Error";
		}

		$partidasArr = array();

		while($row = mysqli_fetch_array($partida)) {
    		$partidasArr[] = $row;
		}

    	return $partidasArr;
    }

    function getPartidasPerdidas(){

    	$queryPartidas = "	SELECT ifnull(perdidas,0) AS perdidas
							FROM ajedrez.usuario
							WHERE idUsr = '%d'";

		$parametros = array($this->idUsr);
		$queryPartidasParam = vsprintf($queryPartidas, $parametros);

		if(!$partida = $this->link->query($queryPartidasParam)){
		    return "Error";
		}

		$partidasArr = array();

		while($row = mysqli_fetch_array($partida)) {
    		$partidasArr[] = $row;
		}

    	return $partidasArr;
    }

    function getPartidasGanadas(){

    	$queryPartidas = "	SELECT ifnull(ganadas,0) AS ganadas
							FROM ajedrez.usuario
							WHERE idUsr = '%d'";

		$parametros = array($this->idUsr);
		$queryPartidasParam = vsprintf($queryPartidas, $parametros);

		if(!$partida = $this->link->query($queryPartidasParam)){
		    return "Error";
		}

		$partidasArr = array();

		while($row = mysqli_fetch_array($partida)) {
    		$partidasArr[] = $row;
		}

    	return $partidasArr;
    }
}
?>