<?php
session_start();

if(empty($_SESSION['login']) === true) {
    header('location: login.php');
}

$_SESSION = [];
session_unset();
session_destroy();

header('location: login.php');
exit;
?>
