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
                <input type="text" id="operador" name="operador" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="planta">Ruta:</label>
                <input type="text" id="planta" name="planta" required autocomplete="off">
            </div>

            <div class="form-group">
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" class="form-control" required readonly>
</div>

            <script>
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('fecha').value = today;
</script>

            <h2>Unidad</h2>
            <input type="text" name="unidad" required>
            <h2>Revision de Niveles</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Opcion</th>
                    <th>Foto</th>
                </tr>
        
                <tr>
                    <td data-label="Inspección">Aceite</td>
                    <td data-label="Opciones">
                        <div class="radio-group" required>
                            <label for="aceite_si">Sí</label>
                            <input type="radio" id="aceite_si" name="aceite" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="aceite_no">No</label>
                            <input type="radio" id="aceite_no" name="aceite" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="aceite_na">No Aplica</label>
                            <input type="radio" id="aceite_na" name="aceite" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_aceite" required>
                    </td>
        
        
                </tr>
                
                <tr>
                    <td data-label="Inspección">Anticongelante</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="anticongelante_si">Sí</label>
                            <input type="radio" id="anticongelante_si" name="anticongelante" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="anticongelante_no">No</label>
                            <input type="radio" id="anticongelante_no" name="anticongelante" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="anticongelante_na">No Aplica</label>
                            <input type="radio" id="anticongelante_na" name="anticongelante" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_anticongelante" required>
                    </td>
        
                </tr>
        
                <tr>
                    <td data-label="Inspección">Liquido de Frenos</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="liquido_frenos_si">Sí</label>
                            <input type="radio" id="liquido_frenos_si" name="liquidofrenos" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="liquido_frenos_no">No</label>
                            <input type="radio" id="liquido_frenos_no" name="liquidofrenos" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="liquido_frenos_na">No Aplica</label>
                            <input type="radio" id="liquido_frenos_na" name="liquidofrenos" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_liquido_frenos" required>
                    </td>
        
                </tr>
        
                <tr>
                    <td data-label="Inspección">Nivel de Direccion Hidraulica</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="direccion_hidraulica_si">Sí</label>
                            <input type="radio" id="direccion_hidraulica_si" name="direccionhidraulica" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="direccion_hidraulica_no">No</label>
                            <input type="radio" id="direccion_hidraulica_no" name="direccionhidraulica" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="direccion_hidraulica_na">No Aplica</label>
                            <input type="radio" id="direccion_hidraulica_na" name="direccionhidraulica" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_direccion_hidraulica" required>
                    </td>
        
                </tr>
                </table>

            <h2>Interior</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Opcion</th>
                    <th>Foto</th>
                </tr>


                <tbody>
        <tr>
            <td data-label="Inspección">Tablero funcionando</td>
            <td data-label="Opciones">
                <div class="radio-group">
                    <label for="tablero_si">Sí</label>
                    <input type="radio" id="tablero_si" name="tablero" value="si" required>
                </div>
                <div class="radio-group">
                    <label for="tablero_no">No</label>
                    <input type="radio" id="tablero_no" name="tablero" value="no" required>
                </div>
                <div class="radio-group">
                    <label for="tablero_na">No Aplica</label>
                    <input type="radio" id="tablero_na" name="tablero" value="No Aplica" required>
                </div>
            </td>
            <td data-label="Foto">
                <input type="file" name="foto_tablero" required>
            </td>
        </tr>
    </tbody>

                <tbody>
                <tr>
                    <td data-label="Inspección">Asientos firmes</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="asientos_si">Sí</label>
                            <input type="radio" id="asientos_si" name="asientos" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="asientos_no">No</label>
                            <input type="radio" id="asientos_no" name="asientos" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="asientos_na">No Aplica</label>
                            <input type="radio" id="asientos_na" name="asientos" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_asientos" required>
                    </td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                    <td data-label="Inspección">Tapiceria</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="tapiceria_si">Sí</label>
                            <input type="radio" id="tapiceria_si" name="tapiceria" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="tapiceria_no">No</label>
                            <input type="radio" id="tapiceria_no" name="tapiceria" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="tapiceria_na">No Aplica</label>
                            <input type="radio" id="tapiceria_na" name="tapiceria" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_tapiceria" required>
                    </td>
                </tr>
                <tr>
                    <td data-label="Inspección">Cinturones Firmes</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="cinturones_si">Sí</label>
                            <input type="radio" id="cinturones_si" name="cinturones" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="cinturones_no">No</label>
                            <input type="radio" id="cinturones_no" name="cinturones" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="cinturones_na">No Aplica</label>
                            <input type="radio" id="cinturones_na" name="cinturones" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_cinturones" required>
                    </td>
                </tr>
        
                <tr>
                    <td data-label="Inspección">Pasamanos Firmes</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="pasamanos_si">Sí</label>
                            <input type="radio" id="pasamanos_si" name="pasamanos" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="pasamanos_no">No</label>
                            <input type="radio" id="pasamanos_no" name="pasamanos" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="pasamanos_na">No Aplica</label>
                            <input type="radio" id="pasamanos_na" name="pasamanos" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_pasamanos" required>
                    </td>

                </tr>
                <tr>
                    <td data-label="Inspección">Retrovisor de Pasillo</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="retrovisor_pasillo_si">Sí</label>
                            <input type="radio" id="retrovisor_pasillo_si" name="retrovisor_pasillo" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="retrovisor_pasillo_no">No</label>
                            <input type="radio" id="retrovisor_pasillo_no" name="retrovisor_pasillo" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="retrovisor_pasillo_na">No Aplica</label>
                            <input type="radio" id="retrovisor_pasillo_na" name="retrovisor_pasillo" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_retrovisor_pasillo" required>
                    </td>
                </tr>
                <tr>
                    <td data-label="Inspección">Botiquin</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="botiquin_si">Sí</label>
                            <input type="radio" id="botiquin_si" name="botiquin" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="botiquin_no">No</label>
                            <input type="radio" id="botiquin_no" name="botiquin" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="botiquin_na">No Aplica</label>
                            <input type="radio" id="botiquin_na" name="botiquin" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_botiquin" required>
                    </td>
                    
                </tr>
                <tr>
                    <td data-label="Inspección">Extintor</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="extintor_si">Sí</label>
                            <input type="radio" id="extintor_si" name="extintor" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="extintor_no">No</label>
                            <input type="radio" id="extintor_no" name="extintor" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="extintor_na">No Aplica</label>
                            <input type="radio" id="extintor_na" name="extintor" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_extintor" required>
                    </td>

                </tr>          
                <tr>
                    <td data-label="Inspección">Alarma de Reversa</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="alarma_reversa_si">Sí</label>
                            <input type="radio" id="alarma_reversa_si" name="alarma_reversa" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="alarma_reversa_no">No</label>
                            <input type="radio" id="alarma_reversa_no" name="alarma_reversa" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="alarma_reversa_na">No Aplica</label>
                            <input type="radio" id="alarma_reversa_na" name="alarma_reversa" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_alarma_reversa" required>
                    </td>


                </tr>
                <tr>
                    <td data-label="Inspección">Luces Interiores</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="luces_interiores_si">Sí</label>
                            <input type="radio" id="luces_interiores_si" name="luces_interiores" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="luces_interiores_no">No</label>
                            <input type="radio" id="luces_interiores_no" name="luces_interiores" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="luces_interiores_na">No Aplica</label>
                            <input type="radio" id="luces_interiores_na" name="luces_interiores" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_luces_interiores" required>
                    </td>
                </tr>    

                <tr>
                    <td data-label="Inspección">Luces en Escalera</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="luces_escalera_si">Sí</label>
                            <input type="radio" id="luces_escalera_si" name="luces_escalera" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="luces_escalera_no">No</label>
                            <input type="radio" id="luces_escalera_no" name="luces_escalera" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="luces_escalera_na">No Aplica</label>
                            <input type="radio" id="luces_escalera_na" name="luces_escalera" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_luces_escalera" required>
                    </td>


                </tr>
                <tr>
                    <td data-label="Inspección">Puertas</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="puertas_si">Sí</label>
                            <input type="radio" id="puertas_si" name="puertas" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="puertas_no">No</label>
                            <input type="radio" id="puertas_no" name="puertas" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="puertas_na">No Aplica</label>
                            <input type="radio" id="puertas_na" name="puertas" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_puertas" required>
                    </td>
                    
                </tr>
                <tr>
                    <td data-label="Inspección">Salida de Emergencia</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="salida_emergencia_si">Sí</label>
                            <input type="radio" id="salida_emergencia_si" name="salida_emergencia" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="salida_emergencia_no">No</label>
                            <input type="radio" id="salida_emergencia_no" name="salida_emergencia" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="salida_emergencia_na">No Aplica</label>
                            <input type="radio" id="salida_emergencia_na" name="salida_emergencia" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_salida_emergencia" required>
                    </td>
                    
                </tr>
                <tr>
                    <td data-label="">Asiento Operador</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="asiento_operador_si">Sí</label>
                            <input type="radio" id="asiento_operador_si" name="asiento_operador" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="asiento_operador_no">No</label>
                            <input type="radio" id="asiento_operador_no" name="asiento_operador" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="asiento_operador_na">No Aplica</label>
                            <input type="radio" id="asiento_operador_na" name="asiento_operador" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_asiento_operador" required>
                    </td>

                </tr>
                <tr>
                    <td data-label="Inspección">Cables Expuestos</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="cables_expuestos_si">Sí</label>
                            <input type="radio" id="cables_expuestos_si" name="cables_expuestos" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="cables_expuestos_no">No</label>
                            <input type="radio" id="cables_expuestos_no" name="cables_expuestos" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="cables_expuestos_na">No Aplica</label>
                            <input type="radio" id="cables_expuestos_na" name="cables_expuestos" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_cables_expuestos" required>
                    </td>

                </tr>
                <tr>
                    <td data-label="Inspección">Poliza de seguro</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="poliza_seguro_si">Sí</label>
                            <input type="radio" id="poliza_seguro_si" name="poliza_seguro" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="poliza_seguro_no">No</label>
                            <input type="radio" id="poliza_seguro_no" name="poliza_seguro" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="poliza_seguro_na">No Aplica</label>
                            <input type="radio" id="poliza_seguro_na" name="poliza_seguro" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_poliza_seguro" required>
                    </td>

                </tr>
                <tr>
                    <td data-label="Inspección">Tarjeta de Circulacion</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="tarjeta_circulacion_si">Sí</label>
                            <input type="radio" id="tarjeta_circulacion_si" name="tarjeta_circulacion" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="tarjeta_circulacion_no">No</label>
                            <input type="radio" id="tarjeta_circulacion_no" name="tarjeta_circulacion" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="tarjeta_circulacion_na">No Aplica</label>
                            <input type="radio" id="tarjeta_circulacion_na" name="tarjeta_circulacion" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_tarjeta_circulacion" required>
                    </td>
                    
                </tr>
                <tr>
                    <td data-label="Inspección">Retrovisor</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="retrovisor_si">Sí</label>
                            <input type="radio" id="retrovisor_si" name="retrovisor" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="retrovisor_no">No</label>
                            <input type="radio" id="retrovisor_no" name="retrovisor" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="retrovisor_na">No Aplica</label>
                            <input type="radio" id="retrovisor_na" name="retrovisor" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_retrovisor" required>
                    </td>

                </tr>
            </table>

            <h2>Exterior</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Opcion</th>
                    <th>Foto</th>
                </tr>
                <tr>
                    <td data-label="Inspección">Luces Funcionando</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="luces_funcionando_si">Sí</label>
                            <input type="radio" id="luces_funcionando_si" name="luces_funcionando" value="si" required> 
                        </div>
                        <div class="radio-group">
                            <label for="luces_funcionando_no">No</label>
                            <input type="radio" id="luces_funcionando_no" name="luces_funcionando" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="luces_funcionando_na">No Aplica</label>
                            <input type="radio" id="luces_funcionando_na" name="luces_funcionando" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_luces_funcionando" required>
                    </td>

                </tr>
                <tr>
                    <td data-label="Inspección">Luces de Navegacion</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="luces_navegacion_si">Sí</label>
                            <input type="radio" id="luces_navegacion_si" name="luces_navegacion" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="luces_navegacion_no">No</label>
                            <input type="radio" id="luces_navegacion_no" name="luces_navegacion" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="luces_navegacion_na">No Aplica</label>
                            <input type="radio" id="luces_navegacion_na" name="luces_navegacion" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_luces_navegacion" required>
                    </td>

                </tr>


                <tr>
                    <td data-label="Inspección">Intermitentes Funcionando</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="intermitentes_funcionando_si">Sí</label>
                            <input type="radio" id="intermitentes_funcionando_si" name="intermitentes_funcionando" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="intermitentes_funcionando_no">No</label>
                            <input type="radio" id="intermitentes_funcionando_no" name="intermitentes_funcionando" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="intermitentes_funcionando_na">No Aplica</label>
                            <input type="radio" id="intermitentes_funcionando_na" name="intermitentes_funcionando" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_intermitentes_funcionando" required>
                    </td>

                </tr>


                <tr>
                    <td data-label="Inspección">Llantas en buen Estado</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="llantas_buen_estado_si">Sí</label>
                            <input type="radio" id="llantas_buen_estado_si" name="llantas_buen_estado" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="llantas_buen_estado_no">No</label>
                            <input type="radio" id="llantas_buen_estado_no" name="llantas_buen_estado" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="llantas_buen_estado_na">No Aplica</label>
                            <input type="radio" id="llantas_buen_estado_na" name="llantas_buen_estado" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_llantas_buen_estado" required>
                    </td>

                </tr>


                <tr>
                    <td data-label="Inspección">Presion de Llantas</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="presion_llantas_si">Sí</label>
                            <input type="radio" id="presion_llantas_si" name="presion_llantas" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="presion_llantas_no">No</label>
                            <input type="radio" id="presion_llantas_no" name="presion_llantas" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="presion_llantas_na">No Aplica</label>
                            <input type="radio" id="presion_llantas_na" name="presion_llantas" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_presion_llantas" required>
                    </td>
                </tr>

                <tr>
                    <td data-label="Inspección">Retrovisores Laterales</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="retrovisores_laterales_si">Sí</label>
                            <input type="radio" id="retrovisores_laterales_si" name="retrovisores_laterales" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="retrovisores_laterales_no">No</label>
                            <input type="radio" id="retrovisores_laterales_no" name="retrovisores_laterales" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="retrovisores_laterales_na">No Aplica</label>
                            <input type="radio" id="retrovisores_laterales_na" name="retrovisores_laterales" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_retrovisores_laterales" required>
                    </td>

                </tr>


                <tr>
                    <td data-label="Inspección">Carroceria</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="carroceria_si">Sí</label>
                            <input type="radio" id="carroceria_si" name="carroceria" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="carroceria_no">No</label>
                            <input type="radio" id="carroceria_no" name="carroceria" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="carroceria_na">No Aplica</label>
                            <input type="radio" id="carroceria_na" name="carroceria" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_carroceria" required>
                    </td>

                </tr>
                <tr>
                    <td data-label="Inspección">Cristales</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="cristales_si">Sí</label>
                            <input type="radio" id="cristales_si" name="cristales" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="cristales_no">No</label>
                            <input type="radio" id="cristales_no" name="cristales" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="cristales_na">No Aplica</label>
                            <input type="radio" id="cristales_na" name="cristales" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_cristales" required>
                    </td>

                </tr>


                <tr>
                    <td data-label="Inspección">calcamonias / Rotulos Completos</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="calcamonias_si">Sí</label>
                            <input type="radio" id="calcamonias_si" name="calcamonias" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="calcamonias_no">No</label>
                            <input type="radio" id="calcamonias_no" name="calcamonias" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="calcamonias_na">No Aplica</label>
                            <input type="radio" id="calcamonias_na" name="calcamonias" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_calcamonias" required>
                    </td>
                </tr>

                <tr>
                    <td data-label="Inspección">Placas Delanteras / Trasera</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="placas_si">Sí</label>
                            <input type="radio" id="placas_si" name="placas" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="placas_no">No</label>
                            <input type="radio" id="placas_no" name="placas" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="placas_na">No Aplica</label>
                            <input type="radio" id="placas_na" name="placas" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_placas" required>
                    </td>
                </tr>


                <tr>
                    <td data-label="Inspección">Fuga Agua / Disel / Otra</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="fuga_si">Sí</label>
                            <input type="radio" id="fuga_si" name="fuga" value="si" required> 
                        </div>
                        <div class="radio-group">
                            <label for="fuga_no">No</label>
                            <input type="radio" id="fuga_no" name="fuga" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="fuga_agua_na">No Aplica</label>
                            <input type="radio" id="fuga_na" name="fuga" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_fuga" required>
                    </td>
                </tr>


                <tr>
                    <td data-label="Inspección">Micas / Calaveras</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="micas_si">Sí</label>
                            <input type="radio" id="micas_si" name="micas" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="micas_no">No</label>
                            <input type="radio" id="micas_no" name="micas" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="micas_na">No Aplica</label>
                            <input type="radio" id="micas_na" name="micas" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_micas" required>
                    </td>
                </tr>


                <tr>
                    <td data-label="Inspección">Bateria 1</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="bateria_1_si">Sí</label>
                            <input type="radio" id="bateria_1_si" name="bateria_1" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="bateria_1_no">No</label>
                            <input type="radio" id="bateria_1_no" name="bateria_1" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="bateria_1_na">No Aplica</label>
                            <input type="radio" id="bateria_1_na" name="bateria_1" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_bateria_1" required>
                    </td>
                </tr>


                <tr>
                    <td data-label="Inspección">Bateria 2</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="bateria_2_si">Sí</label>
                            <input type="radio" id="bateria_2_si" name="bateria_2" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="bateria_2_no">No</label>
                            <input type="radio" id="bateria_2_no" name="bateria_2" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="bateria_2_na">No Aplica</label>
                            <input type="radio" id="bateria_2_na" name="bateria_2" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_bateria_2" required>
                    </td>

                </tr>
            </table>

            <h2>Limpieza</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Opcion</th>
                    <th>Foto</th>
                </tr>
                <tr>
                    <td data-label="Inspección">Interior</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="interior_si">Sí</label>
                            <input type="radio" id="interior_si" name="interior_limpieza" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="interior_no">No</label>
                            <input type="radio" id="interior_no" name="interior_limpieza" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="interior_na">No Aplica</label>
                            <input type="radio" id="interior_na" name="interior_limpieza" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_interior" required>
                    </td>

                </tr>
                <tr>
                    <td data-label="Inspección">Lateral Izquierdo</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="lateral_izquierdo_si">Sí</label>
                            <input type="radio" id="lateral_izquierdo_si" name="lateral_izquierdo" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="lateral_izquierdo_no">No</label>
                            <input type="radio" id="lateral_izquierdo_no" name="lateral_izquierdo" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="lateral_izquierdo_na">No Aplica</label>
                            <input type="radio" id="lateral_izquierdo_na" name="lateral_izquierdo" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_lateral_izquierdo" required>
                    </td>
                </tr>


                <tr>
                    <td data-label="Inspección">Lateral Derecho</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="lateral_derecho_si">Sí</label>
                            <input type="radio" id="lateral_derecho_si" name="lateral_derecho" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="lateral_derecho_no">No</label>
                            <input type="radio" id="lateral_derecho_no" name="lateral_derecho" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="lateral_derecho_na">No Aplica</label>
                            <input type="radio" id="lateral_derecho_na" name="lateral_derecho" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_lateral_derecho" required>
                    </td>
                </tr>

                <tr>
                    <td data-label="Inspección">Frontal</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="frontal_si">Sí</label>
                            <input type="radio" id="frontal_si" name="frontal" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="frontal_no">No</label>
                            <input type="radio" id="frontal_no" name="frontal" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="frontal_na">No Aplica</label>
                            <input type="radio" id="frontal_na" name="frontal" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_frontal" required>
                    </td>

                </tr>
                <tr>
                    <td data-label="Inspección">Tracero</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="trasero_si">Sí</label>
                            <input type="radio" id="trasero_si" name="tracero" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="trasero_no">No</label>
                            <input type="radio" id="trasero_no" name="tracero" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="trasero_na">No Aplica</label>
                            <input type="radio" id="trasero_na" name="tracero" value="No Aplica" required>
                        </div>
                    </td>
                    <td data-label="Foto">
                        <input type="file" name="foto_trasero" required>
                    </td>


                </tr>
            </table>
            <h2>Operador</h2>
            <table>
                <tr>
                    <th>Inspección</th>
                    <th>Opcion</th>
                </tr>    
                <tr>
                    <td data-label="Inspección">Uniforme</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="uniforme_si">Sí</label>
                            <input type="radio" id="uniforme_si" name="uniforme" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="uniforme_no">No</label>
                            <input type="radio" id="uniforme_no" name="uniforme" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="uniforme_na">No Aplica</label>
                            <input type="radio" id="uniforme_na" name="uniforme" value="No Aplica" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td data-label="Inspección">Alcoholimetia</td>
                    <td data-label="Opciones">
                        <div class="radio-group">
                            <label for="alcoholimetria_si">Sí</label>
                            <input type="radio" id="alcoholimetria_si" name="alcoholimetria" value="si" required>
                        </div>
                        <div class="radio-group">
                            <label for="alcoholimetria_no">No</label>
                            <input type="radio" id="alcoholimetria_no" name="alcoholimetria" value="no" required>
                        </div>
                        <div class="radio-group">
                            <label for="alcoholimetria_na">No Aplica</label>
                            <input type="radio" id="alcoholimetria_na" name="alcoholimetria" value="No Aplica" required>
                        </div>
                    </td>

                </tr>
                
                
            </table>





            <button type="submit">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
