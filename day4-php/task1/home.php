<?php
session_start();

if ($_SESSION['login'] == false) {
    header('location: login.html');
}

// var_dump($_POST);
echo 'Welcome ';
?>
<a href="logout.php">Logout</a>