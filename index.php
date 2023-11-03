<?php
include_once('./api/.includes/session.inc.php');
if(sesion_existe()){
	if(isset($_SESSION['noterminado']))
		switch($_SESSION['noterminado']){
			case 'hobbies':
			case 'plataformas':
			case 'videojuegos':
				header("Location: agregador.php?tipo={$_SESSION['noterminado']}&cambio=1");
			break;
			default:
				readfile('views/inicio.html');
		}
	elseif(!isset($_REQUEST['tipo']))
		readfile('views/inicio.html');
	else
		switch($_REQUEST['tipo']){
			case 'recomendar':
				$file = file_get_contents("views/recomendaciones.html");
				echo str_replace('CARGAR', 'usuario.detalles(null, callback)', $file);
			break;
			case 'actualizar':
				readfile("views/actualizar.html");
			break;
			case 'agregar':
				switch($_REQUEST['entidad']){
					case 'hobbies':
					case 'plataformas':
					case 'videojuegos':
						header("Location: agregador.php?tipo={$_REQUEST['entidad']}&cambio=1");
					break;
					default:
						readfile('views/inicio.html');
				}
			break;
			default:
				readfile('views/inicio.html');
		}
}elseif(!isset($_GET['registro']))
	readfile('views/login.html');
else
	readfile("views/registro.html");