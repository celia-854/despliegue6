<div class="card mt-5">
  <div class="card-header">Crear Alumnos</div>
  <div class="card-body">
    <form action="" method="post">
      <div class="mb-3">
        <label for="nombres" class="form-label">Nombres</label>
        <input 
          type="text" 
          class="form-control" 
          name="nombres" 
          id="nombres" 
          aria-describedby="helpId" 
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
        <label for="telefono" class="form-label">Teléfono</label>
        <input
            type="text"
            class="form-control"
            name="telefono"
            id="telefono"
            placeholder="Teléfono"
        />
        </div>

        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            placeholder="Email"
        />
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="?controlador=alumnos&accion=inicio" class="btn btn-danger">Cancelar</a>
        </form>

        </div>
        <div class="card-footer text-muted">Footer</div>
