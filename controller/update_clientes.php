<?php 

    require_once '../model/sql.php';
    require_once '../model/conexion.php';

    $update = new sql();

    $cliente_id = $_POST['cliente-ide'];
    $cliente_nombre = $_POST['cliente-nombre'];
    $cliente_correo = $_POST['cliente-correo'];
    $cliente_celular = $_POST['cliente-celular'];
    $cliente_direccion = $_POST['cliente-direccion'];
    $cliente_tipo = $_POST['cliente-tipo'];

    $updates_clientes = $update->UpdateClientes($cliente_id, $cliente_nombre, $cliente_correo, $cliente_celular,$cliente_direccion, $cliente_tipo);
    header ('Location: ../view/page-clientes.php');

?>