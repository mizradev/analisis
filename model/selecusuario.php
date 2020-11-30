<?php


     require_once 'conexion.php' ;

     session_start();
     if (!empty($_SESSION['active'] )) //si existe esta sesion 
     {
     $rip=$_SESSION['Cod_Usuarios'];

        $dari=mysqli_query($conexion,"SELECT Usuarios.Cod_Usuario, Rel_EstUsr.Cod_Rel_EstUsr, Rel_EstUsr.Cod_Usuario, Rel_EstUsr.Cod_Estudiante, Estudiantes.Cod_Estudiante
        FROM Usuarios JOIN Rel_EstUsr
        ON Usuarios.Cod_Usuario = Rel_EstUsr.Cod_Usuario
        JOIN Estudiantes
        ON Rel_EstUsr.Cod_Estudiante=Estudiantes.Cod_Estudiante
        
        WHERE (Usuarios.Cod_Usuario ='$rip')  AND (Rel_EstUsr.Cod_Estudiante=Estudiantes.Cod_Estudiante)
        AND(Usuarios.Cod_Usuario=Rel_EstUsr.Cod_Usuario)

        ");
      

      $data = array($dari);
      
  
      
       
        }

      ?>

      

<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>

</head>

<body>
<ul class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item active">Informatica Adminitrativa Administrador</li>
 <li  ><a >Hola  ADMINISTRADOR <?php  echo $data['Cod_estudiante']; ?></a>  </li>
          </ul>



</body>

</html>
