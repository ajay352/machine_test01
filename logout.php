<?php
session_start();
$_SESSION=array();
session_destroy();
header("Location:./employ_authentication/login.php");
exit();
?>