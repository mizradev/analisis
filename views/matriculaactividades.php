<?php 
    
    error_reporting(0);
    require_once '../controllers/private.php';
    require_once '../model/generales.php';
    require_once '../model/consultaacti.php';
    require_once '../Model/consultahistorial.php';
    require_once '../Model/insertactividadd.php';
    require_once '../model/consultaestudiante.php';
    

?>

<?php 

	
	include "../model/conexion.php";

	if(!empty($_POST))
	{
		$alert='';
        if(empty($_POST['Codigo']) || empty($_POST['Estudiante']) ) 
		{
			$alert='<p class="msg_error"><h4>EL CAMPO CODIGO DE ACTIVIDAD ES OBLIGATORIO</h4></p>';
		}else{



      $cole = $_POST['Codigo'];
      $estu= $_POST['Estudiante'];

      $query = mysqli_query($conexion,"SELECT Usuarios.Cod_Usuario, Usuarios.Nom_Usuario, Rel_EstUsr.Cod_Usuario, Rel_EstUsr.Cod_Estudiante,
      Estudiantes.Cod_Estudiante, Rel_EstMat.Cod_Estudiante, Rel_EstMat.Cod_Matricula,
      Matriculas.Cod_Matricula, Matriculas.Cod_Actividad, Matriculas.matriculado
         FROM Usuarios  JOIN Rel_EstUsr    ON Usuarios.Cod_Usuario=Rel_EstUsr.Cod_Usuario
            JOIN  Estudiantes   ON Rel_EstUsr.Cod_Estudiante=Estudiantes.Cod_Estudiante
            JOIN Rel_EstMat   ON Estudiantes.Cod_Estudiante=Rel_EstMat.Cod_Estudiante
            JOIN Matriculas  ON Rel_EstMat.Cod_Matricula= Matriculas.Cod_Matricula
            
            WHERE  '$cole'= Cod_Actividad AND Nom_Usuario='$r'
            ");
			$result = mysqli_fetch_array($query);

		if($result > 0){
				$alert='<p class="msg_error"><h4> La Actividad ya ha sido Matriculada.</h4></p>';
			}else{


        $queryA = mysqli_query($conexion,"SELECT * FROM Actividades WHERE  '$cole' = Cod_Actividad  ");
        $resultA = mysqli_fetch_array($queryA);
  
      if($resultA <= 0){

					        $alert='<p class="msg_save"><h4>Esta actividad no Existe.</h4></p>';
				
				     }else{
                 
              $query_insert = mysqli_query($conexion," CALL Sp_Ins_Matricula ('$cole','root','$estu')");
              
              if($query_insert){
                  $alert='<p class="msg_save" href=><h4>MATRICULA EXITOSA!!</h4></p>';
              }else{
                  $alert='<p class="msg_error"><h4>ERROR EN LA MATRICULA.</h4></p>';


            
              }
                
          }
     }
    }
  }
  /*$query_insert = mysqli_query($conexion,"INSERT INTO Matriculas (Cod_Actividad, Fec_Registro, matriculado) 
              VALUES('$cole',NOW(),'$cole')");
              
              $query_insert = mysqli_query($conexion,"INSERT INTO Matriculas (Cod_Actividad, Fec_Registro, matriculado) 
              VALUES('$cole',NOW(),'cole')");
              */

 ?>




<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
 <?php include "partes/head.php"; ?>
</head>

<body>

  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>

  <div id="main-wrapper">
  
    
    <?php
    include "partes/menu-superior.php";
    ?>
   
    <!-- ========================================= -->

    <?php
    include "partes/menu-izquierdo.php";
    ?>
    <!-- ========================================== -->

    <div class="page-wrapper">

      <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
          <h3 class="text-themecolor mb-0" >Matricula</h3>
          <ul class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item active">Informatica Adminitrativa</li>
            <li class="breadcrumb-item" ><a >Listo para Matricular una actividad || <?php echo $_SESSION['Nombre']?></a>  </li>
          </ul>
        </div>
      </div>
      
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
      <div class="container-fluid">
             <div class="card card-body">
                        <h2 class="text">Matricula de Actividades</h5>
                            <!-- Paginador -->
                            <div class="container-fluid"> 
                          <section id="container"><div class="form_register">
                                            
                          <form action="" method="POST">  
                                  <label for="nombre" class="text-center">Su codigo de estudiante es: </label>
                                  <input type="text " style="width : 20px; size : 10px; border: 0;" 
                                  readonly="readonly" name="Estudiante" id="Estudiante"  
                                  value="<?php foreach ($Egeneral as $row){ echo $row['Cod_Estudiante'];}?>">

                                  <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                                  <div class="col-md-12 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                                    <label for="nombre" class="text-center">
                                      <h4>Matricular Actividad: </h4></label>
                                    <input type="number" min="0" name="Codigo" id="Codigo" placeholder="Codigo de actividad">
                                    <button type="submit" style="width : 170px; size : 2px; border: 0;" class="btn btn-info">
                                    <i class="fas fa-user-plus"></i>
                                     Crear Matricula
                                    </button>
                                  </div>
                            </div>
                				             <!--<input type="submit"   value="Crear usuario" class="btn_save btn-dark-info ">-->
                          </select>

                            <!-- end Paginador -->
                          </div>

                      </form>
                 </div>
              


                    <div class="card card-body">
                        <h5 class="">Actividades Disponibles</h5>
                      <form action="" method="POST">
                         <div class="table-responsive">
                            <table class="scroll-sidebar table table-striped search-table v-middle">
                                <thead class="header-item"> 
                                    <th class="text-dark text-center font-weight-bold ">Codigo Actividad</th>
                                    <th class="text-dark font-weight-bold ">Nombre de Actividad</th>
                                    <th class="text-dark text-center font-weight-bold">Cantidad de Horas VOAE</th>
                                    <th class="text-dark text-center font-weight-bold">Descripcion de la Actividad</th>
                                    <th class="text-dark text-center font-weight-bold">categoria</th>
                                    <th class="text-dark text-center font-weight-bold">fecha</th>
                                </thead>
                                <tbody id="datos">
                                    <?php foreach ($Danelia as $row) { ?>  
                                <tr>

                                    <td class="text-center"><span class=""><?php echo $row['Cod_Actividad']; ?> </span>   </td>    
                                    <td class="text-center"><span class=""><?php echo $row['Nom_Actividad']; ?> </span>   </td>
                                    <td class="text-center"><span class=""><?php echo $row['Can_Horas']; ?> </span></td>
                                    <td class="text-center"><span class=""><?php echo $row['Des_Actividad']; ?>  </span>  </td>
                                    <td class="text-center"><span class=""><?php echo $row['Categoria']; ?>  </span>  </td>
                                    <td class="text-center"><span class=""><?php echo $row['Fec_Actividad']; ?>  </span>  </td>
                                   
                                    <td class="text-center">
                                        <div class="action-btn">
                                        
                                   
                                       
                                        </div>
                                    </td>
                                </tr>
                                <?php  }  ?> 
                                    <!-- /.row -->
                                </tbody>
                            </table>
                            <!-- Paginador -->

                            <!-- end Paginador -->
                        </div>
                        </form>
                    </div>
                     <!-- FIN  Tabla Personas informacion que muestra-->
            </div>
      <footer class="footer text-center">
        <span>© 2020 VOAE |
          <a href="https://www.unah.edu.hn/">Universidad Nacional Autonoma de Honduas.<i class=""></i></a></span>
      </footer>

    </div>

  </div>

  <!-- ============================================ -->
  <?php
  include "partes/panel.php"
  ?>
  <!-- ============================================ -->
  <!-- All Jquery -->
  <!-- ============================================ -->
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- apps -->
  <script src="dist/js/app.min.js"></script>
  <script src="dist/js/app.init.js"></script>
  <script src="dist/js/app-style-switcher.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <!--Wave Effects -->
  <script src="dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="dist/js/custom.min.js"></script>

</body>

</html>