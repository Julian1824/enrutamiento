<center>
    
      <form class="form-inline my-2 my-lg-0">
                            <input type='search' class='form-control' onkeyup="myFunction1(this)" name="keyword"
                                id='my-search4' placeholder='¿Qué estás buscando?' style='width:30%;'>

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
                                <script>
                                    function eliminar(){
                                     const respuesta = confirm("¿Estas Seguro que quieres eliminar?")
                                     return respuesta;

                                     }
                                </script>
                            <table id='example-table4' class="table table-bordered table-striped border border-4"
                                border=0 cellpadding=0 cellspacing=0 width=971 style='border-collapse:
                                collapse;table-layout:fixed;width:728pt'>
                            
                                <thead>
                                    <tr height=40 style='height:30.0pt'>
                                        <td height=40 class=xl75 width=86%
                                            style='background-color: #198754;color:#fff;'>
                                            Usuarios</td>
                                        <td class=xl75 width=14%
                                            style='background-color: #198754;color:#fff;'>
                                            Acciones
                                        </td>
                                       </tr>
                                </thead>
                   

                <tbody>
                    
                    <?php 
                                  include "Model/conexion.php";
                              $sql = $conexion->query("SELECT DISTINCT(Usuarios) FROM usuarios");
                      
                              while($datos = $sql->fetch_object()){?>
                              <tr>
                      
                      
                              <td><?= ucfirst($datos->Usuarios);?></td>
                                <td style="">
                                          <a href="View/usuarios/numero_ingresos.php?usuario=<?= $datos->Usuarios ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-eye" style="color:#FFFFFF; "></i></a>
                                          <a href="View/usuarios/eliminarUsuarios.php?usuario=<?= $datos->Usuarios ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-user-slash" style="color:#FFFFFF; "></i></a>
                                </td>   
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
                            jQuery('#my-search4').on('keyup', function () {
                                var value = jQuery(this).val().toLowerCase();
                                jQuery('#example-table4 > tbody > tr').filter(function () {
                                    jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
                                });
                            });
                        });
</script> 