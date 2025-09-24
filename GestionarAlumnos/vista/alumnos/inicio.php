<div class="table-responsive mt-5">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
            <?php foreach ($listaAlumnos as $alumnos) { ?>
                <tr>
                    <td scope="row"><?php echo $alumnos->getId(); ?></td>
                    <td><?php echo $alumnos->getNombre(); ?></td>
                    <td><?php echo $alumnos->getApellidos(); ?></td>
                    <td><?php echo $alumnos->getDireccion(); ?></td>
                    <td><?php echo $alumnos->getTelefono(); ?></td>
                    <td><?php echo $alumnos->getEmail(); ?></td>
                    <td>
                        <a href="?controlador=alumnos&accion=editar&id=<?php echo $alumnos->getId(); ?>" 
                        class="btn btn-warning">Editar</a>
                        <a href="?controlador=alumnos&accion=eliminar&id=<?php echo $alumnos->getId(); ?>" 
                        class="btn btn-danger">Eliminar</a>

                    </td>
                </tr>
            <?php } ?>

    </tbody>
  </table>
</div>
