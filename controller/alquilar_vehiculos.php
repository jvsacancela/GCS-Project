<link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">

<?php 

    require_once '../model/sql.php';
    require_once '../model/conexion.php';

    $insertar = new sql();

    if($_POST){

        $alquiler_vehiculo = $_POST['alquiler-vehiculo'];
        $consultar_placa = $insertar-> ConsultarVehiculoAlquilado($alquiler_vehiculo);

        if($consultar_placa->num_rows>0){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>El vehiculo ya se encuentra alquilado</strong>
        <a href="../view/inicio.php" class="btn-close" aria-label="Close"></a>
        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

        <?php
        }else{ 
            $alquiler_fecha = $_POST['alquiler-fecha'];
            $alquiler_dias = $_POST['alquiler-dias'];
            $alquiler_total = $_POST['alquiler-total'];
            $alquiler_cliente = $_POST['alquiler-cliente'];
            $alquiler_vehiculo = $_POST['alquiler-vehiculo'];
            $alquiler_responsable = $_POST['alquiler-responsable'];

            $insertar_vehiculos = $insertar->AlquilarVehiculos($alquiler_fecha, $alquiler_dias, $alquiler_total, $alquiler_cliente, $alquiler_vehiculo, $alquiler_responsable);

            header ('Location: ../view/inicio.php');
        } 
    }
?>