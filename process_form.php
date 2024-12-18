<?php
// Incluir el archivo de conexión a la base de datos
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Usar el operador de fusión de null para evitar advertencias de claves indefinidas
    $operador = $conn->real_escape_string($_POST['operador'] ?? '');
    $planta = $conn->real_escape_string($_POST['planta'] ?? '');
    $unidad = $conn->real_escape_string($_POST['unidad'] ?? '');
    $fecha = $conn->real_escape_string($_POST['fecha'] ?? '');

    // Interior
    $tablero = $conn->real_escape_string($_POST['tablero'] ?? '');
    $asientos = $conn->real_escape_string($_POST['asientos'] ?? '');
    $tapiceria = $conn->real_escape_string($_POST['tapiceria'] ?? '');
    $cinturones = $conn->real_escape_string($_POST['cinturones'] ?? '');
    $pasamanos = $conn->real_escape_string($_POST['pasamanos'] ?? '');
    $retrovisor_pasillo = $conn->real_escape_string($_POST['retrovisor_pasillo'] ?? '');
    $botiquin = $conn->real_escape_string($_POST['Botiquin'] ?? '');
    $extintor = $conn->real_escape_string($_POST['Extintor'] ?? '');
    $alarma_reversa = $conn->real_escape_string($_POST['Alarma_Reversa'] ?? '');
    $luces_interiores = $conn->real_escape_string($_POST['Luces_Interiores'] ?? '');
    $luces_escalera = $conn->real_escape_string($_POST['Luces_Escalera'] ?? '');
    $puertas = $conn->real_escape_string($_POST['Puertas'] ?? '');
    $salida_emergencia = $conn->real_escape_string($_POST['Salida_Emergencia'] ?? '');
    $asiento_operador = $conn->real_escape_string($_POST['Asiento_Operador'] ?? '');
    $cables_expuestos = $conn->real_escape_string($_POST['Cables_Expuestos'] ?? '');
    $poliza_seguro = $conn->real_escape_string($_POST['Poliza_seguro'] ?? '');
    $tarjeta_circulacion = $conn->real_escape_string($_POST['Tarjeta_Circulacion'] ?? '');
    $retrovisor = $conn->real_escape_string($_POST['Retrovisor'] ?? '');

    // Exterior
    $luces_funcionando = $conn->real_escape_string($_POST['Luces_Funcionando'] ?? '');
    $luces_navegacion = $conn->real_escape_string($_POST['Luces_Navegacion'] ?? '');
    $intermitentes_funcionando = $conn->real_escape_string($_POST['Intermitentes_Funcionando'] ?? '');
    $llantas_buen_estado = $conn->real_escape_string($_POST['Llantas_buen_Estado'] ?? '');
    $presion_llantas = $conn->real_escape_string($_POST['Presion_Llantas'] ?? '');
    $retrovisores_laterales = $conn->real_escape_string($_POST['Retrovisores_Laterales'] ?? '');
    $carroceria = $conn->real_escape_string($_POST['Carroceria'] ?? '');
    $cristales = $conn->real_escape_string($_POST['Cristales'] ?? '');
    $calcamonias = $conn->real_escape_string($_POST['calcamonias'] ?? '');
    $placas = $conn->real_escape_string($_POST['Placas'] ?? '');
    $fuga = $conn->real_escape_string($_POST['Fuga'] ?? '');
    $micas = $conn->real_escape_string($_POST['Micas'] ?? '');
    $bateria_1 = $conn->real_escape_string($_POST['Bateria_1'] ?? '');
    $bateria_2 = $conn->real_escape_string($_POST['Bateria_2'] ?? '');

    // Limpieza
    $interior_limpieza = $conn->real_escape_string($_POST['interior_limpieza'] ?? '');
    $lateral_izquierdo = $conn->real_escape_string($_POST['Lateral_Izquierdo'] ?? '');
    $lateral_derecho = $conn->real_escape_string($_POST['Lateral_Derecho'] ?? '');
    $frontal = $conn->real_escape_string($_POST['Frontal'] ?? '');
    $tracero = $conn->real_escape_string($_POST['Tracero'] ?? '');
    $tapetes = $conn->real_escape_string($_POST['Tapetes'] ?? '');
    
    // Operador
    $uniforme = $conn->real_escape_string($_POST['Uniforme'] ?? '');
    $alcoholimetia = $conn->real_escape_string($_POST['Alcoholimetia'] ?? '');

    // Niveles
    $aceite = $conn->real_escape_string($_POST['aceite'] ?? '');
    $anticongelante = $conn->real_escape_string($_POST['anticongelante'] ?? '');
    $liquidofrenos = $conn->real_escape_string($_POST['liquidofrenos'] ?? '');
    $direccionhidraulica = $conn->real_escape_string($_POST['direccionhidraulica'] ?? '');




    // Consulta SQL de inserción


    $sql = "INSERT INTO inspeccion_unidad (
    operador, planta, unidad, fecha, tablero, asientos, tapiceria, cinturones, pasamanos,  
    retrovisor_pasillo, botiquin, extintor, alarma_reversa, luces_interiores, luces_escalera,  
    puertas, salida_emergencia, asiento_operador, cables_expuestos, poliza_seguro, tarjeta_circulacion,  
    retrovisor, luces_funcionando, luces_navegacion, intermitentes_funcionando, 
    llantas_buen_estado, presion_llantas, retrovisores_laterales, carroceria, cristales, calcamonias,  
    placas, fuga, micas, bateria_1, bateria_2, interior_limpieza, lateral_izquierdo, lateral_derecho, frontal, tracero, uniforme, alcoholimetia,
    aceite, anticongelante, liquidofrenos, direccionhidraulica
) VALUES (
    '$operador', '$planta', '$unidad', '$fecha', '$tablero', '$asientos', '$tapiceria', '$cinturones', '$pasamanos', 
    '$retrovisor_pasillo', '$botiquin', '$extintor', '$alarma_reversa', '$luces_interiores', '$luces_escalera', 
    '$puertas', '$salida_emergencia', '$asiento_operador', '$cables_expuestos', '$poliza_seguro', '$tarjeta_circulacion', 
    '$retrovisor', '$luces_funcionando', '$luces_navegacion', '$intermitentes_funcionando', 
    '$llantas_buen_estado', '$presion_llantas', '$retrovisores_laterales', '$carroceria', '$cristales', '$calcamonias', 
    '$placas', '$fuga', '$micas', '$bateria_1', '$bateria_2', '$interior_limpieza', '$lateral_izquierdo', '$lateral_derecho', '$frontal', '$tracero', '$uniforme', '$alcoholimetia',
    '$aceite', '$anticongelante', '$liquidofrenos', '$direccionhidraulica'
)";



    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        // Redirigir a otra página después de la inserción exitosa
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
