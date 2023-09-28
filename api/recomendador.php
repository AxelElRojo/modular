<?php
require_once('.includes/db_conn.inc.php');
require_once('.includes/session.inc.php');
sesion_bloqueo();
$idJuego = $conn->real_escape_string($_GET['idJuego']);
if(isset($_GET['idUsuario']))
	$idUsuario = $conn->real_escape_string($_GET['idUsuario']);
else
	$idUsuario = $_SESSION['id'];
$n = $_GET['n'];
header("Content-Type: application/json");
function hobbiesToArray(int $id) : array {
	global $conn;
	$stmt = $conn->prepare("SELECT idHobbie FROM hobbiesUsuario WHERE idUsuario = ?");
	$stmt->bind_param('i', $id);
	$stmt->execute();
	$res = $stmt->get_result();
	$hobbies = [];
	while($row = $res->fetch_assoc())
		array_push($hobbies, $row['idHobbie']);
	$res->close();
	$stmt->close();
	return $hobbies;
}
$hobbiesUsuario = hobbiesToArray($idUsuario);
$distancia = [];
$porcentajes = [];
$distMin = 1e5;
$stmt = $conn->prepare("SELECT idUsuario AS id FROM videojuegosUsuario WHERE idUsuario!=? AND idVideojuego=?");
$stmt->bind_param('ii', $idUsuario, $idJuego);
$stmt->execute();
$res = $stmt->get_result();
while($row = $res->fetch_assoc()){
	$hobbiesOtro = hobbiesToArray($row['id']);
	$hobbiesTotales = array_unique(array_merge($hobbiesUsuario, $hobbiesOtro));
	$distancia[$row['id']] = 0;
	foreach($hobbiesTotales as $value)
		$distancia[$row['id']] += abs(in_array($value, $hobbiesUsuario) - in_array($value, $hobbiesOtro));
	if($distancia[$row['id']] < $distMin)
		$distMin = $distancia[$row['id']];
}
$res->close();
$stmt->close();
asort($distancia, SORT_NUMERIC);
$distancia = array_slice($distancia, 0, $n, true);
foreach($distancia as $id => $dist)
	$porcentajes[$id] = number_format($distMin*100/$dist, 2);
$ids = array_keys($distancia);
echo json_encode(array("usuario" => intval($idUsuario), "ids" => $ids, "distancias" => $distancia, "compatibilidad" => $porcentajes));