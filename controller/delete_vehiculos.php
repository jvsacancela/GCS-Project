<?php 

require_once '../model/sql.php';
require_once '../model/conexion.php';

$eliminar = new sql();

$id = $_GET['VEHICULO_PLACA'];

$eliminar_vehiculo = $eliminar-> EliminarVehiculos($id);

header ('Location: ../view/page-vehiculos.php');

?>
