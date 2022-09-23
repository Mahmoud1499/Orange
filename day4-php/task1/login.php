<?php

session_start();

var_dump($_POST);

// dataBase info
$emaildb = 'mahmoudmahmed1499@gmail.com';
$passdb = 1231999;

$email = $_POST['email'];
$pass = $_POST['password'];

if ($email == $emaildb && $pass == $passdb) {
    $_SESSION['login'] = true;
    header("location: home.php");
} else {
    header("location: login.html");
}
