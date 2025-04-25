<?php
session_start();

$_SESSION = [];
session_unset();
session_destroy();

setcookie('key', '', time());
setcookie('name', '', time());

header('location: login.php');
exit;
?>
