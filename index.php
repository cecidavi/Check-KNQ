<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Check List</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <h1>Check List KNQ</h1>
        <img src="asset/knqlogo.png" alt="Logo KNQ" class="logo">
        <form action="process_form.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="operador">Operador</label>
                <input type="text" id="operador" name="operador" required>
            </div>
            <div class="form-group">
                <label for="planta">Ruta:</label>
                <input type="text" id="planta" name="planta" required>
            </div>

            <div class="form-group">
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" class="form-control" required readonly>
</div>

            <script>
    // Obtener la fecha actual en formato YYYY-MM-DD
    const today = new Date().toISOString().split('T')[0];
    // Asignar la fecha actual al campo de fecha
    document.getElementById('fecha').value = today;
</script>

            <h2>Unidad a Evaluar</h2>
            <input type="text" name="unidad" required>
            <h2>Interior</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Si</th>
                    <th>NO</th>
                    <th>No Aplica</th>
                    <th>Foto</th>
                </tr>
                <tr>
                    <td>Tablero funcionando</td>
                    <td><input type="radio" name="tablero" value="Si" required></td>
                    <td><input type="radio" name="tablero" value="No" required></td>
                    <td><input type="radio" name="tablero" value="No Aplica" required></td>
                    <td><input type="file" name="foto_tablero" accept="image/*"></td>

                </tr>

                <tr>
                    <td>Asientos firmes</td>
                    <td><input type="radio" name="asientos" value="Si" required></td>
                    <td><input type="radio" name="asientos" value="No" required></td>
                    <td><input type="radio" name="asientos" value="No Aplica" required></td>
                    <td><input type="file" name="foto_asientos" accept="image/*"></td>
                </tr>
                <tr>
                    <td>Tapiceria</td>
                    <td><input type="radio" name="tapiceria" value="Si" required></td>
                    <td><input type="radio" name="tapiceria" value="No" required></td>
                    <td><input type="radio" name="tapiceria" value="No Aplica" required></td>
                    <td><input type="file" name="foto_tapiceria" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Cinturones Firmes</td>
                    <td><input type="radio" name="cinturones" value="Si" required></td>
                    <td><input type="radio" name="cinturones" value="No" required></td>
                    <td><input type="radio" name="cinturones" value="No Aplica" required></td>
                    <td><input type="file" name="foto_cinturones" accept="image/*"></td>


                </tr>
                <tr>
                    <td>Pasamanos Firmes</td>
                    <td><input type="radio" name="pasamanos" value="Si" required></td>
                    <td><input type="radio" name="pasamanos" value="No" required></td>
                    <td><input type="radio" name="pasamanos" value="No Aplica" required></td>
                    <td><input type="file" name="foto_pasamanos" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Retrovisor de Pasillo</td>
                    <td><input type="radio" name="retrovisor_pasillo" value="Si" required></td>
                    <td><input type="radio" name="retrovisor_pasillo" value="No" required></td>
                    <td><input type="radio" name="retrovisor_pasillo" value="No Aplica" required></td>
                    <td><input type="file" name="foto_retrovisor_pasillo" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Botiquin</td>
                    <td><input type="radio" name="Botiquin" value="Si" required></td>
                    <td><input type="radio" name="Botiquin" value="No" required></td>
                    <td><input type="radio" name="Botiquin" value="No Aplica" required></td>
                    <td><input type="file" name="foto_botiquin" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Extintor</td>
                    <td><input type="radio" name="Extintor" value="Si" required></td>
                    <td><input type="radio" name="Extintor" value="No" required></td>
                    <td><input type="radio" name="Extintor" value="No Aplica" required></td>
                    <td><input type="file" name="foto_extintor" accept="image/*"></td>


                </tr>          
                <tr>
                    <td>Alarma de Reversa</td>
                    <td><input type="radio" name="Alarma_Reversa" value="Si" required></td>
                    <td><input type="radio" name="Alarma_Reversa" value="No" required></td>
                    <td><input type="radio" name="Alarma_Reversa" value="No Aplica" required></td>
                    <td><input type="file" name="foto_alarma_reversa" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Luces Interiores</td>
                    <td><input type="radio" name="Luces_Interiores" value="Si" required></td>
                    <td><input type="radio" name="Luces_Interiores" value="No" required></td>
                    <td><input type="radio" name="Luces_Interiores" value="No Aplica" required></td>
                    <td><input type="file" name="foto_luces_interiores" accept="image/*"></td>

                </tr>      
                <tr>
                    <td>Luces en Escalera</td>
                    <td><input type="radio" name="Luces_Escalera" value="Si" required></td>
                    <td><input type="radio" name="Luces_Escalera" value="No" required></td>
                    <td><input type="radio" name="Luces_Escalera" value="No Aplica" required></td>
                    <td><input type="file" name="foto_luces_escalera" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Puertas</td>
                    <td><input type="radio" name="Puertas" value="Si" required></td>
                    <td><input type="radio" name="Puertas" value="No" required></td>
                    <td><input type="radio" name="Puertas" value="No Aplica" required></td>
                    <td><input type="file" name="foto_puertas" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Salida de Emergencia</td>
                    <td><input type="radio" name="Salida_Emergencia" value="Si" required></td>
                    <td><input type="radio" name="Salida_Emergencia" value="No" required></td>
                    <td><input type="radio" name="Salida_Emergencia" value="No Aplica" required></td>
                    <td><input type="file" name="foto_salida_emergencia" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Asiento Operador</td>
                    <td><input type="radio" name="Asiento_Operador" value="Si" required></td>
                    <td><input type="radio" name="Asiento_Operador" value="No" required></td>
                    <td><input type="radio" name="Asiento_Operador" value="No Aplica" required></td>
                    <td><input type="file" name="foto_asiento_operador" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Cables Expuestos</td>
                    <td><input type="radio" name="Cables_Expuestos" value="Si" required></td>
                    <td><input type="radio" name="Cables_Expuestos" value="No" required></td>
                    <td><input type="radio" name="Cables_Expuestos" value="No Aplica" required></td>
                    <td><input type="file" name="foto_cables_expuestos" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Poliza de seguro</td>
                    <td><input type="radio" name="Poliza_seguro" value="Si" required></td>
                    <td><input type="radio" name="Poliza_seguro" value="No" required></td>
                    <td><input type="radio" name="Poliza_seguro" value="No Aplica" required></td>
                    <td><input type="file" name="foto_poliza_seguro" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Tarjeta de Circulacion</td>
                    <td><input type="radio" name="Tarjeta_Circulacion" value="Si" required></td>
                    <td><input type="radio" name="Tarjeta_Circulacion" value="No" required></td>
                    <td><input type="radio" name="Tarjeta_Circulacion" value="No Aplica" required></td>
                    <td><input type="file" name="foto_tarjeta_circulacion" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Retrovisor</td>
                    <td><input type="radio" name="Retrovisor" value="Si" required></td>
                    <td><input type="radio" name="Retrovisor" value="No" required></td>
                    <td><input type="radio" name="Retrovisor" value="No Aplica" required></td>
                    <td><input type="file" name="foto_retrovisor" accept="image/*"></td>

                </tr>
            </table>

            <h2>Exterior</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Si</th>
                    <th>NO</th>
                    <th>No Aplica</th>
                    <th>Foto</th>
                </tr>
                <tr>
                    <td>Luces Funcionando</td>
                    <td><input type="radio" name="Luces_Funcionando" value="Si" required></td>
                    <td><input type="radio" name="Luces_Funcionando" value="No" required></td>
                    <td><input type="radio" name="Luces_Funcionando" value="No Aplica" required></td>
                    <td><input type="file" name="foto_luces_funcionando" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Luces de Navegacion</td>
                    <td><input type="radio" name="Luces_Navegacion" value="Si" required></td>
                    <td><input type="radio" name="Luces_Navegacion" value="No" required></td>
                    <td><input type="radio" name="Luces_Navegacion" value="No Aplica" required></td>
                    <td><input type="file" name="foto_luces_navegacion" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Intermitentes Funcionando</td>
                    <td><input type="radio" name="Intermitentes_Funcionando" value="Si" required></td>
                    <td><input type="radio" name="Intermitentes_Funcionando" value="No" required></td>
                    <td><input type="radio" name="Intermitentes_Funcionando" value="No Aplica" required></td>
                    <td><input type="file" name="foto_intermitentes_funcionando" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Llantas en buen Estado</td>
                    <td><input type="radio" name="Llantas_buen_Estado" value="Si" required></td>
                    <td><input type="radio" name="Llantas_buen_Estado" value="No" required></td>
                    <td><input type="radio" name="Llantas_buen_Estado" value="No Aplica" required></td>
                    <td><input type="file" name="foto_llantas_buen_estado" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Presion de Llantas</td>
                    <td><input type="radio" name="Presion_Llantas" value="Si" required></td>
                    <td><input type="radio" name="Presion_Llantas" value="No" required></td>
                    <td><input type="radio" name="Presion_Llantas" value="No Aplica" required></td>
                    <td><input type="file" name="foto_presion_llantas" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Retrovisores Laterales</td>
                    <td><input type="radio" name="Retrovisores_Laterales" value="Si" required></td>
                    <td><input type="radio" name="Retrovisores_Laterales" value="No" required></td>
                    <td><input type="radio" name="Retrovisores_Laterales" value="No Aplica" required></td>
                    <td><input type="file" name="foto_retrovisores_laterales" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Carroceria</td>
                    <td><input type="radio" name="Carroceria" value="Si" required></td>
                    <td><input type="radio" name="Carroceria" value="No" required></td>
                    <td><input type="radio" name="Carroceria" value="No Aplica" required></td>
                    <td><input type="file" name="foto_carroceria" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Cristales</td>
                    <td><input type="radio" name="Cristales" value="Si" required></td>
                    <td><input type="radio" name="Cristales" value="No" required></td>
                    <td><input type="radio" name="Cristales" value="No Aplica" required></td>
                    <td><input type="file" name="foto_cristales" accept="image/*"></td>

                </tr>
                <tr>
                    <td>calcamonias / Rotulos Completos</td>
                    <td><input type="radio" name="calcamonias" value="Si" required></td>
                    <td><input type="radio" name="calcamonias" value="No" required></td>
                    <td><input type="radio" name="calcamonias" value="No Aplica" required></td>
                    <td><input type="file" name="foto_calcamonias" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Placas Delanteras / Trasera</td>
                    <td><input type="radio" name="Placas" value="Si" required></td>
                    <td><input type="radio" name="Placas" value="No" required></td>
                    <td><input type="radio" name="Placas" value="No Aplica" required></td>
                    <td><input type="file" name="foto_placas" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Fuga Agua / Disel / Otra</td>
                    <td><input type="radio" name="Fuga" value="Si" required></td>
                    <td><input type="radio" name="Fuga" value="No" required></td>
                    <td><input type="radio" name="Fuga" value="No Aplica" required></td>
                    <td><input type="file" name="foto_fuga" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Micas / Calaveras</td>
                    <td><input type="radio" name="Micas" value="Si" required></td>
                    <td><input type="radio" name="Micas" value="No" required></td>
                    <td><input type="radio" name="Micas" value="No Aplica" required></td>
                    <td><input type="file" name="foto_micas" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Bateria 1</td>
                    <td><input type="radio" name="Bateria_1" value="Si" required></td>
                    <td><input type="radio" name="Bateria_1" value="No" required></td>
                    <td><input type="radio" name="Bateria_1" value="No Aplica" required></td>
                    <td><input type="file" name="foto_bateria_1" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Bateria 2</td>
                    <td><input type="radio" name="Bateria_2" value="Si" required></td>
                    <td><input type="radio" name="Bateria_2" value="No" required></td>
                    <td><input type="radio" name="Bateria_2" value="No Aplica" required></td>
                    <td><input type="file" name="foto_bateria_2" accept="image/*"></td>

                </tr>
            </table>
            <h2>Limpieza</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Si</th>
                    <th>NO</th>
                    <th>No Aplica</th>
                    <th>Foto</th>
                </tr>
                <tr>
                    <td>Interior</td>
                    <td><input type="radio" name="interior_limpieza" value="Si" required></td>
                    <td><input type="radio" name="interior_limpieza" value="No" required></td>
                    <td><input type="radio" name="interior_limpieza" value="No Aplica" required></td>
                    <td><input type="file" name="foto_interior_limpieza" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Lateral Izquierdo</td>
                    <td><input type="radio" name="Lateral_Izquierdo" value="Si" required></td>
                    <td><input type="radio" name="Lateral_Izquierdo" value="No" required></td>
                    <td><input type="radio" name="Lateral_Izquierdo" value="No Aplica" required></td>
                    <td><input type="file" name="foto_lateral_izquierdo" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Lateral Derecho</td>
                    <td><input type="radio" name="Lateral_Derecho" value="Si" required></td>
                    <td><input type="radio" name="Lateral_Derecho" value="No" required></td>
                    <td><input type="radio" name="Lateral_Derecho" value="No Aplica" required></td>
                    <td><input type="file" name="foto_lateral_derecho" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Frontal</td>
                    <td><input type="radio" name="Frontal" value="Si" required></td>
                    <td><input type="radio" name="Frontal" value="No" required></td>
                    <td><input type="radio" name="Frontal" value="No Aplica" required></td>
                    <td><input type="file" name="foto_frontal" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Tracero</td>
                    <td><input type="radio" name="Tracero" value="Si" required></td>
                    <td><input type="radio" name="Tracero" value="No" required></td>
                    <td><input type="radio" name="Tracero" value="No Aplica" required></td>
                    <td><input type="file" name="foto_tracero" accept="image/*"></td>

                </tr>
            </table>
            <h2>Operador</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Si</th>
                    <th>NO</th>
                    <th>No Aplica</th>
                    <th>Foto</th>
                </tr>    
                <tr>
                    <td>Uniforme</td>
                    <td><input type="radio" name="Uniforme" value="Si" required></td>
                    <td><input type="radio" name="Uniforme" value="No" required></td>
                    <td><input type="radio" name="Uniforme" value="No Aplica" required></td>
                    <td><input type="file" name="foto_uniforme" accept="image/*"></td>

                </tr>
                <tr>
                    <td>Alcoholimetia</td>
                    <td><input type="radio" name="Alcoholimetia" value="Si" required></td>
                    <td><input type="radio" name="Alcoholimetia" value="No" required></td>
                    <td><input type="radio" name="Alcoholimetia" value="No Aplica" required></td>
                    <td><input type="file" name="foto_alcoholimetia" accept="image/*"></td>

                </tr>
                
                
            </table>

            <h2>Revision de Niveles</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Si</th>
                    <th>NO</th>
                    <th>No Aplica</th>
                    <th>Foto</th>
                </tr>

                <tr>
                    <td>Aceite</td>
                    <td><input type="radio" name="aceite" value="Si" required></td>
                    <td><input type="radio" name="aceite" value="No" required></td>
                    <td><input type="radio" name="aceite" value="No Aplica" required></td>
                    <td><input type="file" name="foto_aceite" accept="image/*"></td>

                </tr>
                
                <tr>
                    <td>Anticongelante</td>
                    <td><input type="radio" name="anticongelante" value="Si" required></td>
                    <td><input type="radio" name="anticongelante" value="No" required></td>
                    <td><input type="radio" name="anticongelante" value="No Aplica" required></td>
                    <td><input type="file" name="foto_anticongelante" accept="image/*"></td>

                </tr>

                <tr>
                    <td>Liquido de Frenos</td>
                    <td><input type="radio" name="liquidofrenos" value="Si" required></td>
                    <td><input type="radio" name="liquidofrenos" value="No" required></td>
                    <td><input type="radio" name="liquidofrenos" value="No Aplica" required></td>
                    <td><input type="file" name="foto_liquidofrenos" accept="image/*"></td>

                </tr>

                <tr>
                    <td>Nivel de Direccion Hidraulica</td>
                    <td><input type="radio" name="direccionhidraulica" value="Si" required></td>
                    <td><input type="radio" name="direccionhidraulica" value="No" required></td>
                    <td><input type="radio" name="direccionhidraulica" value="No Aplica" required></td>
                    <td><input type="file" name="foto_direccionhidraulica" accept="image/*"></td>

                </tr>
                </table>




            <button type="submit">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
