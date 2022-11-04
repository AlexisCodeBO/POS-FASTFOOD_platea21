<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Acceso al Sistema POS - </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="fonts.css">


<link rel="stylesheet" type="text/css" href="css/css1.css">

<script>
	function toggle_visibility(id){
		var e = document.getElementById(id);
		if(e.style.display=='block')
			e.style.display = 'none';
		else
			e.style.display = 'block';
		}
</script>

</head>

<?php
session_start();
if(isset($_POST['username'])){
	header('localhost:index.php');
	}

?>

<body style=" background:url(cap/fondoo.jpg) no-repeat center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">


<div id = "container">
<!-- Header -->
<div id = "header">

    <table border="0" cellspacing="10px" width="100%" cellpadding="5px">
    <tr>
    	<td width="80%" align="left"> <font size="12px">B</font><span style="font-size: 18px;">outique </span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:36px">Marianne</span></td>
        <td width="10%">&nbsp;   </td>
        <td width="10%" align="right"><a href="javascript:void(0)" onclick="toggle_visibility('popup-box1')"><input type="button" id="btnadd" value="Ingresar"></a></td>
        <td width="0%">&nbsp;  </td>

    </tr>
    </table>
</div>
<!-- Content -->
<div id = "content_area">
<br>
<p>
<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="cap/211.jpg">
  </p>
</div>

<!-- Footer -->

<hr>
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
				<div class="thumbnail">
					<img data-src="holder.js/800x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="cap/fondo.jpg">
					<div class="caption">
						<h3>MISIÓN</h3>
						<p>
							Somos una empresa comprometida a ofrecer a sus clientes los productos de la mayor calidad a los mejores precios mediante un servicio personalizado a cada uno de nuestros clientes..

							</p>
						
					</div>
				</div>			
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
				<div class="thumbnail">
		<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="cap/vision.jpg">
					<div class="caption">
						<h3>VISIÓN</h3>
						<p>
							Tenemos líderes en cada uno de nuestros puestos para la plena satisfacción de nuestros clientes. Somos una empresa enfocada al servicio, por lo que innovamos constantemente para exceder los estándares establecidos. Nuestra visión es a largo plazo, ya que la relación con nuestros clientes no termina con la venta de productos de quitación.
						</p>
						
					</div>
				</div>			
			</div>
		</section>

<div id = "footer"> 
<table border="0" cellpadding="15px" align="center"; style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
<tr>
	<td>
    &copy; 2017  |  BOUTIQUE MARIANNE<a href="https://www.facebook.com">BOLOGNIASSSS</a>	
    </td>
</tr>
</table>
 </div>

<div id="popup-box1" class="popup-position">
<div id="popup-wrapper">
<div id="popup-container">
<div id="popup-head-color3">
    <p style="text-align:right !important; font-family: 'Courier New', Courier, monospace;font-size:15px;"><a href= "javascript:void(0)" onclick="toggle_visibility('popup-box1')"><font color="#FFF"> X </font></a></p>
    <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;"> Formulario Iniciar Sesión </p>
    </div>
<br><br><br><br>

<form action="login_process.php" method="POST">
<table border="0" align="center">
<tr>
<td>Nombre de Usuario:</td>
<td align="center"><input type="text" id="txtbox" name="username" placeholder="Usuario" required><br></td>
</tr>

<tr>
<td>Contraseña:</td>
<td align="center"><input type="password" id="txtbox" name="password" placeholder="contraseña" required><br></td>
</tr>

<tr>
	<td> &nbsp; </td>
</tr>

<tr>
	<td> &nbsp; </td>
	<td  align="left"><input type="SUBMIT" id="btnnav" value="Iniciar Sesión"></td>
</tr>


</table>
</form>


</div>
</div>
</div>



</div>

</body>
</html>
