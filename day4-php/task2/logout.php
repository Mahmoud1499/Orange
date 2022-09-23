<?php

if ($_COOKIE['login'] == false) {
    header('location: login.html');
} else if ($_COOKIE['login'] == true) {
    setcookie('login', true, time() - (86400 * 30));

    header('location: login.html');
}