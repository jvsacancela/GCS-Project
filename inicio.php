<?php 

  require_once 'model/conexion.php';
  require_once 'model/sql.php';

  $consulta = new sql();
  
  $consulta_alquiler = $consulta-> ConsultarAlquiler();
  $contar_clientes = $consulta-> ContarClientes()->fetch_assoc();
  $contar_vehiculos = $consulta-> ContarVehiculos()->fetch_assoc();
  $contar_alquiler = $consulta-> ContarAlquiler()->fetch_assoc();

  $_contar_clientes = implode($contar_clientes);
  $_contar_vehiculos = implode($contar_vehiculos);
  $_contar_alquiler = implode($contar_alquiler);
  

?>

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
<body>
   
  <div class="d-flex" id="sidebar-principal">
    <div id="sidebar-items">
      <div class="sidebar-heading "></div>
      <div class="list-group list-group-flush my-3" >
        <a href="" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-home"></i> Inicio</a>
        <a href="view/page-vehiculos.php" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-car"></i> Vehiculos</a>
        <a href="view/page-clientes.php" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-people"></i> Clientes</a>
        <a href="" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-attach"></i> Reportes</a>
      </div>
    </div>
  

    <!---Contenido-->
    <div id="contenido-page">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="icon ion-md-reorder" id="menu"></i>
          <h3 class="fs-2 m-0"> Inicio</h3>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>Nombre
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

      </nav>

      <div class="container-fluid px-4">
        <div class="row g-3 my-2">

          <div class="col-md-4">
            <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" id="infocard">
              <div><h3>Vehiculos</h3></div>
              <h1><?php echo $_contar_vehiculos?></h1>
            </div>
          </div>
          

          <div class="col-md-4">
            <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" id="infocard">
              <div><h3>Clientes</h3></div>
              <h1><?php echo $_contar_clientes?></h1>
            </div>
          </div>

          <div class="col-md-4">
            <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" id="infocard">
              <div><h3>Alquilados</h3></div>
              <h1><?php echo $_contar_alquiler ?></h1>
            </div>
          </div>

        </div>

        <div class="row my-5 col-md-11 m-auto">
          <h3 class="fs-4 mb-3"><a href="" id="btnExport"><i class="icon ion-md-open"></i></a> Vehiculos alquilados</h3>
          <div class="col">
            <div class="table-responsive">
              <table class="table table-hover text-center">
                <thead>
                  <th></th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Total</th>
                  <th>Cedula / RUC</th>
                  <th>Placa</th>
                </thead>

                <tbody>
                <?php while($display = $consulta_alquiler->fetch_assoc()){ ?>
                  <tr>
                    <td><a href="" id="btnFactura"><i class="icon ion-md-document"></i></a></td>
                    <td><?php echo $display['ALQUILER_FECHA'];?></td>
                    <td><?php echo $display['ALQUILER_HORA'];?></td>
                    <td><?php echo $display['ALQUILER_TOTAL'];?></td>
                    <td><?php echo $display['CLIENTE_CLIENTE_CEDULA'];?></td>
                    <td><?php echo $display['VEHICULOS_VEHICULO_PLACA'];?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
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