<?php

include "../connection/connection.php";
// Consulta SQL para obtener los datos
$sql = "SELECT * FROM doctor where '..'";
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
            <th>Especialidad</th>
            <th>Turno</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>';

  // Output de datos de cada fila
while($row = $query->fetch_assoc()) {
  $userD = htmlspecialchars($row['userD']);
  $idDoctor = htmlspecialchars($row['idDoctor']);
  $nombreDoctor = htmlspecialchars($row['nombreD']);
  echo '<tr>';
  echo '<td>' . $nombreDoctor . '</td>';
  echo '<td>' . htmlspecialchars($row['apellidosD']) . '</td>';
  echo '<td>' . htmlspecialchars($row['sexoD']) . '</td>';
  echo '<td>' . htmlspecialchars($row['edadD']) . '</td>';
  echo '<td>' . htmlspecialchars($row['especialidad']) . '</td>';
  echo '<td>' . htmlspecialchars($row['turno']) . '</td>';
  echo '<td>' . htmlspecialchars($row['telefono']) . '</td>';
  echo '<td>' . htmlspecialchars($row['correo']) . '</td>';
  echo '<td>
          <form action="frmDoctor.php" method="POST" style="display:inline;">
              <input type="hidden" name="idDoctor" value="' . htmlspecialchars($row['idDoctor']) . '">
              <input type="hidden" name="userD" value="' . htmlspecialchars($row['userD']) . '">
              <input type="hidden" name="passD" value="' . htmlspecialchars($row['passD']) . '">
              <input type="hidden" name="nombreD" value="' . htmlspecialchars($row['nombreD']) . '">
              <input type="hidden" name="apellidosD" value="' . htmlspecialchars($row['apellidosD']) . '">
              <input type="hidden" name="sexoD" value="' . htmlspecialchars($row['sexoD']) . '">
              <input type="hidden" name="edadD" value="' . htmlspecialchars($row['edadD']) . '">
              <input type="hidden" name="especialidad" value="' . htmlspecialchars($row['especialidad']) . '">
              <input type="hidden" name="turno" value="' . htmlspecialchars($row['turno']) . '">
              <input type="hidden" name="telefono" value="' . htmlspecialchars($row['telefono']) . '">
              <input type="hidden" name="correo" value="' . htmlspecialchars($row['correo']) . '">
              <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
          </form>
          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal'.$idDoctor.'">Eliminar</button>
          <div class="modal fade" id="modal'.$idDoctor.'" tabindex="-1" role="dialog" aria-labelledby="modalLabel'.$idDoctor.'" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalLabel'.$idDoctor.'">Confirmar eliminación</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          ¿Estás seguro de que quieres eliminar a '.$nombreDoctor.'?
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <form action="../PHP/Doctor/eliminarDoctor.php" method="POST" style="display:inline;">
                              <input type="hidden" name="idDoctor" value="'.$idDoctor.'">
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
