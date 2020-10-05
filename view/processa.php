<?php

include_once("../controler/init.php");

//$id = mysqli_real_escape_string($_POST['id']);
$nome = mysqli_real_escape_string($_POST['titulo']);
$detalhes = mysqli_real_escape_string($_POST['status']);

echo "$nome - $detalhes";

?>