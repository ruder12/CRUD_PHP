<div class="modal fade" id="Modalcrud" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tile_modal">Crear Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" >
          <input type="hidden" id="iduser" name="iduser" value="">
          <div class="mb-3">
            <label for="nombre" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>
          <div class="mb-3">
            <label for="apellido" class="col-form-label">Apellido</label>
            <input class="form-control" name="apellido" id="apellido"></input>
          </div>
          <div class="mb-3">
            <label for="telefono" class="col-form-label">Telefono</label>
            <input class="form-control" name="telefono" id="telefono"></input>
          </div>
          <div class="mb-3">
            <label for="direccion" class="col-form-label">Direccion</label>
            <input class="form-control" name="direccion" id="direccion"></input>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="controldatos" class="btn btn-primary">Enviar</button>
          </div>
        </form>
      </div>
     
    </div>
  </div>
</div>