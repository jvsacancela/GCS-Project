<?php 

    require_once '../model/sql.php';
    require_once '../model/conexion.php';

    $insertar = new sql();


    $alquiler_fecha = $_POST['alquiler-fecha'];
    $alquiler_dias = $_POST['alquiler-dias'];
    $alquiler_total = $_POST['alquiler-total'];
    $alquiler_cliente = $_POST['alquiler-cliente'];
    $alquiler_vehiculo = $_POST['alquiler-vehiculo'];

    $insertar_vehiculos = $insertar->AlquilarVehiculos($alquiler_fecha, $alquiler_dias, $alquiler_total, $alquiler_cliente, $alquiler_vehiculo);

    header ('Location: ../view/inicio.php');
?>