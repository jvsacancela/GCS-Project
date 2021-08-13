<link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">


<?php 

    require_once '../model/sql.php';
    require_once '../model/conexion.php';

    $insertar = new sql();

    if($_POST){

        $cliente_id = $_POST['cliente-id'];
        $consultar_clientes = $insertar-> ConsultarClienteID($cliente_id);

        if($consultar_clientes->num_rows>0){
            echo "si existe valor";
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Datos no almacenados</strong> Al parecer existen datos ya existentes
        <a href="../view/page-clientes.php" class="btn-close" aria-label="Close"></a>
        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

        <?php
        }else{ 
            echo "no existe valor";
            $cliente_id = $_POST['cliente-id'];
            $cliente_nombre = $_POST['cliente-nombre'];
            $cliente_correo = $_POST['cliente-correo'];
            $cliente_celular = $_POST['cliente-celular'];
            $cliente_direccion = $_POST['cliente-direccion'];
            $cliente_tipo = $_POST['cliente-tipo'];
    
            if($cliente_tipo == 1){
                $cliente_id = $cliente_id . "001";
            }else{
                $cliente_id = $cliente_id;
            }
    
            $insertar_clientes = $insertar->AgregarClientes($cliente_id, $cliente_nombre, $cliente_correo, $cliente_celular,$cliente_direccion, $cliente_tipo);
    
            header ('Location: ../view/page-clientes.php');
        } 
    }?>