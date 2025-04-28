<?php
session_start();

if(empty($_SESSION['login']) === true) {
    header('location: login.php');
}

$_SESSION = [];
session_unset();
session_destroy();

setcookie('key', '', time());
setcookie('name', '', time());

header('location: login.php');
exit;
?>
