<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CatAlogo</title>
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estiloIndexTur.css">
		
	
    <style type="text/css">
<!--
.Estilo5 {font-family: Rockwell}
.Estilo7 {
	font-size: 36px;
	font-family: Rockwell;
}
-->
    </style>
    <header class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="btn-group pull-right">
          <a class="btn btn-primary active" href="agregarcliente.php" role="button">Agregar</a>
          <a class="btn btn-primary" href='blue-login-box-html/index.html' role="button">Acerca de</a>
        </div>
      </div>  
    </header>
</head>
<body background="images/fondo3.jpg">
<p align="left"><img src="imagenes/logo.png" width="336" height="173"><span class="Estilo7">Sección Clientes </span><img src="micuenta.jpg" alt="f" width="39" height="32">  Hola, <strong><?php echo $_SESSION['usuario'];?></strong> </p>
<p align="left"><a href="#"></a> </p>
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar por ap.pat.</button>
      </span>
      <input name="buscar" type="text" class="form-control" id="buscar" placeholder="Search for...">
	  
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
 
        <br>
        <h2 class="text-center"> Clientes Reservas</h2>    
        <div class="container">
        <hr class="soft"/>
        

 <?php 
    require('conexion_bd.php');
    $sql=("SELECT * FROM cliente");

    $query=mysqli_query($mysqli, $sql);

    
    echo "<table border='1'; class='table table-hover';>";
    echo "<tr class='warning'>";
    echo "<td>Id cliente</td>";
    echo "<td>Apellido Paterno</td>";
    echo "<td>Apellido Materno</td>";
    echo "<td>Dirección</td>";
    echo "<td>Teléfono</td>";
    echo "<td>Reservan</td>";
    echo "<td>Pedido</td>";
    echo "<td>Editar</td>";
    echo "<td>Borrar</td>";
        
    ?>
    <?php  
    while($arreglo=mysqli_fetch_array($query)){
        echo "<tr class='success'>";
        echo "<td>$arreglo[0]</td>";
        echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[2]</td>";
        echo "<td>$arreglo[3]</td>";
        echo "<td>$arreglo[4]</td>";
        echo "<td>$arreglo[5]</td>";
        echo "<td>$arreglo[6]</td>";

        

        echo "<td><a href='actualizarcliente.php?idc=$arreglo[0]'><img src='images/actualizar.gif' 
        class='img-rounded'></td>";
        echo "<td><a href='clientes.php?idc=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";


        echo "</tr>";
        
    }
        echo "</table>";
          
          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM cliente WHERE id_cliente=$idc";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("REGISTRO ELIMINADO")</script> ';
            //header('Location: proyectos.php');
            echo "<script>location.href='clientes.php'</script>";
          }
    ?>
         </div>
<p>&nbsp;</p>
<p class="Estilo5">Tienda Marianne, 2017. </p>
</body>
</html>