<?php
include_once('./api/.includes/session.inc.php');
if(!sesion_existe())
	header("Location: /");
switch($_GET['tipo']){
	case 'hobbies':
	case 'plataformas':
	case 'videojuegos':
		$file = file_get_contents("views/agregador.html");
		if(!$_GET['cambio']){
			$file = str_replace('CARGADOR', '', $file);
		}else
			$file = str_replace('CARGADOR', 'ENTIDAD.cargar()', $file);
		echo str_replace('ENTIDAD', $_GET['tipo'], $file);
	break;
	default:
		header("Location: /");
}