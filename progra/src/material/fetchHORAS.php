<?php
  include_once "bd/conexion.php";
 
  if (isset($_POST["BtnActualizar"])) {
      $Editar_Hrs = $conexion->query("SELECT * FROM `HHVOAES` WHERE `Cod_Hhvoae` = ".$_POST["BtnActualizar"] )->fetchAll(PDO::FETCH_OBJ);
      
      foreach($Editar_Hrs as $E_Hrs) :

    

?>

<form action="bd/updateHoras.php" method = "POST" class="">
   <div class="row mb-3">
        <div class="col-md-12">
            <div class="contact-phone">
                <input type="text" class="form-control" id="Codigo_Horas" name="Codigo_Horas" value="<?php echo $E_Hrs->Cod_Hhvoae ?>" required hidden>
                <label for="HrsRea">Horas Realizadas:</label>          
                <input type="number" id="Hrs_Realizadas" class="form-control required" name="HrsRealizadas" required min="0" max="50">
            </div>
        </div>
  </div>

 
     <button type="submit" class="btn btn-success float-right" name="ActualiHoras" >Actualizar</button>


</form>

<?php 
   endforeach;
   }
 ?>


