<?php

session_start();

var_dump($_POST);

// dataBase info
$emaildb = 'mahmoudmahmed1499@gmail.com';
$passdb = 123;

$email = $_POST['email'];
$pass = $_POST['password'];


if ($email == $emaildb && $pass == $passdb) {
    setcookie('login', true, time() + (86400 * 30));
    header("location: home.php");
} else {
    header("location: login.html");
}