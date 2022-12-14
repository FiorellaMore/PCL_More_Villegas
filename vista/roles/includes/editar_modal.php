<!--ventana para Update--->
<div class="modal fade" id="editarRol<?php echo $rol->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="editaCat">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Rol</h5>
        <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <form method="POST" action="../../controlador/roles/editar.php">
        <input type="hidden" name="idRol" value="<?php echo $rol->id; ?>">
        <div class="modal-body" id="cont_modal">
          <div>
            <label for="editar-nombre" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" id="editar-nombre" name="nombre" value="<?php echo $rol->nombre; ?>" placeholder="Agregar nombre" required autofocus>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>
