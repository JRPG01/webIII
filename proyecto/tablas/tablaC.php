<?php

include "../connection/connection.php";

// Consulta SQL para obtener los datos
$sql = "SELECT c.idConsulta, c.fechaCita, 
               CONCAT(cl.nombreC, ' ', cl.apellidosC) as nombreCliente, 
               CONCAT(d.nombreD, ' ', d.apellidosD) as nombreDoctor, 
               c.observaciones, c.medicamentos,
               c.idCliente, c.idDoctor
        FROM consultas c
        INNER JOIN clientes cl ON c.idCliente = cl.idCliente
        INNER JOIN doctor d ON c.idDoctor = d.idDoctor";

$query = mysqli_query($conQuery, $sql);

if ($query) {
    if ($query->num_rows > 0) {
        // Mostrar los datos en una tabla HTML
        echo '<table class="table table-light-blue table-bordered">';
        echo '<thead class="thead-dark">
                <tr>
                  <th>Cita</th>
                  <th>Nombre del paciente</th>
                  <th>Nombre del doctor</th>
                  <th>Observaciones</th>
                  <th>Medicamentos</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>';

        // Mostrar datos de cada fila
        while($row = $query->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($row['fechaCita']) . '</td>';
            echo '<td>' . htmlspecialchars($row['nombreCliente']) . '</td>';
            echo '<td>' . htmlspecialchars($row['nombreDoctor']) . '</td>';
            echo '<td>' . htmlspecialchars($row['observaciones']) . '</td>';
            echo '<td>' . htmlspecialchars($row['medicamentos']) . '</td>';
            echo '<td>
                    <form action="frmCitas.php" method="POST" style="display:inline;">
                        <input type="hidden" name="idConsulta" value="' . htmlspecialchars($row['idConsulta']) . '">
                        <input type="hidden" name="fechaCita" value="' . htmlspecialchars($row['fechaCita']) . '">
                        <input type="hidden" name="idCliente" value="' . htmlspecialchars($row['idCliente']) . '">
                        <input type="hidden" name="idDoctor" value="' . htmlspecialchars($row['idDoctor']) . '">
                        <input type="hidden" name="observaciones" value="' . htmlspecialchars($row['observaciones']) . '">
                        <input type="hidden" name="medicamentos" value="' . htmlspecialchars($row['medicamentos']) . '">
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
} else {
    echo "Error en la consulta: " . mysqli_error($conQuery);
}

// Cerrar conexión
$conQuery->close();
?>