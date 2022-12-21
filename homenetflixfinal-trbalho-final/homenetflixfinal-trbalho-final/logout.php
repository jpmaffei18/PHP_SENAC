<?php 

session_start();
unset($_SESSION['nomedasessao']);
header('location: index.php');
exit();

?>