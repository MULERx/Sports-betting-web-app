<?php
session_start();

$_SESSION = array();
 
session_destroy();
 
header("location: ../Admin_login.php");
exit;
?>