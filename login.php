
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/css/my-style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body class="bg-primary">
    

<div class="container" style="margin-top: 10rem">
        
        <div class="card m-auto" style="width: 27rem;">
        <div class="text-center">
            <br>
            <h4>Ingreso al sistema</h4>    
        </div>
        
        <hr>
            <div class="card-body">
            <form action="" method="POST">

            <div class="col-md-12 mb-3">
                <label for="validationServer02">Nombres completos</label>
                <input type="text" class="form-control text-uppercase" id="validationServer02"  required name="usuario-nombre">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de cedula</label>
                <input type="text" maxlength="10" minlength="10" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary col-md-12">Ingresar</button>
        </form>
            </div>
        </div>    

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="view/assets/js/validarDatos.js"></script>
<script src="view/assets/js/jquery-3.4.1.slim.min.js"></script>
</body>
</html>

<?php 

    session_start();
    
    require_once 'model/sql.php';
    require_once 'model/conexion.php';

    $consulta = new sql();


    if($_POST){

        $usuario_nombre = $_POST['usuario-nombre'];
        $usuario_cedula = $_POST['usuario'];
        $usuario_contrasena = $_POST['contrasena'];

        $consulta_clave = $consulta->ConsultaUsuarioClave($usuario_nombre, $usuario_cedula, $usuario_contrasena);

        if($consulta_clave->num_rows>0){
            // Sesiones
            $_SESSION['USUARIO_NOMBRE'] = $usuario_nombre;
            header('location: view/inicio.php');
        }else{ 
            ?>
            <script>
                
                Swal.fire({
                    icon: 'error',
                    title: 'Acceso',
                    text: 'Datos incorrectos'

                })
            </script>
        <?php }
    }
?>

