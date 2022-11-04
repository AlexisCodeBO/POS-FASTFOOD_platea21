<?php include('parciales/cabecera.php') ?>
<?php include('parciales/foot_cabecera.php') ?> 
    <?php include('parciales/menu.php'); 
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resrvas</title>
</head>

<link rel="stylesheet" type="text/css" href="css/estiloIndex3.css">
<script>
	function toggle_visibility(id){
		var e = document.getElementById(id);
		if(e.style.display=='block')
			e.style.display = 'none';
		else
			e.style.display = 'block';
		}
</script>

<body>

<div id="container">
<div id="header">
<table cellspacing="0" width="100%" border="0" cellpadding="20px">
<tr>
	<td width="56%">
    <table width="41%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <td width="80%" align="left"> <font size="12px" >R</font><span style="font-size: 18px ba: #FF0000;">erservas <b></b><b></b></span></td>
	    </tr>
	  </table></td>
    <td style="font-size:14px;">
      <table width="93%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          	<th scope="col"><?php
			include_once("date1.php"); //$Today = date('y:m:d',time());
			//$new = date('l, F d, Y', strtotime($Today));
			//echo $new;
			?></th>
          	<th scope="col" width="20px"><a href="logout.php">
            <input type="button" id="btnadd" value="Cerrar Sesión" align="middle" />
          	</a></th>
        </tr>
  </table></td>
    </tr>

</table>
</div>

<br><br><br><br><br>
<!-- Footer -->
<div id = "headnav"> 
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>

	<td width="669" height="62">
	<table width="124" border="0" align="left" cellpadding="0" cellspacing="0">
	  <tr>
	    <th width="211" scope="col"><a href="sales1.php">Reservas</a></th>
	    </tr>
	  </table>
      </td>
      
      <td width="13">
      <table border="0" cellspacing="0" cellpadding="0"
    >
      	<tr>
        	<td align="left" style="color:#00F923">
            <?php
			$date_time=date("h:i:sa");
			
			echo $date_time;
			?>
            </td>
        </tr>
      </table>
      </td>

</tr>
</table>
</div>
<br>
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td height="37" align="right">
  
    
    </table></th>
  </tr>
  
  <br>
  
  <tr>
    <td>
    <table border="0" cellpadding="0" cellspacing="0" align="center" width="80%" style="border:1px solid #033; color:#00FFFF;">
    
     <tr>
     <th colspan="7" align="center" height="55px" style="border-bottom:1px solid #030; background: #030; color:#FFF;"> Reservar Productos </th>
    </tr>
    
      <tr height="30px">
        <th style="border-bottom:1px solid #333;"> Categoria </th>
        <th style="border-bottom:1px solid #333;"> Nombre </th>
        <th style="border-bottom:1px solid #333;"> Precio </th>
        <th style="border-bottom:1px solid #333;"> Cantidad Stock </th>
        <th style="border-bottom:1px solid #333;"> Proveedor </th>
        <th style="border-bottom:1px solid #333;"> Hacer Reserva</th>
      </tr>
      
        <!-- Search goes here! -->
 

  
  		<!-- Search end here -->
      
       <?php
require('config.php');
$query="SELECT * FROM products";
$result=mysqli_query($db_link, $query);
while ($row=mysqli_fetch_array($result)){?>
      
      <tr align="center" style="height:35px">
      	<td style="border-bottom:1px solid #333;"> <?php echo $row['category']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['name']; ?> </td>
        <td style="border-bottom:1px solid #333;">$ <?php echo $row['retail']; ?> </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['quantity']; ?> pcs. </td>
        <td style="border-bottom:1px solid #333;"> <?php echo $row['supplier']; ?> </td>
        <td style="border-bottom:1px solid #333;">
        
        
        <a href="process_sales1.php?id=<?php echo md5($row['id']);?>"><input type="button" value="Reservar" style="width:90px; height:30px; color:#000000; background: #5AFF00; border:1px solid #930; border-radius:3px;"></a>
        
        </td>
      </tr>
   <?php
}?>
      
    </table>
    
  </td>
  </tr>
</table>
<br><br><br>
<div id="bdcontainer"></div>

<div id="footer">
<table border="0" cellpadding="15px" align="center"; style="size: 12px;  font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;" >
<tr>
	<td>
    &copy; 2015 All Rights Reserved.  |  Designed By:<a href="https://www.facebook.com/">Tienda marianne</a>	
    </td>
</tr>
</table>
</div>

</div>

</body>
</html>
