<?php
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
if(sesion_existe())
	echo json_encode(array('exito' => session_destroy()));
else
	echo json_encode(array('exito' => false));