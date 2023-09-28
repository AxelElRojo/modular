<?php
include_once('./api/.includes/session.inc.php');
if(sesion_existe()){
	if(isset($_SESSION['noterminado']))
		switch($_SESSION['noterminado']){
			case 'hobbies':
			case 'plataformas':
			case 'videojuegos':
				readfile("agregador.php?tipo={$_SESSION['noterminado']}");
			break;
			default:
				readfile('views/inicio.html');
		}
	elseif(!isset($_REQUEST['tipo']))
		readfile('views/inicio.html');
	else
		switch($_REQUEST['tipo']){
			case 'recomendar':
				readfile("views/recomendaciones.html");
			break;
			default:
				readfile('views/inicio.html');
		}
}elseif(!isset($_GET['registro']))
	readfile('views/login.html');
else
	readfile('views/registro.html');