<?php
include_once('./api/.includes/session.inc.php');
if(sesion_existe()){
	if(isset($_SESSION['noterminado'])){
		switch($_SESSION['noterminado']){
			case 'hobbies':
				readfile('views/agregarHobbies.html');
			break;
			case 'plataformas':
				readfile('views/agregarPlataformas.html');
			break;
			case 'videojuegos':
				readfile('views/agregarVideojuegos.html');
			break;
			default:
				readfile('views/inicio.html');
		}
	}else
		readfile('views/inicio.html');
}
elseif(!isset($_GET['registro']))
	readfile('views/login.html');
else
	readfile('views/registro.html');