
  <center>
                <form class="form-inline my-2 my-lg-0">
                <input type='search' class='form-control' onkeyup="myFunction1(this)" name="keyword"
                                id='my-search2' placeholder='¿Qué estás buscando?' style='width:30%;'><br>
                                <button type="button" class="btn btn-warning" onclick="Limpiar()">Limpiar búsqueda</button>
                    </form>


                            <table id='example-table2' class="table table-bordered table-striped border border-4"
                                border=0 cellpadding=0 cellspacing=0 width=972 style='border-collapse:
                                collapse;table-layout:fixed;width:729pt'>
                                <col width=154 style='mso-width-source:userset;mso-width-alt:5632;width:116pt'>
                                <col width=367 style='mso-width-source:userset;mso-width-alt:13421;width:275pt'>
                                <col width=320 style='mso-width-source:userset;mso-width-alt:11702;width:240pt'>
                                <col width=131 style='mso-width-source:userset;mso-width-alt:4790;width:98pt'>


                                <thead class="text-white">
                                    <tr height=40 style='height:30.0pt'>
                                        <td height=40 class=xl69 width=154
                                            style='height:30.0pt;width:116pt;background-color:#198754;'>Inquietud</td>
                                        <td class=xl69 width=367
                                            style='border-left:none;width:275pt;background-color:#198754;'>Pregunta
                                            filtro
                                        </td>
                                        <td class=xl69 width=320
                                            style='border-left:none;width:240pt;background-color:#198754;'>Respuesta a
                                            la pregunta filtro</td>
                                        <td class=xl69 width=131
                                            style='border-left:none;width:98pt;background-color:#198754;'>Programa a
                                            transferir
                                            <span style='mso-spacerun:yes'> </span>
                                        </td>
                                    </tr>
                                </thead>

  <tbody>
                    <?php

                    $sql = $conexion->query("SELECT * FROM matriz_respuestas");

                    while($datos = $sql->fetch_object()){?>
                    <tr>

                    <td><?= $datos->Inquietud?></td>
                    <td><?= $datos->pregunta_filtro?></td>

                    <td><?= str_replace(".", ".<br>", $datos->respue_filtro);?></td>
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
                    ?>  </tr>
                    <?php
                    } 
                    ?>
                    


                </tbody>
            </table>
                    </center>   
                    <script>
                   jQuery(function () {
                            jQuery('#my-search2').on('keyup', function () {
                                var value = jQuery(this).val().toLowerCase();
                                jQuery('#example-table2 > tbody > tr').filter(function () {
                                    jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
                        </script>     
  </div>
  </div>