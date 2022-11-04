<?php

	$realname=$_POST['realname'];
	$appat=$_POST['appat'];
	$apmat=$_POST['apmat'];
	$nick=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	

	require("conexion_bd.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	
	$checkemail=mysqli_query($mysqli,"SELECT * FROM empleado WHERE usuario='$realname'" );
	$check_mail=mysqli_num_rows($checkemail);
	
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atención, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else {

				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO empleado (usuario, apellido_pat, apellido_mat, correo, contrasena) VALUES('$realname','$appat','$apmat', '$nick','$pass')");
				//echo 'Se ha registrado con exito';
				 echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
			
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>