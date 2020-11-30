<?php
require_once "bd/conexion.php";

if (isset($_POST["editar"])) {
    $Editar_Reporte = $conexion->query("SELECT * FROM `Reportes` WHERE `Cod_Reporte` = ".$_POST["editar"] )->fetchAll(PDO::FETCH_OBJ);
    foreach($Editar_Reporte as $E_Reporte) : 
        


    
?>

                                        <form action="bd/update_reportes.php" method="POST" class=""  >
                                        <section>
                                            <!-- input dirección -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                     <input type="text" class="form-control" id="Cod_Reporte" value="<?php echo $E_Reporte->Cod_Reporte ?>" name="Cod_Reporte" hidden>
                                                        <label for="DescripcionFalta"> Inasistencias: <span class="danger">*</span> </label>
                                                        <input type="number" class="form-control" id="Inas_Reporte" value="<?php echo $E_Reporte->Ina_Reporte ?>" name="Inas_Reporte">
                                                    </div>
                                                </div>
                                            
                                            <!-- input Tipo de Direccion Estado de Direccion -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="DescripcionFalta"> Asistencias : <span class="danger">*</span> </label>
                                                        <input type="number" class="form-control" id="Asis_Reporte" value="<?php echo $E_Reporte->Asi_Reporte ?>" name="Asis_Reporte">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <button name="ActReportes" type="submit" class="btn btn-success float-right">Actualizar</button>
                                    </form>

                                    <?php
                                     endforeach; }

                                     ?>