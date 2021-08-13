
<div class="modal fade" id="modal-delete-clientes<?php echo $display['CLIENTE_ID']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo "¿Eliminar a " .  $display['CLIENTE_NOMBRE'] . "?"?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <a href="../controller/delete_clientes.php?CLIENTE_ID=<?php echo $display['CLIENTE_ID']?>"><i class="icon ion-md-checkmark"></i>Si, eliminar cliente</a>

      </div>
    </div>
  </div>
</div>