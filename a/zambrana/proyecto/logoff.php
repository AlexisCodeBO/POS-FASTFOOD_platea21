<?php
include ("seguridad.php");
session_destroy();
session_unset();
header('Location: http://localhost/proyecto/index.php');
?>