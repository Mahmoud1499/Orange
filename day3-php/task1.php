<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        background-color: #ffdcdc;
        width: 500px;
        margin: 0px auto;
        font-family: Arial, Helvetica, sans-serif;
        padding: 7px;
        border-radius: 5px;
        box-shadow: 4px 3px 13px -4px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 4px 3px 13px -4px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 4px 3px 13px -4px rgba(0, 0, 0, 0.75);
        font-family: monospace;
    }

    form h1 {
        margin: 7px;
        font-family: monospace;
    }

    form input {
        display: block;
    }

    form #fileupload {
        font-size: 17px;
        margin: 10px 145px;
    }

    input#file-upload-button {
        background-color: black;
    }

    form input:last-child {
        margin: 20px auto 5px;
        padding: 3px 3px;
        background-color: rgb(77, 77, 77);
        color: #fff;
        border-radius: 2px;
        border: 1px solid rgb(77, 77, 77);
        cursor: pointer;
    }
    </style>
</head>

<body>
    <form action="" method='post' enctype="multipart/form-data">

        <input type="file" name="images[]" multiple="multiple" />
        <input type="submit" value="upload">

    </form>
</body>

</html>


<?php

echo '<pre>';
print_r($_FILES['images']);
echo '<pre/>';

$img_name = $_FILES['images']['name'];
$img_temp = $_FILES['images']['tmp_name'];


// echo $_SERVER['DOCUMENT_ROOT'];

$file_count = count($img_name);
for ($i = 0; $i < $file_count; $i++) {
    // echo $img_name[$i] . '<br/>';
    move_uploaded_file($img_temp[$i], $_SERVER['DOCUMENT_ROOT'] . '\orange\day3-php\up\\' . $img_name[$i]);
}