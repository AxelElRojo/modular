<?php
include_once('./api/.includes/session.inc.php');
if(sesion_existe())
	readfile('inicio.php');
else
	readfile('login.html');