<div class="card mt-5">
  <div class="card-header">Crear Profesor</div>
  <div class="card-body">
    <form action="" method="post">
      <div class="mb-3">
        <label for="nombres" class="form-label">Nombres</label>
        <input 
          type="text" 
          class="form-control" 
          name="nombres" 
          id="nombres" 
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
          placeholder="Ej. Matemática, Comunicación"
        />
      </div>
      <div class="mb-3">
        <label for="dni" class="form-label">DNI</label>
        <input
          type="text"
          class="form-control"
          name="dni"
          id="dni"
          placeholder="DNI"
        />
      </div>
      <div class="mb-3">
        <label for="anio_experiencia" class="form-label">Años de Experiencia</label>
        <input
          type="number"
          class="form-control"
          name="anio_experiencia"
          id="anio_experiencia"
          placeholder="Ej. 5"
        />
      </div>

      <button type="submit" class="btn btn-primary">Guardar</button>
      <a href="?controlador=profesores&accion=inicio" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
  <div class="card-footer text-muted">Gestión de Profesores</div>
</div>
