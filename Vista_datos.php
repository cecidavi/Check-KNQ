<?php
// Incluir el archivo de conexión a la base de datos
include('database.php'); // Asegúrate de que la ruta sea correcta

// Consulta para obtener los datos
$sql = "SELECT * FROM inspeccion_unidad"; // Obtiene todos los registros de la tabla inspeccion_unidad
$result = $conn->query($sql);

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    $registros = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $registros = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Inspecciones de Unidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css"> <!-- Si tienes un archivo CSS adicional -->
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Inspección de Unidades</h1>

        <!-- Tabla para mostrar los resultados -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Operador</th>
                    <th>Ruta</th>
                    <th>Unidad</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($registros): ?>
                    <?php foreach ($registros as $registro): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($registro['operador']); ?></td>
                            <td><?php echo htmlspecialchars($registro['planta']); ?></td>
                            <td><?php echo htmlspecialchars($registro['unidad']); ?></td>
                            <td><?php echo htmlspecialchars($registro['fecha']); ?></td>
                            <td>
                            <a href="ver-registro.php?id=<?php echo $registro['id']; ?>" class="btn btn-warning btn-sm">Ver</a>
                            <a href="eliminar.php?id=<?php echo $registro['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No hay registros en la base de datos.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
