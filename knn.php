<?php
require_once('.includes/db_conn.inc.php');
require_once('.includes/session.inc.php');
sesion_bloqueo();
header("Content-Type: application/json");
function hobbiesToArray(int $id) : array {
	global $conn;
	$stmt = $conn->prepare("SELECT idHobbie FROM hobbiesUsuario WHERE idUsuario = ?");
	$stmt->bind_param('i', $_SESSION['idUsuario']);
	$stmt->execute();
	$res = $stmt->get_result();
	$hobbies = [];
	while($row = $res->fetch_assoc())
		array_push($hobbies, $row['idHobbie']);
	$res->close();
	$stmt->close();
	return $hobbies;
}
$hobbiesUsuario = hobbiesToArray($_SESSION['id']);
$distancia = [];
//! TODO: Que sólo seleccione usuarios con juegos y plataformas en común
$stmt = $conn->prepare("SELECT id FROM usuarios WHERE id != ?");
$stmt->bind_param('i', $_SESSION['id']);
$res = $stmt->get_result();
while($row = $res->fetch_assoc()){
	$hobbiesOtro = hobbiesToArray($row['id']);
	$hobbiesTotales = array_merge($hobbiesUsuario, $hobbiesOtro);
	$distancia[$row['id']] = 0;
	foreach($hobbiesTotales as $key => $value)
		$distancia[$row['id']] += abs(isset($hobbiesUsuario[$key]) - isset($hobbiesOtro[$key]));
}
echo json_encode(array("usuario" => $_SESSION['id'], "distancias" => $distancia));