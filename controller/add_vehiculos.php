<link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">

<?php 

    require_once '../model/sql.php';
    require_once '../model/conexion.php';


    $insertar = new sql();

    
    if($_POST){

        $vehiculo_placa = $_POST['vehiculo-placa'];
        $consultar_placa = $insertar-> ConsultarPlaca($vehiculo_placa);

        if($consultar_placa->num_rows>0){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Datos no almacenados</strong> Al parecer ya existe ese numero de placa
        <a href="../view/page-vehiculos.php" class="btn-close" aria-label="Close"></a>
        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

        <?php
        }else{ 
            $vehiculo_placa = $_POST['vehiculo-placa'];
            $vehiculo_marca = $_POST['vehiculo-marca'];
            $vehiculo_modelo = $_POST['vehiculo-modelo'];
            $vehiculo_color = $_POST['vehiculo-color'];
            $vehiculo_aaa = $_POST['vehiculo-aaa'];
            $vehiculo_precio = $_POST['vehiculo-precio'];
        
            $insertar_vehiculos = $insertar->AgregarVehiculos($vehiculo_placa, $vehiculo_marca, $vehiculo_modelo, $vehiculo_color, $vehiculo_aaa, $vehiculo_precio);
        
            header ('Location: ../view/page-vehiculos.php');

            ?>
           <!--<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>VEHICULO GUARDADO CORRECTAMENTE</strong>
        <a href="../view/page-vehiculos.php" class="btn-close" aria-label="Close"></a>
        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        --> <?php
        } 
    }
?>