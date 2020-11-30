<?php
include_once "bd/conexion.php";

if (isset($_POST["editar"])) {
    $Editar_Faltas = $conexion->query("SELECT * FROM `Faltas` WHERE `Cod_Falta` = ".$_POST["editar"] )->fetchAll(PDO::FETCH_OBJ);
    foreach($Editar_Faltas as $E_Faltas) :
        if ($E_Faltas->Tip_Falta == "L") {
            $Tipos_Faltas = "<option value='L'selected >Leve</option>
                    <option value='M'>Moderada</option>
                    <option value='G'>Grave</option>";
        }
        elseif($E_Faltas->Tip_Falta == "M") {
            $Tipos_Faltas = "<option value='L' >Leve</option>
                    <option value='M'selected>Moderada</option>
                    <option value='G'>Grave</option>"; 
        }
        elseif ($E_Faltas->Tip_Falta == "G") {
            $Tipos_Faltas = "<option value='L' >Leve</option>
                    <option value='M'>Moderada</option>
                    <option value='G'selected>Grave</option>";  
        }


?>
                                            <form action="bd/update.php" method = "POST" class="">
                                        <section>
                                            <!-- input dirección -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                    <input type="text" class="form-control" id="Cod_Falta" value="<?php echo $E_Faltas->Cod_Falta ?>" name="Cod_Falta" hidden>
                                                        <label for="TipoFaltaUda"> Tipo de Falta : <span class="danger">*</span> </label>
                                                        <select class="form-control" id="TipoFaltaUda" name="TipoFaltaUda" required>
                                                            <?php

                                                            echo $Tipos_Faltas;

                                                            ?>
                                                           
                                                        </select>
                                                        <?php

                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- input Tipo de Direccion Estado de Direccion -->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="DescripcionFaltaUda"> Descripción : <span class="danger">*</span> </label>
                                                        <textarea class="form-control" name="DescripcionFaltaUda" id="DescripcionFaltaUda" cols="30" rows="3" required> <?php echo $E_Faltas->Des_Falta?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <button name="ActFaltas" type="submit" class="btn btn-success float-right">Actualizar</button>
                                    </form>
                                    <?php
                                     endforeach; }


                                    ?>  