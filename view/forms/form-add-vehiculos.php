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
  <form action="../../controller/add_vehiculos.php" method="POST">
    <h3>Insertar vehiculos</h3>
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationServer01">Placa</label>
          <input type="text" class="form-control " id="validationServer01" placeholder="Número de placa" required name="vehiculo-placa">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="validationServer02">Marca</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Marca del vehiculo"  required name="vehiculo-marca">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <div class="col-md-4 mb-3">
          <label for="validationServer02">Modelo</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Modelo del vehiculo"  required name="vehiculo-modelo">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="validationServer02">Color</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Color del vehiculo"  required name="vehiculo-color">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="validationServer02">Año</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Año del vehiculo"  required name="vehiculo-aaa">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="validationServer02">Precio</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Precio de alquiler por dia"  required name="vehiculo-precio">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

      <button class="btn btn-primary" type="submit">Guardar</button>
</form>
    </div>

</body>