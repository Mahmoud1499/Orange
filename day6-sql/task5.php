<?php

$connect = mysqli_connect("localhost", "root", "", "orange");
// var_dump($connect);

$query = mysqli_query(
    $connect,
    "SELECT * FROM `users`"
);

$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

echo '<pre>';
// print_r($data);
echo '<pre/>';

foreach ($data as $d) {
    // print_r($d);
    echo "ID : " . $d['id'] . '<br>';
    echo "NAME : " . $d['name'] . '<br>';
    echo "USERNAME : " . $d['username'] . '<br>';
    echo '<hr>';
}