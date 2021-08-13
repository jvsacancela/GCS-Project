<?php 

require_once '../model/sql.php';
require_once '../model/conexion.php';

$eliminar = new sql();

$id = $_GET['CLIENTE_ID'];

$eliminar_cliente = $eliminar-> EliminarClientes($id);

header ('Location: ../view/page-clientes.php');

?>