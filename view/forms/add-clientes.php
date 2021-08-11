<?php 
    require_once '../../model/conexion.php';
    require_once '../../model/sql.php';

    $consulta = new sql();

    $consulta_tipo = $consulta-> ConsultarRazonSocial();

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
    <form action="../../controller/add_clientes.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">Cédula</label>
      <input type="text" class="form-control " id="validationServer01" placeholder="Número de cédula" required name="cliente-id">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationServer02">Nombre/Entidad</label>
      <input type="text" class="form-control" id="validationServer02" placeholder="Nombre de usuario o empresa"  required name="cliente-nombre">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Correo</label>
      <input type="text" class="form-control" id="validationServer02" placeholder="Correo electrónico"  required name="cliente-correo">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationServer02">Celular</label>
      <input type="text" class="form-control" id="validationServer02" placeholder="Número celular"  required name="cliente-celular">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationServer02">Direción</label>
      <input type="text" class="form-control" id="validationServer02" placeholder="Dirección"  required name="cliente-direccion">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationServer02">Razón social</label>
      <select name="cliente-tipo" id="slcat1" class="form-control">
            <?php while($display = $consulta_tipo->fetch_assoc()){?>
                <option value="<?php echo $display['TIPO_CLIENTE_ID']?>"><?php echo $display['TIPO_CLIENTE_NOMBRE']?></option>
            <?php } ?>                                    
        </select> 
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

  <button class="btn btn-primary" type="submit">Guardar</button>
</form>
    </div>

</body>