<?php

include "../connection/connection.php";
// Consulta SQL para obtener los datos
$sql = "SELECT * FROM clientes";
$query = mysqli_query($conQuery, $sql);

if ($query->num_rows > 0) {
  // Output de los datos en una tabla HTML
  echo '<table class="table table-light-blue table-bordered">';
  echo '<thead class="thead-dark">
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>';

  // Output de datos de cada fila
  while($row = $query->fetch_assoc()) {
    $clienteId= htmlspecialchars($row['idCliente']);
    $userC = htmlspecialchars($row['userC']);
    $nombreCliente = htmlspecialchars($row['nombreC']);
    echo '<tr>';
    echo '<td>' . $nombreCliente . '</td>';
    echo '<td>' . htmlspecialchars($row['apellidosC']) . '</td>';
    echo '<td>' . htmlspecialchars($row['sexoC']) . '</td>';
    echo '<td>' . htmlspecialchars($row['edadC']) . '</td>';
    echo '<td>' . htmlspecialchars($row['telefono']) . '</td>';
    echo '<td>
            <form action="frmPaciente.php" method="POST" style="display:inline;">
              <input type="hidden" name="idCliente" value="' . htmlspecialchars($row['idCliente']) . '">
              <input type="hidden" name="userC" value="' . htmlspecialchars($row['userC']) . '">
              <input type="hidden" name="passC" value="' . htmlspecialchars($row['passC']) . '">
              <input type="hidden" name="nombreC" value="' . htmlspecialchars($row['nombreC']) . '">
              <input type="hidden" name="apellidosC" value="' . htmlspecialchars($row['apellidosC']) . '">
              <input type="hidden" name="sexoC" value="' . htmlspecialchars($row['sexoC']) . '">
              <input type="hidden" name="edadC" value="' . htmlspecialchars($row['edadC']) . '">
              <input type="hidden" name="telefono" value="' . htmlspecialchars($row['telefono']) . '">
                <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
            </form>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal'.$userC.'">Eliminar</button>
            <div class="modal fade" id="modal'.$userC.'" tabindex="-1" role="dialog" aria-labelledby="modalLabel'.$userC.'" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel'.$userC.'">Confirmar eliminación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que quieres eliminar a '.$nombreCliente.'?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <form action="../PHP/Cliente/eliminarCliente.php" method="POST" style="display:inline;">
                                <input type="hidden" name="idCliente" value="'.$clienteId.'">
                                <button type="submit" class="btn btn-danger">Aceptar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </td>';
    echo '</tr>';
}

  echo '</tbody></table>';
} else {
  echo "0 resultados";
}

// Cerrar conexión
$conQuery->close();
?>
