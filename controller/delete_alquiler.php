<?php 

require_once '../model/sql.php';
require_once '../model/conexion.php';

$eliminar = new sql();

$id = $_GET['ALQUILER_CODIGO'];

$eliminar_alquiler = $eliminar-> EliminarAlquiler($id);

header ('Location: ../view/inicio.php');

?>