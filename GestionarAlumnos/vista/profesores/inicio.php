<div class="container mt-4">
  <a href="?controlador=profesores&accion=crear" class="btn btn-primary mb-3">
    + Agregar Registro
  </a>

  <div class="table-responsive mt-3">
    <table class="table table-bordered table-striped">
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Dirección</th>
          <th>Curso</th>
          <th>DNI</th>
          <th>Años de Experiencia</th>
          <th>Acción</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($listaProfesores as $profesor) { ?>
          <tr>
            <td><?php echo $profesor->getId(); ?></td>
            <td><?php echo $profesor->getNombre(); ?></td>
            <td><?php echo $profesor->getApellidos(); ?></td>
            <td><?php echo $profesor->getDireccion(); ?></td>
            <td><?php echo $profesor->getCurso(); ?></td>
            <td><?php echo $profesor->getDni(); ?></td>
            <td><?php echo $profesor->getAnioExperiencia(); ?></td>
            <td><?php echo $profesor->getAccion(); ?></td>
            <td>
              <a href="?controlador=profesores&accion=editar&id=<?php echo $profesor->getId(); ?>" 
                 class="btn btn-warning btn-sm">
                <i class="fa fa-edit"></i> Editar
              </a>
              <a href="?controlador=profesores&accion=eliminar&id=<?php echo $profesor->getId(); ?>" 
                 onclick="return confirm('¿Seguro que deseas eliminar este registro?');" 
                 class="btn btn-danger btn-sm">
                <i class="fa fa-trash"></i> Eliminar
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody> 
    </table>
  </div>
</div>
