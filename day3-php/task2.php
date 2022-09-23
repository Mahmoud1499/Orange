<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myFile">
        <input type="submit">
    </form>
</body>

</html>

<?php
echo '<pre>';

var_dump($_FILES['myFile']);

echo '</pre>';
$name = 'Image-Number' . rand(0, 100);
$temp_name = $_FILES['myFile']['tmp_name'];
$arr_name = explode('.', $_FILES['myFile']['name']);
$extention = end($arr_name);
var_dump($extention);

move_uploaded_file($temp_name, "up\\$name.$extention");