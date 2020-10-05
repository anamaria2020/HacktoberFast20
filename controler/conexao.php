<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "dmi3"; 


//criar conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


if(!$conn){
    die("Falha na Conexao: " . mysqli_connect_error());
}else{
//    echo "Conexao efectuada com sucesso";
}

?>

