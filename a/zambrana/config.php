<?php 
$username="root";
$password="";
$host="localhost";
$database="dbpos";
$db_link=mysqli_connect($host,$username,$password,$database)or die("ERROR".mysqli_error($db_link));
if (mysqli_connect_error()){
	echo "Could not connect to MySql. Please try again";
	exit();
}
// Para hacer consultas a equitación, usar este $db_link_equitacion en vez del db_link;
$db_link_equitacion=mysqli_connect($host,$username,$password,'equitacion')or die("ERROR".mysqli_error($db_link));
if (mysqli_connect_error()){
	echo "Could not connect to MySql. Please try again";
	exit();
}
?>
