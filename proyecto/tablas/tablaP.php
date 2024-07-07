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
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['nombreC']) . '</td>';
    echo '<td>' . htmlspecialchars($row['apellidosC']) . '</td>';
    echo '<td>' . htmlspecialchars($row['sexoC']) . '</td>';
    echo '<td>' . htmlspecialchars($row['edadC']) . '</td>';
    echo '<td>' . htmlspecialchars($row['telefono']) . '</td>';
    echo '<td>
    <form action="frmPaciente.php" method="POST" style="display:inline;">
        <input type="hidden" name="userC" value="' . htmlspecialchars($row['userC']) . '">
        <input type="hidden" name="passC" value="' . htmlspecialchars($row['passC']) . '">
        <input type="hidden" name="nombreC" value="' . htmlspecialchars($row['nombreC']) . '">
        <input type="hidden" name="apellidosC" value="' . htmlspecialchars($row['apellidosC']) . '">
        <input type="hidden" name="sexoC" value="' . htmlspecialchars($row['sexoC']) . '">
        <input type="hidden" name="edadC" value="' . htmlspecialchars($row['edadC']) . '">
        <input type="hidden" name="telefono" value="' . htmlspecialchars($row['telefono']) . '">
        <button type="submit" class="btn btn-primary btn-sm">Actualizar</button>
    </form>
    <button class="btn btn-danger btn-sm">Eliminar</button>
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
