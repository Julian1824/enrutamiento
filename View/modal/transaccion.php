<center>
      <form class="form-inline my-2 my-lg-0">
                            <input type='search' class='form-control' onkeyup="myFunction1(this)" name="keyword"
                                id='my-search3' placeholder='¿Qué estás buscando?' style='width:30%;'>

                            <br>
                                <button type="button" class="btn btn-warning" onclick="Limpiar()">Limpiar búsqueda</button>
                    </form>
                            <br>
                            <style type="text/css">
                                mark,
                                .mark {
                                    padding: .2em;
                                    background-color: #e8d156 !important;
                                }

                                table.table table-bordered table-striped {
                                    font-size: 12px;
                                    border: 1px solid #CCC;
                                    font-family: Arial, Helvetica, sans-serif;
                                }

                                .table table-bordered table-striped td {
                                    padding: 4px;
                                    margin: 3px;
                                    border: 1px solid #CCC;
                                }

                                .table table-bordered table-striped th {
                                    background-color: #198754;
                                    color: #FFF;
                                    font-weight: bold;
                                }
                            </style>
                            <table id='example-table3' class="table table-bordered table-striped border border-4"
                                border=0 cellpadding=0 cellspacing=0 width=971 style='border-collapse:
                                collapse;table-layout:fixed;width:728pt'>
                                <col width=152 style='mso-width-source:userset;mso-width-alt:5558;width:114pt'>
                                <col width=215 style='width:161pt'>
                                <col width=215 style='width:161pt'>
                                <col width=260 style='mso-width-source:userset;mso-width-alt:9508;width:195pt'>
                                <col width=129 style='mso-width-source:userset;mso-width-alt:4717;width:97pt'>
                                <thead>
                                    <tr height=40 style='height:30.0pt'>
                                        <td height=40 class=xl75 width=152
                                            style='height:30.0pt;width:114pt;background-color: #198754;color:#fff;'>
                                            Transacción (motivo de la llamada)</td>
                                        <td class=xl75 width=215
                                            style='border-left:none;width:161pt;background-color: #198754;color:#fff;'>
                                            Pregunta filtro
                                        </td>
                                        <td class=xl75 width=215
                                            style='border-left:none;width:161pt;background-color: #198754;color:#fff;'>
                                            Respuesta a la pregunta filtro</td>
                                        <td class=xl75 width=260
                                            style='border-left:none;width:195pt;background-color: #198754;color:#fff;'>
                                            Pregunta frecuente
                                        </td>
                                        <td class=xl75 width=129
                                            style='border-left:none;width:97pt;background-color: #198754;color:#fff;'>
                                            Programa a transferir
                                            <span style='mso-spacerun:yes'> </span>
                                        </td>
                                    </tr>
                                </thead>
                   

                <tbody>
                    <?php 
                    
                    $sql = $conexion->query("SELECT * FROM matriz_epm");

                    while($datos = $sql->fetch_object()){?>
                    <tr>
                    <td><?= $datos->transaccion?></td>
                    <td><?= $datos->pregunta_filtro?></td>
                    <td><?= str_replace(".", ".<br>", $datos->respuestas_preguntas);?></td>    
                    <td><?= str_replace(".", ".<br>", $datos->pregunta_frecuente);?></td>
                    <?php
                        if($datos->programa_transferir === 'orientacion factura'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_orientacion_factura">Orientación a la factura</button></td>';
                        }elseif($datos->programa_transferir === 'epm puerta'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_EPM_a_tu_puerta">EPM a tu Puerta</button></td>';
                        }elseif($datos->programa_transferir === 'daños acueducto'){
                            echo '<td> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_daños_acueducto">Daños acueducto</button></td>';
                        }elseif($datos->programa_transferir === 'quejas'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_quejas">Quejas</button></td>';
                        }elseif($datos->programa_transferir === 'somos'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modal_SOMOS">SOMOS</button></td>';
                        }elseif($datos->programa_transferir === 'revisiones periodicas'){
                            echo '<td> <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modal_revisiones_periodicas">Revisiones Periódicas</button></td>';
                        }elseif($datos->programa_transferir === 'daños energia'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modal_daños_energia">Daños energía</button></td>';
                        }elseif($datos->programa_transferir === 'solgas'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modal_SOLGAS">SOLGAS</button></td>';
                        }elseif($datos->programa_transferir === 'daños gas'){
                            echo '<td><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_daños_gas">Daños gas</button></td>';
                        }else{
                         echo '<td>Error al encontrar</td>';
                        }
                    ?>  
                    </tr>
                    <?php
                    } 
                    ?>
                    


                </tbody>
            </table>    
                        
            </center>
   
            
    <script>
        function Limpiar() {
            location.reload();
             }
                   jQuery(function () {
                            jQuery('#my-search3').on('keyup', function () {
                                var value = jQuery(this).val().toLowerCase();
                                jQuery('#example-table3 > tbody > tr').filter(function () {
                                    jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
</script> 