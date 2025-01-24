<?php
session_start();

$_SESSION = [];
session_unset();
session_destroy();

setcookie('i', '', time());
setcookie('j', '', time());

header('location: login.php');
exit;


?>