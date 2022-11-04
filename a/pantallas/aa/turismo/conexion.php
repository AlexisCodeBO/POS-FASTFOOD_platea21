<?php
define('DB_HOST','localhost');
define('DB_NAME','turismo');
define('DB_USER','root');
define('DB_PASS','');

try {
	$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
	echo "EXITO";
} catch (Exception $e) {
	echo "ERROR!!!!: ".$e->getMessage();
}

?>