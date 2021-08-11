<?php 

    require_once '../model/sql.php';
    require_once '../model/conexion.php';

    $insertar = new sql();


    $vehiculo_placa = $_POST['vehiculo-placa'];
    $vehiculo_marca = $_POST['vehiculo-marca'];
    $vehiculo_modelo = $_POST['vehiculo-modelo'];
    $vehiculo_color = $_POST['vehiculo-color'];
    $vehiculo_aaa = $_POST['vehiculo-aaa'];
    $vehiculo_precio = $_POST['vehiculo-precio'];

    $insertar_vehiculos = $insertar->AgregarVehiculos($vehiculo_placa, $vehiculo_marca, $vehiculo_modelo, $vehiculo_color, $vehiculo_aaa, $vehiculo_precio);

    header ('Location: ../view/page-vehiculos.php');
?>