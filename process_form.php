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
    $botiquin = $conn->real_escape_string($_POST['botiquin'] ?? '');
    $extintor = $conn->real_escape_string($_POST['extintor'] ?? '');
    $alarma_reversa = $conn->real_escape_string($_POST['alarma_reversa'] ?? '');
    $luces_interiores = $conn->real_escape_string($_POST['luces_interiores'] ?? '');
    $luces_escalera = $conn->real_escape_string($_POST['luces_escalera'] ?? '');
    $puertas = $conn->real_escape_string($_POST['puertas'] ?? '');
    $salida_emergencia = $conn->real_escape_string($_POST['salida_emergencia'] ?? '');
    $asiento_operador = $conn->real_escape_string($_POST['asiento_operador'] ?? '');
    $cables_expuestos = $conn->real_escape_string($_POST['cables_expuestos'] ?? '');
    $poliza_seguro = $conn->real_escape_string($_POST['poliza_seguro'] ?? '');
    $tarjeta_circulacion = $conn->real_escape_string($_POST['tarjeta_circulacion'] ?? '');
    $retrovisor = $conn->real_escape_string($_POST['retrovisor'] ?? '');

    // Exterior
    $luces_funcionando = $conn->real_escape_string($_POST['luces_funcionando'] ?? '');
    $luces_navegacion = $conn->real_escape_string($_POST['luces_navegacion'] ?? '');
    $intermitentes_funcionando = $conn->real_escape_string($_POST['intermitentes_funcionando'] ?? '');
    $llantas_buen_estado = $conn->real_escape_string($_POST['llantas_buen_estado'] ?? '');
    $presion_llantas = $conn->real_escape_string($_POST['presion_llantas'] ?? '');
    $retrovisores_laterales = $conn->real_escape_string($_POST['retrovisores_laterales'] ?? '');
    $carroceria = $conn->real_escape_string($_POST['carroceria'] ?? '');
    $cristales = $conn->real_escape_string($_POST['cristales'] ?? '');
    $calcamonias = $conn->real_escape_string($_POST['calcamonias'] ?? '');
    $placas = $conn->real_escape_string($_POST['placas'] ?? '');
    $fuga = $conn->real_escape_string($_POST['fuga'] ?? '');
    $micas = $conn->real_escape_string($_POST['micas'] ?? '');
    $bateria_1 = $conn->real_escape_string($_POST['bateria_1'] ?? '');
    $bateria_2 = $conn->real_escape_string($_POST['bateria_2'] ?? '');
    
    // Limpieza
    $interior_limpieza = $conn->real_escape_string($_POST['interior_limpieza'] ?? '');
    $lateral_izquierdo = $conn->real_escape_string($_POST['lateral_izquierdo'] ?? '');
    $lateral_derecho = $conn->real_escape_string($_POST['lateral_derecho'] ?? '');
    $frontal = $conn->real_escape_string($_POST['frontal'] ?? '');
    $tracero = $conn->real_escape_string($_POST['tracero'] ?? '');
    $tapetes = $conn->real_escape_string($_POST['tapetes'] ?? '');
    $foto = $conn->real_escape_string($_POST['foto'] ?? '');
    
    
    // Operador
    $uniforme = $conn->real_escape_string($_POST['uniforme'] ?? '');
    $alcoholimetria = $conn->real_escape_string($_POST['alcoholimetria'] ?? '');
    
    // Niveles
    $aceite = $conn->real_escape_string($_POST['aceite'] ?? '');
    $anticongelante = $conn->real_escape_string($_POST['anticongelante'] ?? '');
    $liquidofrenos = $conn->real_escape_string($_POST['liquidofrenos'] ?? '');
    $direccionhidraulica = $conn->real_escape_string($_POST['direccionhidraulica'] ?? '');
    
    
    $uploadDir = 'uploads/';



        // Manejo de subida de archivos
        $foto_tablero = $_FILES['foto_tablero']['name'] ? $uploadDir . basename($_FILES['foto_tablero']['name']) : null;
        $foto_asientos = $_FILES['foto_asientos']['name'] ? $uploadDir . basename($_FILES['foto_asientos']['name']) : null;
        $foto_tapiceria = $_FILES['foto_tapiceria']['name'] ? $uploadDir . basename($_FILES['foto_tapiceria']['name']) : null;
        $foto_aceite = $_FILES['foto_aceite']['name'] ? $uploadDir . basename($_FILES['foto_aceite']['name']) : null;
        $foto_anticongelante = $_FILES['foto_anticongelante']['name'] ? $uploadDir . basename($_FILES['foto_anticongelante']['name']) : null;
        $foto_liquido_frenos = $_FILES['foto_liquido_frenos']['name'] ? $uploadDir . basename($_FILES['foto_liquido_frenos']['name']) : null;
        $foto_direccion_hidraulica = $_FILES['foto_direccion_hidraulica']['name'] ? $uploadDir . basename($_FILES['foto_direccion_hidraulica']['name']) : null;
        $foto_interior = $_FILES['foto_interior']['name'] ? $uploadDir . basename($_FILES['foto_interior']['name']) : null;
        $foto_lateral_izquierdo = $_FILES['foto_lateral_izquierdo']['name'] ? $uploadDir . basename($_FILES['foto_lateral_izquierdo']['name']) : null;
        $foto_lateral_derecho = $_FILES['foto_lateral_derecho']['name'] ? $uploadDir . basename($_FILES['foto_lateral_derecho']['name']) : null;
        $foto_frontal = $_FILES['foto_frontal']['name'] ? $uploadDir . basename($_FILES['foto_frontal']['name']) : null;
        $foto_tracero = $_FILES['foto_tracero']['name'] ? $uploadDir . basename($_FILES['foto_tracero']['name']) : null;


            // Mover archivos subidos al directorio de destino
    if ($foto_tablero) {
        move_uploaded_file($_FILES['foto_tablero']['tmp_name'], $foto_tablero);
    }
    if ($foto_asientos) {
        move_uploaded_file($_FILES['foto_asientos']['tmp_name'], $foto_asientos);
    }
    if ($foto_tapiceria) {
        move_uploaded_file($_FILES['foto_tapiceria']['tmp_name'], $foto_tapiceria);
    }
    if ($foto_aceite) {
        move_uploaded_file($_FILES['foto_aceite']['tmp_name'], $foto_aceite);
    }
    
    if ($foto_anticongelante) {
        move_uploaded_file($_FILES['foto_anticongelante']['tmp_name'], $foto_anticongelante);
    }

    if ($foto_liquido_frenos) {
        move_uploaded_file($_FILES['foto_liquido_frenos']['tmp_name'], $foto_liquido_frenos);
    }

    if ($foto_direccion_hidraulica) {
        move_uploaded_file($_FILES['foto_direccion_hidraulica']['tmp_name'], $foto_direccion_hidraulica);
    }
    if ($foto_interior) {
        move_uploaded_file($_FILES['foto_interior']['tmp_name'], $foto_interior);
    }
    if ($foto_lateral_izquierdo) {
        move_uploaded_file($_FILES['foto_lateral_izquierdo']['tmp_name'], $foto_lateral_izquierdo);
    }

    if ($foto_lateral_derecho) {
        move_uploaded_file($_FILES['foto_lateral_derecho']['tmp_name'], $foto_lateral_derecho);
    }

    if ($foto_frontal) {
        move_uploaded_file($_FILES['foto_frontal']['tmp_name'], $foto_frontal);
    }

    if ($foto_tracero) {
        move_uploaded_file($_FILES['foto_tracero']['tmp_name'], $foto_tracero);
    }

    
    
    $sql = "INSERT INTO inspeccion_unidad (
    operador, planta, unidad, fecha, tablero, asientos, tapiceria, cinturones, pasamanos,  
    retrovisor_pasillo, botiquin, extintor, alarma_reversa, luces_interiores, luces_escalera,  
    puertas, salida_emergencia, asiento_operador, cables_expuestos, poliza_seguro, tarjeta_circulacion,  
    retrovisor, luces_funcionando, luces_navegacion, intermitentes_funcionando, 
    llantas_buen_estado, presion_llantas, retrovisores_laterales, carroceria, cristales, calcamonias,  
    placas, fuga, micas, bateria_1, bateria_2, interior_limpieza, lateral_izquierdo, lateral_derecho, frontal, tracero, uniforme, alcoholimetia,
    aceite, anticongelante, liquidofrenos, direccionhidraulica,foto_tablero, foto_asientos, foto_tapiceria, foto_aceite, foto_anticongelante, foto_liquido_frenos, foto_direccion_hidraulica, foto_interior, foto_lateral_izquierdo, foto_lateral_derecho, foto_frontal, foto_tracero
) VALUES (
    '$operador', '$planta', '$unidad', '$fecha', '$tablero', '$asientos', '$tapiceria', '$cinturones', '$pasamanos', 
    '$retrovisor_pasillo', '$botiquin', '$extintor', '$alarma_reversa', '$luces_interiores', '$luces_escalera', 
    '$puertas', '$salida_emergencia', '$asiento_operador', '$cables_expuestos', '$poliza_seguro', '$tarjeta_circulacion', 
    '$retrovisor', '$luces_funcionando', '$luces_navegacion', '$intermitentes_funcionando', 
    '$llantas_buen_estado', '$presion_llantas', '$retrovisores_laterales', '$carroceria', '$cristales', '$calcamonias', 
    '$placas', '$fuga', '$micas', '$bateria_1', '$bateria_2', '$interior_limpieza', '$lateral_izquierdo', '$lateral_derecho', '$frontal', '$tracero', '$uniforme', '$alcoholimetria',
    '$aceite', '$anticongelante', '$liquidofrenos', '$direccionhidraulica', '$foto_tablero', '$foto_asientos', '$foto_tapiceria', '$foto_aceite', '$foto_anticongelante', '$foto_liquido_frenos', '$foto_direccion_hidraulica', '$foto_interior', '$foto_lateral_izquierdo', '$foto_lateral_derecho', '$foto_frontal', '$foto_tracero'
)";



    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
