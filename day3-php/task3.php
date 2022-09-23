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
        <input type="file" name="myFiles[]" multiple>
        <button>submit</button>
    </form>
</body>

</html>

<?php
echo '<pre>';
var_dump($_FILES['myFiles']);
echo '<pre/>';

$file_count = count($_FILES['myFiles']['name']);

for ($i = 0; $i < $file_count; $i++) {
    move_uploaded_file($_FILES['myFiles']['tmp_name'][$i], $_FILES['myFiles']['name'][$i]);
}