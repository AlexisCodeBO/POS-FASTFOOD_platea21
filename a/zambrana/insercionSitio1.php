<?php
	include('Sitio1.php');
	/*echo $_POST['nombre']; 
	echo $_POST['descripcion'];
	echo $_FILES['foto']['name'];*/
	$dir = 'img/'.$_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'],$dir);
	$sitio1 = new Sitio1($_POST['nombre'],$_POST['descripcion'],$dir);
	echo $sitio1->insertar();
?>