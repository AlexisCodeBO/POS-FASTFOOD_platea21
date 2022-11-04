<?php
	include('Promocion.php');
	$prom = new Promocion($_POST['temporada'],$_POST['porcentaje'],$_POST['id']);

  var_dump($prom);
	//echo $prom->actualizar();
?>