<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check List</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <h1>Check List KNQ</h1>
        <img src="asset/knqlogo.png" alt="Logo KNQ" class="logo">
        <form action="process_form.php" method="post">
            <div class="form-group">
                <label for="responsable">Responsable / Coordinador:</label>
                <input type="text" id="responsable" name="responsable" required>
            </div>
            <div class="form-group">
                <label for="planta">Planta:</label>
                <input type="text" id="planta" name="planta" required>
            </div>
            <div class="form-group">
                <label for="turno">Turno:</label>
                <input type="text" id="turno" name="turno" required>
            </div>
            <h2>Unidad a Evaluar</h2>
            <input type="text" name="unidad" required>
            <h2>Interior</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>OK</th>
                    <th>NO OK</th>
                    <th>Comentarios</th>
                </tr>
                <tr>
                    <td>Tablero funcionando</td>
                    <td><input type="radio" name="tablero" value="ok" required></td>
                    <td><input type="radio" name="tablero" value="no_ok" required></td>
                    <td><input type="text" name="tablero_comentarios"></td>
                </tr>
                <tr>
                    <td>Asientos firmes</td>
                    <td><input type="radio" name="asientos" value="ok" required></td>
                    <td><input type="radio" name="asientos" value="no_ok" required></td>
                    <td><input type="text" name="asientos_comentarios"></td>
                </tr>
                <tr>
                    <td>Tapiceria</td>
                    <td><input type="radio" name="tapiceria" value="ok" required></td>
                    <td><input type="radio" name="tapiceria" value="no_ok" required></td>
                    <td><input type="text" name="tapiceria_comentarios"></td>
                </tr>
                <tr>
                    <td>Cinturones Firmes</td>
                    <td><input type="radio" name="cinturones" value="ok" required></td>
                    <td><input type="radio" name="cinturones" value="no_ok" required></td>
                    <td><input type="text" name="cinturones_comentarios"></td>
                </tr>
                <tr>
                    <td>Pasamanos Firmes</td>
                    <td><input type="radio" name="pasamanos" value="ok" required></td>
                    <td><input type="radio" name="pasamanos" value="no_ok" required></td>
                    <td><input type="text" name="pasamanos_comentarios"></td>
                </tr>
                <tr>
                    <td>Retrovisor de Pasillo</td>
                    <td><input type="radio" name="retrovisor_pasillo" value="ok" required></td>
                    <td><input type="radio" name="retrovisor_pasillo" value="no_ok" required></td>
                    <td><input type="text" name="retrovisor_pasillo_comentarios"></td>
                </tr>
                <tr>
                    <td>Botiquin</td>
                    <td><input type="radio" name="Botiquin" value="ok" required></td>
                    <td><input type="radio" name="Botiquin" value="no_ok" required></td>
                    <td><input type="text" name="Botiquin_comentarios"></td>
                </tr>
                <tr>
                    <td>Extintor</td>
                    <td><input type="radio" name="Extintor" value="ok" required></td>
                    <td><input type="radio" name="Extintor" value="no_ok" required></td>
                    <td><input type="text" name="Extintor_comentarios"></td>
                </tr>          
                <tr>
                    <td>Alarma de Reversa</td>
                    <td><input type="radio" name="Alarma_Reversa" value="ok" required></td>
                    <td><input type="radio" name="Alarma_Reversa" value="no_ok" required></td>
                    <td><input type="text" name="Alarma_Reversa_comentarios"></td>
                </tr>
                <tr>
                    <td>Luces Interiores</td>
                    <td><input type="radio" name="Luces_Interiores" value="ok" required></td>
                    <td><input type="radio" name="Luces_Interiores" value="no_ok" required></td>
                    <td><input type="text" name="Luces_Interiores_comentarios"></td>
                </tr>      
                <tr>
                    <td>Luces en Escalera</td>
                    <td><input type="radio" name="Luces_Escalera" value="ok" required></td>
                    <td><input type="radio" name="Luces_Escalera" value="no_ok" required></td>
                    <td><input type="text" name="Luces_Escalera_comentarios"></td>
                </tr>
                <tr>
                    <td>Puertas</td>
                    <td><input type="radio" name="Puertas" value="ok" required></td>
                    <td><input type="radio" name="Puertas" value="no_ok" required></td>
                    <td><input type="text" name="Puertas_comentarios"></td>
                </tr>
                <tr>
                    <td>Salida de Emergencia</td>
                    <td><input type="radio" name="Salida_Emergencia" value="ok" required></td>
                    <td><input type="radio" name="Salida_Emergencia" value="no_ok" required></td>
                    <td><input type="text" name="Salida_Emergencia_comentarios"></td>
                </tr>
                <tr>
                    <td>Asiento Operador</td>
                    <td><input type="radio" name="Asiento_Operador" value="ok" required></td>
                    <td><input type="radio" name="Asiento_Operador" value="no_ok" required></td>
                    <td><input type="text" name="Asiento_Operador_comentarios"></td>
                </tr>
                <tr>
                    <td>Cables Expuestos</td>
                    <td><input type="radio" name="Cables_Expuestos" value="ok" required></td>
                    <td><input type="radio" name="Cables_Expuestos" value="no_ok" required></td>
                    <td><input type="text" name="Cables_Expuestos_comentarios"></td>
                </tr>
                <tr>
                    <td>Poliza de seguro</td>
                    <td><input type="radio" name="Poliza_seguro" value="ok" required></td>
                    <td><input type="radio" name="Poliza_seguro" value="no_ok" required></td>
                    <td><input type="text" name="Poliza_seguro_comentarios"></td>
                </tr>
                <tr>
                    <td>Tarjeta de Circulacion</td>
                    <td><input type="radio" name="Tarjeta_Circulacion" value="ok" required></td>
                    <td><input type="radio" name="Tarjeta_Circulacion" value="no_ok" required></td>
                    <td><input type="text" name="Tarjeta_Circulacion_comentarios"></td>
                </tr>
                <tr>
                    <td>Retrovisor</td>
                    <td><input type="radio" name="Retrovisor" value="ok" required></td>
                    <td><input type="radio" name="Retrovisor" value="no_ok" required></td>
                    <td><input type="text" name="Retrovisor_comentarios"></td>
                </tr>
            </table>

            <h2>Exterior</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>OK</th>
                    <th>NO OK</th>
                    <th>Comentarios</th>
                </tr>
                <tr>
                    <td>Luces Funcionando</td>
                    <td><input type="radio" name="Luces_Funcionando" value="ok" required></td>
                    <td><input type="radio" name="Luces_Funcionando" value="no_ok" required></td>
                    <td><input type="text" name="Luces_Funcionando_comentarios"></td>
                </tr>
                <tr>
                    <td>Luces de Navegacion</td>
                    <td><input type="radio" name="Luces_Navegacion" value="ok" required></td>
                    <td><input type="radio" name="Luces_Navegacion" value="no_ok" required></td>
                    <td><input type="text" name="Luces_Navegacion_comentarios"></td>
                </tr>
                <tr>
                    <td>Intermitentes Funcionando</td>
                    <td><input type="radio" name="Intermitentes_Funcionando" value="ok" required></td>
                    <td><input type="radio" name="Intermitentes_Funcionando" value="no_ok" required></td>
                    <td><input type="text" name="Intermitentes_Funcionando_comentarios"></td>
                </tr>
                <tr>
                    <td>Llantas en buen Estado</td>
                    <td><input type="radio" name="Llantas_buen_Estado" value="ok" required></td>
                    <td><input type="radio" name="Llantas_buen_Estado" value="no_ok" required></td>
                    <td><input type="text" name="Llantas_buen_Estado_comentarios"></td>
                </tr>
                <tr>
                    <td>Presion de Llantas</td>
                    <td><input type="radio" name="Presion_Llantas" value="ok" required></td>
                    <td><input type="radio" name="Presion_Llantas" value="no_ok" required></td>
                    <td><input type="text" name="Presion_Llantas_comentarios"></td>
                </tr>
                <tr>
                    <td>Retrovisores Laterales</td>
                    <td><input type="radio" name="Retrovisores_Laterales" value="ok" required></td>
                    <td><input type="radio" name="Retrovisores_Laterales" value="no_ok" required></td>
                    <td><input type="text" name="Retrovisores_Laterales"></td>
                </tr>
                <tr>
                    <td>Carroceria</td>
                    <td><input type="radio" name="Carroceria" value="ok" required></td>
                    <td><input type="radio" name="Carroceria" value="no_ok" required></td>
                    <td><input type="text" name="Carroceria_comentarios"></td>
                </tr>
                <tr>
                    <td>Cristales</td>
                    <td><input type="radio" name="Cristales" value="ok" required></td>
                    <td><input type="radio" name="Cristales" value="no_ok" required></td>
                    <td><input type="text" name="Cristales_comentarios"></td>
                </tr>
                <tr>
                    <td>calcamonias / Rotulos Completos</td>
                    <td><input type="radio" name="calcamonias" value="ok" required></td>
                    <td><input type="radio" name="calcamonias" value="no_ok" required></td>
                    <td><input type="text" name="calcamonias_comentarios"></td>
                </tr>
                <tr>
                    <td>Placas Delanteras / Trasera</td>
                    <td><input type="radio" name="Placas" value="ok" required></td>
                    <td><input type="radio" name="Placas" value="no_ok" required></td>
                    <td><input type="text" name="Placas_comentarios"></td>
                </tr>
                <tr>
                    <td>Fuga Agua / Disel</td>
                    <td><input type="radio" name="Fuga" value="ok" required></td>
                    <td><input type="radio" name="Fuga" value="no_ok" required></td>
                    <td><input type="text" name="Fuga_comentarios"></td>
                </tr>
                <tr>
                    <td>Micas / Calaveras</td>
                    <td><input type="radio" name="Micas" value="ok" required></td>
                    <td><input type="radio" name="Micas" value="no_ok" required></td>
                    <td><input type="text" name="Micas_comentarios"></td>
                </tr>
                <tr>
                    <td>Bateria 1</td>
                    <td><input type="radio" name="Bateria_1" value="ok" required></td>
                    <td><input type="radio" name="Bateria_1" value="no_ok" required></td>
                    <td><input type="text" name="Bateria_1_comentarios"></td>
                </tr>
                <tr>
                    <td>Bateria 2</td>
                    <td><input type="radio" name="tapiceria_2" value="ok" required></td>
                    <td><input type="radio" name="tapiceria_2" value="no_ok" required></td>
                    <td><input type="text" name="tapiceria_2_comentarios"></td>
                </tr>
            </table>
            <h2>Limpieza</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>OK</th>
                    <th>NO OK</th>
                    <th>Comentarios</th>
                </tr>
                <tr>
                    <td>Interior</td>
                    <td><input type="radio" name="Interior_limpieza" value="ok" required></td>
                    <td><input type="radio" name="Interior_limpieza" value="no_ok" required></td>
                    <td><input type="text" name="Interior_limpieza_comentarios"></td>
                </tr>
                <tr>
                    <td>Lateral Izquierdo</td>
                    <td><input type="radio" name="Lateral_Izquierdo" value="ok" required></td>
                    <td><input type="radio" name="Lateral_Izquierdo" value="no_ok" required></td>
                    <td><input type="text" name="Lateral_Izquierdo_comentarios"></td>
                </tr>
                <tr>
                    <td>Lateral Derecho</td>
                    <td><input type="radio" name="Lateral_Derecho" value="ok" required></td>
                    <td><input type="radio" name="Lateral_Derecho" value="no_ok" required></td>
                    <td><input type="text" name="Lateral_Derecho_comentarios"></td>
                </tr>
                <tr>
                    <td>Frontal</td>
                    <td><input type="radio" name="Frontal" value="ok" required></td>
                    <td><input type="radio" name="Frontal" value="no_ok" required></td>
                    <td><input type="text" name="Frontal_comentarios"></td>
                </tr>
                <tr>
                    <td>Tracero</td>
                    <td><input type="radio" name="Tracero" value="ok" required></td>
                    <td><input type="radio" name="Tracero" value="no_ok" required></td>
                    <td><input type="text" name="Tracero_comentarios"></td>
                </tr>
            </table>
            <h2>Operador</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>OK</th>
                    <th>NO OK</th>
                    <th>Comentarios</th>
                </tr>    
                <tr>
                    <td>Uniforme</td>
                    <td><input type="radio" name="Uniforme" value="ok" required></td>
                    <td><input type="radio" name="Uniforme" value="no_ok" required></td>
                    <td><input type="text" name="Uniforme_comentarios"></td>
                </tr>
                <tr>
                    <td>Alcoholimetia</td>
                    <td><input type="radio" name="Alcoholimetia" value="ok" required></td>
                    <td><input type="radio" name="Alcoholimetia" value="no_ok" required></td>
                    <td><input type="text" name="Alcoholimetia_comentarios"></td>
                </tr>
                
            </table>


            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
