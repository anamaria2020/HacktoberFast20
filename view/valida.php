<?php

session_start();


include_once("../controler/init.php");

/*se for != de vazio entao o usr entra na tela inicial caso contario retorna mensagem de erro**/
/*mysqli_real_escape_string --- escapar de caracteres especiais como aspas prevenondo SQL injection*/
if((isset($_POST['username'])) && (isset($_POST['password']))){
    $usuario = mysqli_real_escape_string($conn, $_POST['username']);
    $senha = mysqli_real_escape_string($conn, $_POST['password']);
    
    
    /*criptografar senha*/
//    $senha = md5($senha);
    
    
    /********informacao do banco de dados----------*******/
    
    $sql =  " select * from user where username = '$usuario' && password = '$senha'";
    $result = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_assoc($result);
        
    /********informacao do banco de dados----------*******/
    
    
    if(empty($resultado)){
        $_SESSION['loginErro'] = "User ou senha invalida";
        header("location: index.php");
    }elseif(!empty($resultado)){
        
        
        $_SESSION['iduser'] = $resultado['id'];
        $_SESSION['username'] = $resultado['username'];
        $_SESSION['password'] = $resultado['password'];
        $_SESSION['perfil'] = $resultado['perfil'];
       
       

		$idE=0;
        if($_SESSION['perfil'] == "director"){
            
           header("location: diretor.php"); 
            
        }elseif($_SESSION['perfil'] == "estudante"){
            
            $idE = $resultado['id'];    
        $sql2 =  " select id, nome from Estudante where user_id = '$idE'";
        $result2 = mysqli_query($conn, $sql2);
        $resultado2 = mysqli_fetch_assoc($result2);
        
        $_SESSION['nome'] = $resultado2['nome'];
		$_SESSION['iduser'] = $resultado['id'];

        header("location: estudante.php");
           
			
			/*-------------------------------*/
		$ds = $resultado2['id'];
		
		$e = "select * from supervisao where estudante_id = '$ds'";
		$rds = mysqli_query($conn, $e);
		$rds2 = mysqli_fetch_assoc($rds);
		
		$_SESSION['id'] = $rds2['estudante_id'];
			
			
			/*-------------------------------*/
        
            
        }elseif($_SESSION['perfil'] == "admin"){
            
            header("location: admin.php");
       
        }elseif($_SESSION['perfil'] == "docente"){
            
			

			$idE = $resultado['id']; 
			$res =  " select id, nome from docente where user_id = '$idE'";
			$resultx = mysqli_query($conn, $res);
			$resultadox = mysqli_fetch_assoc($resultx);
			
			$idEs = $resultadox['id'];
			
			$rez =  " select * from supervisao where docente_id = '$idEs'";
			$resultz = mysqli_query($conn, $rez);
			$resultadoz = mysqli_fetch_assoc($resultz);
			
			$_SESSION['nome'] = $resultadoz['docente_id']; 
			
			
			
            header("location: supervisor.php");
       
        }else{
            
            header("location: index.php");
       
        }
        
        
        }else{
            $_SESSION['loginErro'] = "User ou senha invalida";
            header("location: index.php");
            }
    
    
        }else{
            $_SESSION['loginErro'] = "User ou senha invalida";
            header("location: index.php");
        }

?>