<div class="card mt-5">
  <div class="card-header">Editar Profesor</div>
  <div class="card-body">
    <form method="post" class="p-4">
      <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input 
          type="text" 
          class="form-control" 
          name="id" 
          id="id" 
          value="<?php echo $profesor->getId(); ?>" 
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
          value="<?php echo $profesor->getNombre(); ?>" 
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
          value="<?php echo $profesor->getApellidos(); ?>" 
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
          value="<?php echo $profesor->getDireccion(); ?>" 
          placeholder="Dirección"
        >
      </div>
      <div class="mb-3">
        <label for="curso" class="form-label">Curso</label>
        <input 
          type="text" 
          class="form-control" 
          name="curso" 
          id="curso" 
          value="<?php echo $profesor->getCurso(); ?>" 
          placeholder="Ej. Matemática, Comunicación"
        >
      </div>
      <div class="mb-3">
        <label for="dni" class="form-label">DNI</label>
        <input 
          type="text" 
          class="form-control" 
          name="dni" 
          id="dni" 
          value="<?php echo $profesor->getDni(); ?>" 
          placeholder="DNI"
        >
      </div>
      <div class="mb-3">
        <label for="anio_experiencia" class="form-label">Años de Experiencia</label>
        <input 
          type="number" 
          class="form-control" 
          name="anio_experiencia" 
          id="anio_experiencia" 
          value="<?php echo $profesor->getAnioExperiencia(); ?>" 
          placeholder="Ej. 5"
        >
      </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="?controlador=profesores&accion=inicio" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</div>
