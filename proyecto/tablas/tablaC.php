<?php

include "../connection/connection.php";
// Consulta SQL para obtener los datos
$sql = "SELECT * FROM consultas";
$query = mysqli_query($conQuery, $sql);

if ($query->num_rows > 0) {
  // Output de los datos en una tabla HTML
  echo '<table class="table table-light-blue table-bordered">';
  echo '<thead class="thead-dark">
          <tr>
            <th>Cita</th>
            <th>id Cliente</th>
            <th>id Doctor</th>
            <th>Observaciones</th>
            <th>Medicamentos</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>';

  // Output de datos de cada fila
  while($row = $query->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['fechaCita']) . '</td>';
    echo '<td>' . htmlspecialchars($row['idCliente']) . '</td>';
    echo '<td>' . htmlspecialchars($row['idDoctor']) . '</td>';
    echo '<td>' . htmlspecialchars($row['observaciones']) . '</td>';
    echo '<td>' . htmlspecialchars($row['medicamentos']) . '</td>';
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
