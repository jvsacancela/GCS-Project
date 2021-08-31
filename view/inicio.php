<?php 

  session_start();

  if(!isset($_SESSION['USUARIO_NOMBRE'])){
    header ('Location: ../login.php');
  }

  
  require_once '../model/conexion.php';
  require_once '../model/sql.php';

  $consulta = new sql();
  
  $consulta_alquiler = $consulta-> ConsultarAlquiler();
  $contar_clientes = $consulta-> ContarClientes()->fetch_assoc();
  $contar_vehiculos = $consulta-> ContarVehiculos()->fetch_assoc();
  $contar_alquiler = $consulta-> ContarAlquiler()->fetch_assoc();


  $_contar_clientes = implode($contar_clientes);
  $_contar_vehiculos = implode($contar_vehiculos);
  $_contar_alquiler = implode($contar_alquiler);
  
  $consulta_cliente = $consulta-> ConsultarClientes();
  $consulta_placa = $consulta-> ConsultarVehiculos();
  $consulta_responsable = $consulta-> ConsultarResponsable();

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
  <link srv="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"/>
</head>
<body>
   
<div class="d-flex" id="sidebar-principal">
    
    <div id="sidebar-items">
      <div class="sidebar-heading "></div>
      <div class="list-group list-group-flush my-3" >
        <a href="" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-home"></i> Inicio</a>
        <a href="page-vehiculos.php" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-car"></i> Vehiculos</a>
        <a href="page-clientes.php" class="list-group-item list-group-item-action bg-transparent"><i class="icon ion-md-people"></i> Clientes</a>
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
                    <a class="nav-link dropdown-toggle second-text fw-bold text-uppercase" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user me-2"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../controller/cerrar_sesion.php">Salir</a></li>
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
              <h1>500</h1>
            </div>
          </div>
          

          <div class="col-md-4">
            <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" id="infocard">
              <div><h3>Clientes</h3></div>
              <h1>300</h1>
            </div>
          </div>

          <div class="col-md-4">
            <div class="p-3 shadow-sm d-flex justify-content-around align-items-center rounded" id="infocard">
              <div><h3>Alquilados</h3></div>
              <h1>340</h1>
            </div>
          </div>

        </div>

        <div class="row my-5 col-md-11 m-auto">
          <h3 class="fs-4 mb-3"><a href="" id="btnExport"><i class="icon ion-md-open"></i></a> Vehiculos alquilados</h3>

          <div>
            <hr>
            <a class="col-sm-2" id="btnAdd" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon ion-md-list"></i> Nuevo alquiler</a>
            <!--<input class="col-sm-4" type="text" value="Buscar">-->
           
            <br>
          </div> 

          <div class="col">
            <div class="table-responsive">
              <table class="table table-hover text-center">
                <thead>
                  <th></th>
                  <th>Fecha de inicio</th>
                  <th>Dias de alquiler</th>
                  <!--<th>Total</th>-->
                  <th>Cedula / RUC</th>
                  <th>Placa</th>
                  <th>Responsable</th>
                </thead>

                <tbody>
                
                  <tr>
                    <td><a href="../controller/delete_alquiler.php?ALQUILER_CODIGO=<?php echo $display['ALQUILER_CODIGO']?>" id="btnFactura"><i class="icon ion-md-document"></i>Entregar</a></td>

                    <td></td>
                    <td>/td>
                    <!--'];?></td>-->
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>   


  <!--MODALES-->
  <!--INSERTAR ALQUILER-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo alquiler</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../controller/alquilar_vehiculos.php" method="POST">
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationServer01">Fecha</label>
            <input  type="date" class="form-control" id="validationServer01" required name="alquiler-fecha">
          </div>

          <div class="col-md-12 mb-3">
            <label for="validationServer02">Dias</label>
            <input type="text" class="form-control" id="validationServer02" placeholder="Dias de alquiler"  required name="alquiler-dias">
          </div>

          <div class="col-md-12 mb-3">
            <label for="validationServer02">Cliente</label>
            <select name="alquiler-cliente" id="slcat1" class="form-control text-uppercase">
            <option selected disabled value="">Seleccione cliente</option>
                  <?php while($display = $consulta_cliente->fetch_assoc()){?>
                      <option value="<?php echo $display['CLIENTE_ID']?>">
                        <?php echo $display['CLIENTE_ID']?>
                        <?php echo "-"?>
                        <?php echo $display['CLIENTE_NOMBRE']?>
                      </option>
                  <?php } ?>                                    
              </select>
          </div>

          <div class="col-md-12 mb-3">
            <label for="validationServer02">Vehiculo</label>
            <select name="alquiler-vehiculo" id="slcat1" class="form-control text-uppercase">
            <option selected disabled value="">Sleccione vehiculo</option>
                  <?php while($display = $consulta_placa->fetch_assoc()){?>
                      <option value="<?php echo $display['VEHICULO_PLACA']?>">
                        <?php echo $display['VEHICULO_PLACA']?>
                        <?php echo "|"?>
                        <?php echo $display['VEHICULO_MARCA']?>
                        <?php echo $display['VEHICULO_MODELO']?>
                        <?php echo "|"?>
                        <?php echo " $". $display['VEHICULO_PRECIO']?>
                      </option>
                      <?php } ?>                  
              </select> 
          </div>
          
         <!-- <div class="col-md-12 mb-3">
            <label for="validationServer02">Total a cancelar</label>
            <input type="text" class="form-control" id="validationServer02" placeholder="Total a cancelar"  required name="alquiler-total"  disabled value="0">
            
          </div>-->


          <div class="col-md-12 mb-3">
            <label for="validationServer02">Responsable</label>
            <select name="alquiler-responsable" id="slcat1" class="form-control text-uppercase">
            <option selected disabled value="">Seleccione vendedor</option>
                  <?php while($display = $consulta_responsable->fetch_assoc()){?>
                      <option value="<?php echo $display['USUARIO_CEDULA']?>">
                        <?php echo $display['USUARIO_NOMBRE']?>
                      </option>
                  <?php } ?>                                    
              </select>
          </div>


        </div>

        <div class="modal-footer">
          <button class="btn btn-primary col-md-12" type="submit">Guardar</button>
      </form>
      </div>
    </div>
  </div>
</div>




  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
  <script>
   
        var el = document.getElementById("sidebar-principal");
        var toggleButton = document.getElementById("menu");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
  </script>
   
</body>
</html>