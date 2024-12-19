<?php
include('database.php'); 

$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : date('Y-m-d');

$sql = "SELECT * FROM inspeccion_unidad WHERE fecha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $fecha);
$stmt->execute();
$result = $stmt->get_result();

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

        <!-- Formulario de selección de fecha -->
        <form class="mb-4" method="get" action="Vista_datos.php">
            <div class="row">
                <div class="col-md-4">
                    <label for="fecha" class="form-label">Seleccionar fecha:</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo htmlspecialchars($fecha); ?>">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary mt-4">Filtrar</button>
                </div>
            </div>
        </form>

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
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No hay registros para la fecha seleccionada.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
