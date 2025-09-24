<div class="card mt-5">
  <div class="card-header">Editar Alumno</div>
  <div class="card-body">
    <form method="post" class="p-4">
      <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input 
          type="text" 
          class="form-control" 
          name="id" 
          id="id" 
          value="<?php echo $alumno->getId(); ?>" 
          placeholder="ID"
        >
      </div>
      <div class="mb-3">
        <label for="nombres" class="form-label">Nombres</label>
        <input 
          type="text" 
          class="form-control" 
          name="nombres" 
          id="nombres" 
          value="<?php echo $alumno->getNombre(); ?>" 
          placeholder="Nombres"
        >
      </div>
      <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input 
          type="text" 
          class="form-control" 
          name="apellidos" 
          id="apellidos" 
          value="<?php echo $alumno->getApellidos(); ?>" 
          placeholder="Apellidos"
        >
      </div>

      <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input 
          type="text" 
          class="form-control" 
          name="direccion" 
          id="direccion" 
          value="<?php echo $alumno->getDireccion(); ?>" 
          placeholder="Dirección"
        >
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input 
          type="text" 
          class="form-control" 
          name="telefono" 
          id="telefono" 
          value="<?php echo $alumno->getTelefono(); ?>" 
          placeholder="Teléfono"
        >
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input 
          type="email" 
          class="form-control" 
          name="email" 
          id="email" 
          value="<?php echo $alumno->getEmail(); ?>" 
          placeholder="Email"
        >
      </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="?controlador=alumnos&accion=inicio" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</div>
