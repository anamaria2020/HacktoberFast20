<?php

//var_dump($_FILES);

$tmp_file = $_FILES['image']['tmp_name'];
$filename = $_FILES['image']['name'];


//var_dump($tmp_file);
//var_dump($filename);

move_uploaded_file($tmp_file, 'upload_folder/' . $filename);


?>