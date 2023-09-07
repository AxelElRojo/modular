<?php
include_once('./api/.includes/session.inc.php');
if(!sesion_existe())
	header("Location: /");
switch($_GET['tipo']){
	case 'hobbies':
	case 'plataformas':
	case 'videojuegos':
		echo str_replace('ENTIDAD', $_GET['tipo'], file_get_contents("views/agregador.html"));
	break;
	default:
		header("Location: /");
}