



<!--Seccion del modal de la informacion de la persona-->

<!-- Modal -->
<div class="modal fade" id="editModal<?php echo $fila['idUsuarios']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="editar_usuario.php?id=<?php echo $fila['idUsuarios'] ?>&tallerista=<?php echo $fila['NombreTallerista'] ?>&taller=<?php echo $fila['NombreTaller'] ?>&calendario=<?php echo $fila['Ingreso'] ?>&turno=<?php echo $fila['Turno'] ?>&dia=<?php echo $fila['Dia'] ?>" method="POST">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="recipient-name" value="<?php echo $fila["Codigo"]; ?>" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre Completo:</label>
            <input type="text" class="form-control" id="recipient-name" value="<?php echo $fila["Nombre"]; ?>" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Carrera:</label>
            <input type="text" class="form-control" id="recipient-name" value="<?php echo $fila["Carrera"]; ?>" required>
          </div>

          <div class="modal-footer">
        <button type="submit" class="btn btn-secondary"  data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" >Guardar cambios</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

