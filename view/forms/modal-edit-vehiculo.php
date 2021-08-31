<?php  
$consulta_tipo_b = $consulta-> ConsultarRazonSocial()
?>
<div class="modal fade" id="modal-edit-vehiculo<?php echo $display['VEHICULO_PLACA']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar vehiculo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../controller/update_vehiculo.php" method="POST">
      <div class="form-row">
        <div class="col-md-12 mb-3">
          <label for="validationServer01">Placa</label>
          <input maxlength="7" minlength="7"  type="text" class="form-control text-uppercase " id="validationServer01" placeholder="Número de placa" required name="vehiculo-placa" value="<?php echo $display['VEHICULO_PLACA'] ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationServer02">Marca</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Marca del vehiculo"  required name="vehiculo-marca" value="<?php echo $display['VEHICULO_MARCA'] ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        
        <div class="col-md-12 mb-3">
          <label for="validationServer02">Modelo</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Modelo del vehiculo"  required name="vehiculo-modelo" value="<?php echo $display['VEHICULO_MODELO'] ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationServer02">Color</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Color del vehiculo"  required name="vehiculo-color" value="<?php echo $display['VEHICULO_COLOR'] ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationServer02">Año</label>
          <input maxlength="4" minlength="4" type="text" class="form-control" id="validationServer02" placeholder="Año del vehiculo"  required name="vehiculo-aaa" value="<?php echo $display['VEHICULO_AAA'] ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-12 mb-3">
          <label for="validationServer02">Precio</label>
          <input type="text" class="form-control" id="validationServer02" placeholder="Precio de alquiler por dia"  required name="vehiculo-precio" value="<?php echo $display['VEHICULO_PRECIO'] ?>">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

      <button class="btn btn-primary col-md-12" type="submit">Actualizar</button>
</form>

      </div>
    </div>
  </div>
</div>