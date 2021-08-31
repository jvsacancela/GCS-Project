<?php 

session_start();

if(!isset($_SESSION['USUARIO_NOMBRE'])){
  header ('Location: ../login.php');
}
  
  require_once '../model/conexion.php';
  require_once '../model/sql.php';

  $consulta = new sql();
  $consulta_vehiculos = $consulta-> ConsultarVehiculos();

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/my-style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
   
  <div class="d-flex" id="sidebar-principal">
    <div id="sidebar-items">
      <div class="sidebar-heading "></div>

      <div class="list-group list-group-flush my-3" >
        <a href="inicio.php" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-home"></i> Inicio</a>
        <a href="" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-car"></i> Vehiculos</a>
        <a href="page-clientes.php" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-people"></i> Clientes</a>
      </div>
    </div>
  

    <!---Contenido-->
    <div id="contenido-page">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="icon ion-md-reorder" id="menu"></i>
          <h3 class="fs-2 m-0"> Vehiculos</h3>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle second-text fw-bold text-uppercase" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i><?php echo $_SESSION['USUARIO_NOMBRE']?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../controller/cerrar_sesion.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div>

      </nav>

    <div class="container-fluid px-4">
        <div class="row my-5 col-md-11 m-auto">
          <h3 class="fs-4 mb-3"><a href="" id="btnExport"><i class="icon ion-md-open"></i></a> Vehiculos</h3>

          <div>
            <hr>
            <a class="col-sm-2" id="btnAdd" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon ion-md-car"></i>Nuevo vehiculo</a>
            <!--<input class="col-sm-4" type="text" value="Buscar">-->
            <br>
          </div> 

          <div class="col">
            <div class="table-responsive">
              <table class="table table-hover text-center">
                
                <thead>
                  <th>Operacion</th>
                  <th>Placa</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Color</th>
                  <th>Año</th>
                  <th>Precio de alquiler</th>
                </thead>

                <tbody>
                  <?php while($display = $consulta_vehiculos->fetch_assoc()){ ?>
                  <tr>
                    <td>
                    <a  data-bs-toggle="modal" data-bs-target="#modal-edit-vehiculo<?php echo $display['VEHICULO_PLACA']?>" id="btnEdit"><i class="icon ion-md-create"></i></a>

                    <a data-bs-toggle="modal" data-bs-target="#modal-delete-vehiculo<?php echo $display['VEHICULO_PLACA']?>"  id="btnDelete" ><i class="icon ion-md-trash"></i></a>
                    </td>
                    <td class="text-uppercase"><?php echo $display['VEHICULO_PLACA']; ?></td>
                    <td><?php echo $display['VEHICULO_MARCA']; ?></td>
                    <td><?php echo $display['VEHICULO_MODELO']; ?></td>
                    <td><?php echo $display['VEHICULO_COLOR']; ?></td>
                    <td><?php echo $display['VEHICULO_AAA']; ?></td>
                    <td>$ <?php echo $display['VEHICULO_PRECIO']; ?></td>
                  </tr>
                    <?php 
                      include('forms/modal-delete-vehiculo.php');
                      include('forms/modal-edit-vehiculo.php');
                    ?>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>    
  </div>


<!-- Modal -->



<!-- MODAL INSERTAR VEHICULO-->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar vehiculo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <form action="../controller/add_vehiculos.php" method="POST">
      <div class="form-row">
        <div class="col-md-12 mb-3">
          <label for="validationServer01">Placa</label>
          <input  maxlength="7" minlength="7"  type="text" class="form-control " id="validationServer01" placeholder="Número de placa" required name="vehiculo-placa">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationServer02">Marca</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Marca del vehiculo"  required name="vehiculo-marca">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <div class="col-md-12 mb-3">
          <label for="validationServer02">Modelo</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Modelo del vehiculo"  required name="vehiculo-modelo">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationServer02">Color</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Color del vehiculo"  required name="vehiculo-color">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationServer02">Año</label>
          <input  maxlength="4" minlength="4" type="text" class="form-control" id="validationServer02" placeholder="Año del vehiculo"  required name="vehiculo-aaa">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationServer02">Precio</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Precio de alquiler por dia"  required name="vehiculo-precio">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

      </div>
      <div class="modal-footer">
      <button class="btn btn-primary col-md-12" type="submit">Guardar</button>
    </form>
      </div>
    </div>
  </div>
</div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("sidebar-principal");
        var toggleButton = document.getElementById("menu");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
   
</body>
</html>