<?php

include "../connection/connection.php";
// Consulta SQL para obtener los datos
$sql = "SELECT * FROM doctor";
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
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['nombreD']) . '</td>';
    echo '<td>' . htmlspecialchars($row['apellidosD']) . '</td>';
    echo '<td>' . htmlspecialchars($row['sexoD']) . '</td>';
    echo '<td>' . htmlspecialchars($row['edadD']) . '</td>';
    echo '<td>' . htmlspecialchars($row['especialidad']) . '</td>';
    echo '<td>' . htmlspecialchars($row['turno']) . '</td>';
    echo '<td>' . htmlspecialchars($row['telefono']) . '</td>';
    echo '<td>' . htmlspecialchars($row['correo']) . '</td>';
    echo '<td>
            <button class="btn btn-danger btn-sm">Eliminar</button>
            <button class="btn btn-primary btn-sm">Actualizar</button>
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
