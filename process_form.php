<?php
// Incluir el archivo de conexión a la base de datos
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Usar el operador de fusión de null para evitar advertencias de claves indefinidas
    $responsable = $conn->real_escape_string($_POST['responsable'] ?? '');
    $planta = $conn->real_escape_string($_POST['planta'] ?? '');
    $turno = $conn->real_escape_string($_POST['turno'] ?? '');
    $unidad = $conn->real_escape_string($_POST['unidad'] ?? '');

    // Interior
    $tablero = $conn->real_escape_string($_POST['tablero'] ?? '');
    $tablero_comentarios = $conn->real_escape_string($_POST['tablero_comentarios'] ?? '');
    $asientos = $conn->real_escape_string($_POST['asientos'] ?? '');
    $asientos_comentarios = $conn->real_escape_string($_POST['asientos_comentarios'] ?? '');
    $tapiceria = $conn->real_escape_string($_POST['tapiceria'] ?? '');
    $tapiceria_comentarios = $conn->real_escape_string($_POST['tapiceria_comentarios'] ?? '');
    $cinturones = $conn->real_escape_string($_POST['cinturones'] ?? '');
    $cinturones_comentarios = $conn->real_escape_string($_POST['cinturones_comentarios'] ?? '');
    $pasamanos = $conn->real_escape_string($_POST['pasamanos'] ?? '');
    $pasamanos_comentarios = $conn->real_escape_string($_POST['pasamanos_comentarios'] ?? '');
    $retrovisor_pasillo = $conn->real_escape_string($_POST['retrovisor_pasillo'] ?? '');
    $retrovisor_pasillo_comentarios = $conn->real_escape_string($_POST['retrovisor_pasillo_comentarios'] ?? '');
    $botiquin = $conn->real_escape_string($_POST['Botiquin'] ?? '');
    $botiquin_comentarios = $conn->real_escape_string($_POST['Botiquin_comentarios'] ?? '');
    $extintor = $conn->real_escape_string($_POST['Extintor'] ?? '');
    $extintor_comentarios = $conn->real_escape_string($_POST['Extintor_comentarios'] ?? '');
    $alarma_reversa = $conn->real_escape_string($_POST['Alarma_Reversa'] ?? '');
    $alarma_reversa_comentarios = $conn->real_escape_string($_POST['Alarma_Reversa_comentarios'] ?? '');
    $luces_interiores = $conn->real_escape_string($_POST['Luces_Interiores'] ?? '');
    $luces_interiores_comentarios = $conn->real_escape_string($_POST['Luces_Interiores_comentarios'] ?? '');
    $luces_escalera = $conn->real_escape_string($_POST['Luces_Escalera'] ?? '');
    $luces_escalera_comentarios = $conn->real_escape_string($_POST['Luces_Escalera_comentarios'] ?? '');
    $puertas = $conn->real_escape_string($_POST['Puertas'] ?? '');
    $puertas_comentarios = $conn->real_escape_string($_POST['Puertas_comentarios'] ?? '');
    $salida_emergencia = $conn->real_escape_string($_POST['Salida_Emergencia'] ?? '');
    $salida_emergencia_comentarios = $conn->real_escape_string($_POST['Salida_Emergencia_comentarios'] ?? '');
    $asiento_operador = $conn->real_escape_string($_POST['Asiento_Operador'] ?? '');
    $asiento_operador_comentarios = $conn->real_escape_string($_POST['Asiento_Operador_comentarios'] ?? '');
    $cables_expuestos = $conn->real_escape_string($_POST['Cables_Expuestos'] ?? '');
    $cables_expuestos_comentarios = $conn->real_escape_string($_POST['Cables_Expuestos_comentarios'] ?? '');
    $poliza_seguro = $conn->real_escape_string($_POST['Poliza_seguro'] ?? '');
    $poliza_seguro_comentarios = $conn->real_escape_string($_POST['Poliza_seguro_comentarios'] ?? '');
    $tarjeta_circulacion = $conn->real_escape_string($_POST['Tarjeta_Circulacion'] ?? '');
    $tarjeta_circulacion_comentarios = $conn->real_escape_string($_POST['Tarjeta_Circulacion_comentarios'] ?? '');
    $retrovisor = $conn->real_escape_string($_POST['Retrovisor'] ?? '');
    $retrovisor_comentarios = $conn->real_escape_string($_POST['Retrovisor_comentarios'] ?? '');

    // Exterior
    $luces_funcionando = $conn->real_escape_string($_POST['Luces_Funcionando'] ?? '');
    $luces_funcionando_comentarios = $conn->real_escape_string($_POST['Luces_Funcionando_comentarios'] ?? '');
    $luces_navegacion = $conn->real_escape_string($_POST['Luces_Navegacion'] ?? '');
    $luces_navegacion_comentarios = $conn->real_escape_string($_POST['Luces_Navegacion_comentarios'] ?? '');
    $intermitentes_funcionando = $conn->real_escape_string($_POST['Intermitentes_Funcionando'] ?? '');
    $intermitentes_funcionando_comentarios = $conn->real_escape_string($_POST['Intermitentes_Funcionando_comentarios'] ?? '');
    $llantas_buen_estado = $conn->real_escape_string($_POST['Llantas_buen_Estado'] ?? '');
    $llantas_buen_estado_comentarios = $conn->real_escape_string($_POST['Llantas_buen_Estado_comentarios'] ?? '');
    $presion_llantas = $conn->real_escape_string($_POST['Presion_Llantas'] ?? '');
    $presion_llantas_comentarios = $conn->real_escape_string($_POST['Presion_Llantas_comentarios'] ?? '');
    $retrovisores_laterales = $conn->real_escape_string($_POST['Retrovisores_Laterales'] ?? '');
    $retrovisores_laterales_comentarios = $conn->real_escape_string($_POST['Retrovisores_Laterales_comentarios'] ?? '');
    $carroceria = $conn->real_escape_string($_POST['Carroceria'] ?? '');
    $carroceria_comentarios = $conn->real_escape_string($_POST['Carroceria_comentarios'] ?? '');
    $cristales = $conn->real_escape_string($_POST['Cristales'] ?? '');
    $cristales_comentarios = $conn->real_escape_string($_POST['Cristales_comentarios'] ?? '');
    $calcamonias = $conn->real_escape_string($_POST['Calcamonias'] ?? '');
    $calcamonias_comentarios = $conn->real_escape_string($_POST['Calcamonias_comentarios'] ?? '');
    $placas = $conn->real_escape_string($_POST['Placas'] ?? '');
    $placas_comentarios = $conn->real_escape_string($_POST['Placas_comentarios'] ?? '');
    $fuga = $conn->real_escape_string($_POST['Fuga'] ?? '');
    $fuga_comentarios = $conn->real_escape_string($_POST['Fuga_comentarios'] ?? '');
    $micas = $conn->real_escape_string($_POST['Micas'] ?? '');
    $micas_comentarios = $conn->real_escape_string($_POST['Micas_comentarios'] ?? '');
    $bateria_1 = $conn->real_escape_string($_POST['Bateria_1'] ?? '');
    $bateria_1_comentarios = $conn->real_escape_string($_POST['Bateria_1_comentarios'] ?? '');
    $bateria_2 = $conn->real_escape_string($_POST['Bateria_2'] ?? '');
    $bateria_2_comentarios = $conn->real_escape_string($_POST['Bateria_2_comentarios'] ?? '');

    // Limpieza
    $interior_limpieza = $conn->real_escape_string($_POST['Interior_Limpieza'] ?? '');
    $interior_limpieza_comentarios = $conn->real_escape_string($_POST['Interior_Limpieza_comentarios'] ?? '');
    $lateral_izquierdo = $conn->real_escape_string($_POST['Lateral_Izquierdo'] ?? '');
    $lateral_izquierdo_comentarios = $conn->real_escape_string($_POST['Lateral_Izquierdo_comentarios'] ?? '');
    $lateral_derecho = $conn->real_escape_string($_POST['Lateral_Derecho'] ?? '');
    $lateral_derecho_comentarios = $conn->real_escape_string($_POST['Lateral_Derecho_comentarios'] ?? '');
    $frontal = $conn->real_escape_string($_POST['Frontal'] ?? '');
    $frontal_comentarios = $conn->real_escape_string($_POST['Frontal_comentarios'] ?? '');
    $tracero = $conn->real_escape_string($_POST['Tracero'] ?? '');
    $tracero_comentarios = $conn->real_escape_string($_POST['Tracero_comentarios'] ?? '');
    $tapetes = $conn->real_escape_string($_POST['Tapetes'] ?? '');
    $tapetes_comentarios = $conn->real_escape_string($_POST['Tapetes_comentarios'] ?? '');
    
    // Operador
    $uniforme = $conn->real_escape_string($_POST['Uniforme'] ?? '');
    $uniforme_comentarios = $conn->real_escape_string($_POST['Uniforme_comentarios'] ?? '');
    $alcoholimetia = $conn->real_escape_string($_POST['Alcoholimetia'] ?? '');
    $alcoholimetia_comentarios = $conn->real_escape_string($_POST['Alcoholimetia_comentarios'] ?? '');




    // Consulta SQL de inserción


    $sql = "INSERT INTO inspeccion_unidad (
    responsable, planta, turno, unidad, tablero, tablero_comentarios, 
    asientos, asientos_comentarios, tapiceria, tapiceria_comentarios, 
    cinturones, cinturones_comentarios, pasamanos, pasamanos_comentarios, 
    retrovisor_pasillo, retrovisor_pasillo_comentarios, botiquin, botiquin_comentarios, 
    extintor, extintor_comentarios, alarma_reversa, alarma_reversa_comentarios, 
    luces_interiores, luces_interiores_comentarios, luces_escalera, luces_escalera_comentarios, 
    puertas, puertas_comentarios, salida_emergencia, salida_emergencia_comentarios, 
    asiento_operador, asiento_operador_comentarios, cables_expuestos, cables_expuestos_comentarios, 
    poliza_seguro, poliza_seguro_comentarios, tarjeta_circulacion, tarjeta_circulacion_comentarios, 
    retrovisor, retrovisor_comentarios, luces_funcionando, luces_funcionando_comentarios, 
    luces_navegacion, luces_navegacion_comentarios, intermitentes_funcionando, intermitentes_funcionando_comentarios, 
    llantas_buen_estado, llantas_buen_estado_comentarios, presion_llantas, presion_llantas_comentarios, 
    retrovisores_laterales, retrovisores_laterales_comentarios, carroceria, carroceria_comentarios, 
    cristales, cristales_comentarios, calcamonias, calcamonias_comentarios, 
    placas, placas_comentarios, fuga, fuga_comentarios, 
    micas, micas_comentarios, bateria_1, bateria_1_comentarios, 
    bateria_2, bateria_2_comentarios, interior_limpieza, interior_limpieza_comentarios, 
    lateral_izquierdo, lateral_izquierdo_comentarios, lateral_derecho, lateral_derecho_comentarios, 
    frontal, frontal_comentarios, tracero, tracero_comentarios, 
    uniforme, uniforme_comentarios, alcoholimetia, alcoholimetia_comentarios
) VALUES (
    '$responsable', '$planta', '$turno', '$unidad', '$tablero', '$tablero_comentarios', 
    '$asientos', '$asientos_comentarios', '$tapiceria', '$tapiceria_comentarios', 
    '$cinturones', '$cinturones_comentarios', '$pasamanos', '$pasamanos_comentarios', 
    '$retrovisor_pasillo', '$retrovisor_pasillo_comentarios', '$botiquin', '$botiquin_comentarios', 
    '$extintor', '$extintor_comentarios', '$alarma_reversa', '$alarma_reversa_comentarios', 
    '$luces_interiores', '$luces_interiores_comentarios', '$luces_escalera', '$luces_escalera_comentarios', 
    '$puertas', '$puertas_comentarios', '$salida_emergencia', '$salida_emergencia_comentarios', 
    '$asiento_operador', '$asiento_operador_comentarios', '$cables_expuestos', '$cables_expuestos_comentarios', 
    '$poliza_seguro', '$poliza_seguro_comentarios', '$tarjeta_circulacion', '$tarjeta_circulacion_comentarios', 
    '$retrovisor', '$retrovisor_comentarios', '$luces_funcionando', '$luces_funcionando_comentarios', 
    '$luces_navegacion', '$luces_navegacion_comentarios', '$intermitentes_funcionando', '$intermitentes_funcionando_comentarios', 
    '$llantas_buen_estado', '$llantas_buen_estado_comentarios', '$presion_llantas', '$presion_llantas_comentarios', 
    '$retrovisores_laterales', '$retrovisores_laterales_comentarios', '$carroceria', '$carroceria_comentarios', 
    '$cristales', '$cristales_comentarios', '$calcamonias', '$calcamonias_comentarios', 
    '$placas', '$placas_comentarios', '$fuga', '$fuga_comentarios', 
    '$micas', '$micas_comentarios', '$bateria_1', '$bateria_1_comentarios', 
    '$bateria_2', '$bateria_2_comentarios', '$interior_limpieza', '$interior_limpieza_comentarios', 
    '$lateral_izquierdo', '$lateral_izquierdo_comentarios', '$lateral_derecho', '$lateral_derecho_comentarios', 
    '$frontal', '$frontal_comentarios', '$tracero', '$tracero_comentarios', 
    '$uniforme', '$uniforme_comentarios', '$alcoholimetia', '$alcoholimetia_comentarios'
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
