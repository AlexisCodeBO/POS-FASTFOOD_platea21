
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("conexion_bd.php");

	$username=$_POST['username'];
	$pass=$_POST['password'];


	//la variable  $mysqli viene de conexion_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM empleado WHERE usuario='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['contrasena']){
			$_SESSION['ide_empleado']=$f2['ide_empleado'];
			$_SESSION['usuario']=$f2['usuario'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM empleado WHERE usuario='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['contrasena']){
			$_SESSION['id_empleado']=$f['id_empleado'];
			$_SESSION['usuario']=$f['usuario'];
			$_SESSION['rol']=$f2['rol'];

			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE..., POR FAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>