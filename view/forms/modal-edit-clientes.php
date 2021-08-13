<?php  
$consulta_tipo_b = $consulta-> ConsultarRazonSocial()
?>
<div class="modal fade" id="modal-edit-clientes<?php echo $display['CLIENTE_ID']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../controller/update_clientes.php" method="POST">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationServer01">Cédula</label>
                <input type="text" class="form-control"  maxlength="10" minlength="10" id="validationServer01" placeholder="Número de cédula" required name="cliente-ide" value="<?php echo $display['CLIENTE_ID']?>">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Nombre/Entidad</label>
                <input type="text" class="form-control" id="validationServer02" placeholder="Nombre de usuario o empresa"  required name="cliente-nombre" value="<?php echo $display['CLIENTE_NOMBRE']?>">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              
              <div class="col-md-12 mb-3">
                <label for="validationServer02">Correo</label>
                <input type="email" class="form-control" id="validationServer02" placeholder="Correo electrónico"  required name="cliente-correo" value="<?php echo $display['CLIENTE_CORREO']?>">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Celular</label>
                <input type="text" class="form-control"  maxlength="10" minlength="10" id="validationServer02" placeholder="Número celular"  required name="cliente-celular" value="<?php echo $display['CLIENTE_CELULAR']?>">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Direción</label>
                <input type="text" class="form-control" id="validationServer02" placeholder="Dirección"  required name="cliente-direccion" value="<?php echo $display['CLIENTE_DIRECCION']?>"">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Razón social</label>
                <option selected disabled value="<?php echo $display['TIPO_CLIENTE_TIPO_CLIENTE_ID']?>"><?php echo $display['TIPO_CLIENTE_TIPO_CLIENTE_ID']?></option>
                <select name="cliente-tipo" id="slcat1" class="form-control">
                      <?php while($display = $consulta_tipo_b->fetch_assoc()){?>
                          <option value="<?php echo $display['TIPO_CLIENTE_ID']?>"><?php echo $display['TIPO_CLIENTE_NOMBRE']?></option>
                      <?php } ?>                                    
                  </select> 
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