<?php
                 //<--!include_once "../views/Login.php"; si no lo ocupo borrar

    require_once 'model/conexion.php'; //conexion a la base de datos
	
	$alert = '';
session_start();
  
 

if (!empty($_SESSION['active'] )) //si existe esta sesion 

{
       
  header('location: views/estudiantes.php');
  
}else{ 

	if (!empty($_POST)) 
	{           //echo $alert="Ha dado click en ingresar muy bien"; sirve para hacer una prueba de que va bien hasta este punto
		if(empty($_POST['username']) || empty($_POST['password'] )) // lo que estoy diceindo es que si etan vacios los campos de usuario y contraseña
	    {
	      echo $alert = 'Ingrese su Usuario y Contraseña para poder ingresar al sistema'; // si los campos estn vacion le pido que ingrese los campos
    } else{                    // de lo contrario, osea si no estan vacios los dejamos pasar par hacer las validaciones correspondientes            
     
     
     
      require_once 'model/conexion.php';
     //  $username = $_POST['username'];
       //$password = $_POST['password'];

       ///esta de abajo eta incriptada pero no me deja ingresar a la base
          $username = $_POST['username']; //mysqli_real_escape_string()  esta funcion evita caracteres raros tanto en el usuario como n la clave
          $password = md5($_POST['password']); // y lo pongo todo en md5
            //echo $password;exit;//para ver la contraseña incriptada

		   $query = mysqli_query($conexion,"SELECT * FROM Usuarios WHERE Nom_Usuario= '$username' AND Pas_Usuario= '$password'"); // seleciono toda la fila de la tabla usuario donde el usuario el campo usuario sea igual al a la variable definida arriba $username y el codigo de la contraseña es la misma explicacion
		   $result = mysqli_num_rows($query);

           if($result> 0)  // cuanod haya encontrado la clave
           {
              $data = mysqli_fetch_array($query);
                         //  print_r($data);  // (esto solo es para probar) // hasta este punto todo bien }}}.
              
              $_SESSION['active']       = true;
              $_SESSION['Cod_Usuarios']  = $data['Cod_Ususario'];  
              $_SESSION['Nombre']  = $data['Nom_Usuario']; 
              $_SESSION['Rol']      = $data['Tip_Rol']; 
              //$_SESSION['Estado_Usuario']  = $data['Ind_Usuario'];
              //$_SESSION['Fecha_Registro'] = $data['Fec_Registro'];  
              //$_SESSION['Usuario_Registro'] = $data['Usr_Registro']; 

 

              header('location: views/estudiantes.php');
            }else{
                
				 $alert = 'Usuario o Clave incorrecto';
				 session_destroy();
                           

            }
        }
	}
}	

	
?>