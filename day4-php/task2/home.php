<?php
session_start();


var_dump($_COOKIE);
echo '<br>';

if ($_COOKIE['login'] == false) {
    header('location: login.html');
} else if ($_COOKIE['login'] == true) {

    echo 'Welcome';
}

// var_dump($_POST);


?>
<a href="logout.php">Logout</a>