<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion_bd.php");
	$sentencia="update cliente set appaterno='$appat', apmaterno='$apmat', direccionc='$direc', telefonoc='$tel', reservan='$reservan', pedido='$pedido' where id_cliente='$idc'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		//echo "Error de procesamiento no se han actualizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: clientes.php");
		
		echo "<script>location.href='clientes.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='clientes.php'</script>";

		
	}
?>