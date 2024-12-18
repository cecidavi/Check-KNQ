<?php
// Incluir el archivo de conexión a la base de datos
include('database.php');

// Verificar si se pasó un ID válido a través de la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obtener los detalles del registro con el ID especificado
    $sql = "SELECT * FROM inspeccion_unidad WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se obtuvo el registro
    if ($result->num_rows > 0) {
        $registro = $result->fetch_assoc();
    } else {
        echo "Registro no encontrado.";
        exit;
    }
} else {
    echo "ID no válido.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Detalles de la Inspección de Unidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css"> <!-- Si tienes un archivo CSS adicional -->
</head>
<body>
<div class="container mt-4">
    <h1 class="text-center mb-4">Detalles de la Inspección de Unidad</h1>

    <!-- Mostrar los detalles del registro -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Detalles de la Unidad: <?php echo htmlspecialchars($registro['unidad']); ?></h5>
        </div>

        <div class="card-body">
            <!-- Información general (Unidad, Fecha, Operador, Ruta) -->
            <ul class="list-group mb-4">
                <li class="list-group-item"><strong>Operador:</strong> <?php echo htmlspecialchars($registro['operador']); ?></li>
                <li class="list-group-item"><strong>Ruta:</strong> <?php echo htmlspecialchars($registro['planta']); ?></li>
                <li class="list-group-item"><strong>Unidad:</strong> <?php echo htmlspecialchars($registro['unidad']); ?></li>
                <li class="list-group-item"><strong>Fecha:</strong> <?php echo htmlspecialchars($registro['fecha']); ?></li>
            </ul>

            <!-- Tabla con los detalles de inspección -->
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Inspección</th>
                        <th>Respuesta</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>Tablero</td>
                        <td><?php echo htmlspecialchars($registro['tablero']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_tablero'])): ?>
                                <img src="CHECK/uploads/<?php echo htmlspecialchars($registro['foto_tablero']); ?>" alt="foto_tablero" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>


                    <tr>
                        <td>Asientos</td>
                        <td><?php echo htmlspecialchars($registro['asientos']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_asientos'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_asientos']); ?>" alt="foto_Asientos" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>



                    <tr>
                        <td>Tapicería</td>
                        <td><?php echo htmlspecialchars($registro['tapiceria']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_tapiceria'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_tapiceria']); ?>" alt="Foto Tapicería" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>



                    <tr>
                        <td>Cinturones</td>
                        <td><?php echo htmlspecialchars($registro['cinturones']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_cinturones'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_cinturones']); ?>" alt="Foto Cinturones" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>



                    <tr>
                        <td>Botiquín</td>
                        <td><?php echo htmlspecialchars($registro['botiquin']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_botiquin'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_botiquin']); ?>" alt="Foto Botiquín" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>


                    <tr>
                        <td>Extintor</td>
                        <td><?php echo htmlspecialchars($registro['extintor']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_extintor'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_extintor']); ?>" alt="Foto Extintor" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Alarma de Reversa</td>
                        <td><?php echo htmlspecialchars($registro['alarma_reversa']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_alarma_reversa'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_alarma_reversa']); ?>" alt="Foto Alarma de Reversa" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Luces Interiores</td>
                        <td><?php echo htmlspecialchars($registro['luces_interiores']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_luces_interiores'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_luces_interiores']); ?>" alt="Foto Luces Interiores" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>

                    </tr>       

                    <tr>
                        <td>Luces de Escalera</td>
                        <td><?php echo htmlspecialchars($registro['luces_escalera']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_luces_escalera'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_luces_escalera']); ?>" alt="Foto Luces de Escalera" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Puertas</td>
                        <td><?php echo htmlspecialchars($registro['puertas']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_puertas'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_puertas']); ?>" alt="Foto Puertas" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>

                    </tr>

                    <tr>
                        <td>Salida de Emergencia</td>
                        <td><?php echo htmlspecialchars($registro['salida_emergencia']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_salida_emergencia'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_salida_emergencia']); ?>" alt="Foto Salida de Emergencia" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Asiento del Operador</td>
                        <td><?php echo htmlspecialchars($registro['asiento_operador']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_asiento_operador'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_asiento_operador']); ?>" alt="Foto Asiento del Operador" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Cables Expuestos</td>
                        <td><?php echo htmlspecialchars($registro['cables_expuestos']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_cables_expuestos'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_cables_expuestos']); ?>" alt="Foto Cables Expuestos" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Póliza de Seguro</td>
                        <td><?php echo htmlspecialchars($registro['poliza_seguro']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_poliza_seguro'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_poliza_seguro']); ?>" alt="Foto Póliza de Seguro" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Tarjeta de Circulación</td>
                        <td><?php echo htmlspecialchars($registro['tarjeta_circulacion']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_tarjeta_circulacion'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_tarjeta_circulacion']); ?>" alt="Foto Tarjeta de Circulación" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>

                    </tr>

                    <tr>
                        <td>Retrovisor</td>
                        <td><?php echo htmlspecialchars($registro['retrovisor']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_retrovisor'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_retrovisor']); ?>" alt="Foto Retrovisor" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Luces Funcionando</td>
                        <td><?php echo htmlspecialchars($registro['luces_funcionando']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_luces_funcionando'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_luces_funcionando']); ?>" alt="Foto Luces Funcionando" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Luces de Navegación</td>
                        <td><?php echo htmlspecialchars($registro['luces_navegacion']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_luces_navegacion'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_luces_navegacion']); ?>" alt="Foto Luces de Navegación" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Intermitentes Funcionando</td>
                        <td><?php echo htmlspecialchars($registro['intermitentes_funcionando']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_intermitentes_funcionando'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_intermitentes_funcionando']); ?>" alt="Foto Intermitentes Funcionando" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Llantas en Buen estado </td>
                        <td><?php echo htmlspecialchars($registro['llantas_buen_estado']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_llantas_buen_estado'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_llantas_buen_estado']); ?>" alt="Foto Llantas en
                                Buen estado" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Presión de Llantas</td>
                        <td><?php echo htmlspecialchars($registro['presion_llantas']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_presion_llantas'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_presion_llantas']); ?>" alt="Foto Presión de Llantas" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Retrovisores Laterales</td>
                        <td><?php echo htmlspecialchars($registro['retrovisores_laterales']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_retrovisores_laterales'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_retrovisores_laterales']); ?>" alt="Foto Retrovisores Laterales" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Carrocería</td>
                        <td><?php echo htmlspecialchars($registro['carroceria']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_carroceria'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_carroceria']); ?>" alt="Foto Carrocería" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Cristales</td>
                        <td><?php echo htmlspecialchars($registro['cristales']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_cristales'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_cristales']); ?>" alt="Foto Cristales" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Calcamonías</td>
                        <td><?php echo htmlspecialchars($registro['calcamonias']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_calcamonias'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_calcamonias']); ?>" alt="Foto Calcamonías" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Placas</td>
                        <td><?php echo htmlspecialchars($registro['placas']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_placas'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_placas']); ?>" alt="Foto Placas" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Fuga</td>
                        <td><?php echo htmlspecialchars($registro['fuga']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_fuga'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_fuga']); ?>" alt="Foto Fuga" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Micas</td>
                        <td><?php echo htmlspecialchars($registro['micas']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_micas'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_micas']); ?>" alt="Foto Micas" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Batería 1</td>
                        <td><?php echo htmlspecialchars($registro['bateria_1']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_bateria_1'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_bateria_1']); ?>" alt="Foto Batería 1" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Batería 2</td>
                        <td><?php echo htmlspecialchars($registro['bateria_2']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_bateria_2'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_bateria_2']); ?>" alt="Foto Batería 2" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Interior Limpieza</td>
                        <td><?php echo htmlspecialchars($registro['interior_limpieza']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_interior_limpieza'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_interior_limpieza']); ?>" alt="Foto Interior Limpieza" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Lateral Izquierdo</td>
                        <td><?php echo htmlspecialchars($registro['lateral_izquierdo']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_lateral_izquierdo'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_lateral_izquierdo']); ?>" alt="Foto Lateral Izquierdo" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>

                    </tr>

                    <tr>
                        <td>Lateral Derecho</td>
                        <td><?php echo htmlspecialchars($registro['lateral_derecho']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_lateral_derecho'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_lateral_derecho']); ?>" alt="Foto Lateral Derecho" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Frontal</td>
                        <td><?php echo htmlspecialchars($registro['frontal']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_frontal'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_frontal']); ?>" alt="Foto Frontal" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Trasero</td>
                        <td><?php echo htmlspecialchars($registro['tracero']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_tracero'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_tracero']); ?>" alt="Foto Trasero" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Uniforme</td>
                        <td><?php echo htmlspecialchars($registro['uniforme']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_uniforme'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_uniforme']); ?>" alt="Foto Uniforme" class="img-fluid"
                                width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Alcoholimetría</td>
                        <td><?php echo htmlspecialchars($registro['alcoholimetia']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_alcoholimetia'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_alcoholimetia']); ?>" alt="Foto Alcoholimetría" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Aceite</td>
                        <td><?php echo htmlspecialchars($registro['aceite']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_aceite'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_aceite']); ?>" alt="Foto Aceite" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Anticongelante</td>
                        <td><?php echo htmlspecialchars($registro['anticongelante']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_anticongelante'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_anticongelante']); ?>" alt="Foto Anticongelante" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Líquido de Frenos</td>
                        <td><?php echo htmlspecialchars($registro['liquidofrenos']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_liquidofrenos'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_liquidofrenos']); ?>" alt="Foto Líquido de Frenos" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Dirección Hidráulica</td>
                        <td><?php echo htmlspecialchars($registro['direccionhidraulica']); ?></td>
                        <td>
                            <?php if (!empty($registro['foto_direccionhidraulica'])): ?>
                                <img src="ruta/a/las/fotos/<?php echo htmlspecialchars($registro['foto_direccionhidraulica']); ?>" alt="Foto Dirección Hidráulica" class="img-fluid" width="100">
                            <?php else: ?>
                                No disponible
                            <?php endif; ?>
                        </td>
                    </tr>

                    

                </tbody>
            </table>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

 
