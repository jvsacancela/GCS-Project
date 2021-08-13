<?php 
    require_once '../../model/conexion.php';
    require_once '../../model/sql.php';

    $consulta = new sql();

    $consulta_cliente = $consulta-> ConsultarClientes();
    $consulta_placa = $consulta-> ConsultarVehiculos();

?>

<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/my-style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">

  <form action="../../controller/alquilar_vehiculos.php" method="POST">
      <h3>Nuevo alquiler</h3>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationServer01">Fecha</label>
          <input type="date" class="form-control " id="validationServer01" placeholder="Número de cédula" required name="alquiler-fecha">
        </div>

        <div class="col-md-4 mb-3">
          <label for="validationServer02">Dias</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Dias de alquiler"  required name="alquiler-dias">
        </div>

        <div class="col-md-4 mb-3">
          <label for="validationServer02">Cliente</label>
          <select name="alquiler-cliente" id="slcat1" class="form-control text-uppercase">
          <option selected disabled value="">-- SELECCIONAR CLIENTE --</option>
                <?php while($display = $consulta_cliente->fetch_assoc()){?>
                    <option value="<?php echo $display['CLIENTE_ID']?>">
                      <?php echo $display['CLIENTE_ID']?>
                      <?php echo "-"?>
                      <?php echo $display['CLIENTE_NOMBRE']?>
                    </option>
                <?php } ?>                                    
            </select>
        </div>

        <div class="col-md-4 mb-3">
          <label for="validationServer02">Vehiculo</label>
          <select name="alquiler-vehiculo" id="slcat1" class="form-control text-uppercase">
          <option selected disabled value="">-- SELECCIONAR VEHICULO --</option>
                <?php while($display = $consulta_placa->fetch_assoc()){?>
                    <option value="<?php echo $display['VEHICULO_PLACA']?>">
                      <?php echo $display['VEHICULO_PLACA']?>
                      <?php echo "-"?>
                      <?php echo $display['VEHICULO_MARCA']?>
                      <?php echo $display['VEHICULO_MODELO']?>
                      <?php echo "-"?>
                      <?php echo " $". $display['VEHICULO_PRECIO']?>
                    </option>
                    <?php } ?>                  
            </select> 
        </div>
        
        <div class="col-md-4 mb-3">
          <label for="validationServer02">Total a cancelar</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Total a cancelar"  required name="alquiler-total"  disabled value="">
          
        </div>

      <button class="btn btn-primary" type="submit">Guardar</button>
  </form>
    </div>

</body>