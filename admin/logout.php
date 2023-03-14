<?php 
session_name("GamerZone");
session_start();
session_destroy();
header('Location: ../inicio.php');
exit;

?>