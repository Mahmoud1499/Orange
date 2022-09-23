<?php

$con = new mysqli('localhost', 'root', '', 'orange');

// $query = $con->query('SELECT * FROM users;');
// $data = $query->fetch_all(MYSQLI_ASSOC);

echo '<pre>';
// print_r($data);
echo '</pre>';

$query = $con->query("INSERT INTO users(`name`,`username`) VALUES ('bbb','bbb');");
$res = $con->affected_rows;
// echo $res . '<br/>';