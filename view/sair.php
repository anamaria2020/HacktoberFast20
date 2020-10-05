<?php

    session_start();
    session_destroy();
    
    unset(
        $_SESSION['iduser'],
        $_SESSION['username'],
        $_SESSION['password'],
        $_SESSION['perfil']

    );


    /*-----redireciona para pagina principal------*/
    header("location: index.php");

?>


<?php require_once '../controler/init.php'; logout(); ?>