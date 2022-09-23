<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sign in Page</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">name:</label>
        <input id="name" type="text" name="name" />
        <label for="username">username:</label>
        <input id="username" type="text" name="username" />
        <label for="password">Password:</label>
        <input id="password" type="password" name="password" />
        <button type="submit">submit</button>
    </form>
</body>

</html>


<?php
$connect = mysqli_connect("localhost", "root", "", "orange");
var_dump($connect);

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

var_dump($_POST);

mysqli_query(
    $connect,
    "INSERT INTO 
            `users`(`name`, `username`, `Password`) 
            VALUES('$name' ,'$username' ,'$password ');"
);

// INSERT INTO `users` (`name`, `username`, `Password`) VALUES ('ggg', 'ggggg', 'gggggg');