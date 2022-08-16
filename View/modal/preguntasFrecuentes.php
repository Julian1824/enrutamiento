             
  <center>
                        
      <form class="form-inline my-2 my-lg-0">
                            <input type='search' class='form-control' onkeyup="myFunction1(this)" name="keyword"
                                id='my-search1' placeholder='¿Qué estás buscando?' style='width:30%;'>

                            <br>
                                <button type="button" class="btn btn-warning" onclick="Limpiar()">Limpiar búsqueda</button>
                    </form>
      
                                <table id='example-table1' class="table table-bordered table-striped border border-4"
                                    border=0 cellpadding=0 cellspacing=0 width=827 style='border-collapse:
                                        collapse;table-layout:fixed;width:620pt'>
                                    <col class=xl65 width=644 style='mso-width-source:userset;mso-width-alt:23552;
                                        width:483pt'>
                                    <col width=183 style='mso-width-source:userset;mso-width-alt:6692;width:137pt'>
                                    <thead class="text-white">
    
                                    <tr height=20 style='height:15.0pt'>
                                            <td height=20 class=xl72 width=644
                                                style='height:15.0pt;width:483pt;background-color: #198754'>Pregunta
                                                frecuente
                                            </td>
                                            <td class=xl72 width=183
                                                style='border-left:none;width:137pt;background-color: #198754'>Programa a
                                                transferir
                                                <span style='mso-spacerun:yes'> </span>
                                            </td>
                                        </tr>
                                    </thead>
      <tbody>
        <?php 
            
            $sql = $conexion->query("SELECT * FROM matriz_pqr");
    
            while($datos = $sql->fetch_object()){?>
            <tr>
    
    
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
                       jQuery(function () {
                            jQuery('#my-search1').on('keyup', function () {
                                var value = jQuery(this).val().toLowerCase();
                                jQuery('#example-table1 > tbody > tr').filter(function () {
                                    jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
</script>