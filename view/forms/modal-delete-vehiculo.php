
<div class="modal fade" id="modal-delete-vehiculo<?php echo $display['VEHICULO_PLACA']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo "¿Eliminar a " .  $display['VEHICULO_MARCA']?> <?php echo $display['VEHICULO_MODELO'] . "?"?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <a href="../controller/delete_vehiculos.php?VEHICULO_PLACA=<?php echo $display['VEHICULO_PLACA']?>"><i class="icon ion-md-checkmark"></i>Si, eliminar vehiculo</a>

      </div>
    </div>
  </div>
</div>