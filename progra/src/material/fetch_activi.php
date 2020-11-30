<?php

  include_once "bd/conexion.php";

  if (isset($_POST["BTNActualizar"])) {
      $sql = $conexion->query("SELECT * FROM `Actividades` WHERE `Cod_Actividad` = ".$_POST["BTNActualizar"])->fetchAll(PDO::FETCH_OBJ);

      foreach($sql as $activi) : 
        if ($activi->Cod_Categoria == '1') {
           
            $categoria = "<option selected value='1'>Deportiva</option>
                          <option value='2'>Social</option>
                          <option value='3'>Cultural</option>
                          <option value='4'>Academica</option>";
        } elseif ($activi->Cod_Categoria == '2') {
             $categoria = "<option value='1'>Deportiva</option>
                           <option selected value='2'>Social</option>
                           <option value='3'>Cultural</option>
                           <option value='4'>Academica</option>";
       }elseif ($activi->Cod_Categoria == '3') {
                    $categoria = "<option value='1'>Deportiva</option>
                     <option  value='2'>Social</option>
                     <option selected value='3'>Cultural</option>
                     <option value='4'>Academica</option>";
       }elseif ($activi->Cod_Categoria == '4')  {
        $categoria = "<option value='1'>Deportiva</option>
                      <option  value='2'>Social</option>
                      <option value='3'>Cultural</option>
                     <option selected value='4'>Academica</option>";

       }
       if ($activi->Per_Actividad == 'I') {
           $periodo = "<option selected value='1'>I Periodo</option>
                       <option value='2'>II Periodo</option>
                       <option value='3'>III Periodo</option>";
       }elseif ($activi->Per_Actividad == 'II') {
            $periodo = "<option value='1'>I Periodo</option>
                        <option selected value='2'>II Periodo</option>
                        <option value='3'>III Periodo</option>";

       }elseif ($activi->Per_Actividad == 'III') {
            $periodo = "<option value='1'>I Periodo</option>
                        <option value='2'>II Periodo</option>
                        <option selected value='3'>III Periodo</option>";

       }



   
?>  

<form action="bd/update_activi.php" method="POST" class="">
  <section>
    <div class="row">
      <!-- input Nombre -->
      <div class="col-md-12">
        <div class="form-group">
          <input type="text" class="form-control" id="Codigo_Activi" name="Codigo_Activi" value="<?php echo $activi->Cod_Actividad ?>" required hidden>
          <label for="NombreActUda"> Nombre Actividad : <span class="danger">*</span> </label>
          <input type="text" class="form-control" id="NombreActUda" name="NombreActUda" value="<?php echo $activi->Nom_Actividad ?>" required>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- input dirección -->
      <div class="col-md-12">
        <div class="form-group">
          <label for="DescripccionActUda"> Descripcción de la Actividad : <span class="danger">*</span> </label>
          <textarea class="form-control" name="DescripccionActUda" id="DescripccionActUda" cols="30" rows="3"  required><?php echo $activi->Des_Actividad ?></textarea>
        </div>
     </div>
   </div>
   <div class="row">
     <!-- input Estado de Direccion -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="TipoActUda"> Tipo de Actividad : <span class="danger">*</span> </label>
                            <select class="form-control" id="TipoActUda" name="TipoActUda" required>
                              <?php echo $categoria ?>
                              
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="HorasActUda"> Cantidad de Horas VOAE : <span class="danger">*</span> </label>
                            <input type="number" class="form-control" name="HorasActUda" id="HorasActUda" value="<?php echo $activi->Can_Horas ?>" required min="1">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <!-- input Estado de Direccion -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="FechaActUda"> Fecha: <span class="danger">*</span> </label>
                            <input type="date" class="form-control" name="FechaActUda" id="FechaActUda" value="<?php echo $activi->Fec_Actividad ?>" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="PeriodoActUda"> Periodo : <span class="danger">*</span> </label>
                            <select class="form-control" id="PeriodoActUda" name="PeriodoActUda" required>
                              <?php echo $periodo ?>
                            </select>
                          </div>
                        </div>
                      </div>                    
  </section>
  <button type="submit" class="btn btn-success float-right" name="Actualir_Ac">Actualizar</button>
</form>

<?php    

   endforeach;  

  }


?>

