<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tabla de Datos</title>
    <style>
        /* Estilo personalizado para la tabla */
        .table-light-blue {
            background-color: #e6f7ff; /* Azul claro */
        }

        /* Cambio de color al pasar el cursor sobre una celda */
        .table-light-blue tbody tr:hover {
            background-color: #b3d9ff; /* Azul más oscuro */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table table-light-blue table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Especialidad</th>
                        <th>Turno</th>
                        <th>Correo electrónico</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de fila -->
                    <tr>
                        <td>Juan</td>
                        <td>Pérez</td>
                        <td>Médico</td>
                        <td>Matutino</td>
                        <td>juan@example.com</td>
                        <td>555-123-4567</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                            <button class="btn btn-primary btn-sm">Actualizar</button>
                        </td>
                    </tr>
                    <!-- Agrega más filas según tus datos -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
