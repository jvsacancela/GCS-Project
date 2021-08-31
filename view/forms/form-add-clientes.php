<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../controller/add_clientes.php" method="POST">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationServer01">Cédula</label>
                <input type="text"  maxlength="10" minlength="10" class="form-control " id="validationServer01" placeholder="Número de cédula" required name="cliente-id">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Nombre/Entidad</label>
                <input type="text" class="form-control" id="validationServer02" placeholder="Nombre de usuario o empresa"  required name="cliente-nombre">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              
              <div class="col-md-12 mb-3">
                <label for="validationServer02">Correo</label>
                <input type="email" class="form-control" id="mail" placeholder="Correo electrónico"  required name="cliente-correo">
                <span  style="color: red" id="emailOK"></span>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>


              <div class="col-md-12 mb-3">
                <label for="validationServer02">Celular</label>
                <input type="text"  maxlength="10" minlength="10" class="form-control" id="validationServer02" placeholder="Número celular"  required name="cliente-celular">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <label for="validationServer02">Direción</label>
                <input type="text" class="form-control" id="validationServer02" placeholder="Dirección"  required name="cliente-direccion">
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

              <div class="col-md-12 mb-3">
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

            <button class="btn btn-primary col-md-12" type="submit">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>

document.getElementById('mail').addEventListener('input', function() {
    campo = event.target;
    valido = document.getElementById('emailOK');
        
    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(campo.value)) {
      
      valido.innerText = "Correo valido";
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
    } else {
      valido.innerText = "Correo incorrecto";
        
        if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();

    }
    }
});
</script>