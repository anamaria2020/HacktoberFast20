<?php

$output = null;
global $mensagem;

if(isset($_POST['curso'])){
    //Conexao co bd
    $mysqli = new mysqli('localhost', 'root','','dmi3');
    
    $nome = $mysqli->real_escape_string($_POST['nome']);
    
    $query = $mysqli->query("select * from curso where nome = '$nome'");
	
    
//    if($nome){
//        $output = "Por favor preencha o Campo";
		if(cursoExists($nome) === TRUE){
//			echo  "<div class='alert alert-danger'>".$_POST['nome'] . " ja esta registada no Sistema, registe outro Curso!!!"."</div>";
			
//			$mensagem = "<div class='alert alert-danger'>".$_POST['nome'] . " ja esta registada no Sistema, registe outro Curso!!!"."</div>";
			
			$mensagem = "<center><div class='icon-file'><i class='fa fa-remove' aria-hidden='true'></i> Curso ja esta registado no Sistema!!!</div></center>";
			
    }else{
    
     $insert = $mysqli->query("insert into curso (nome) values ('$nome')");
//		echo " Curso Registado com Sucesso";
			$mensagem = "<center><div class='icon-file'><i class='fa fa-check' aria-hidden='true'></i> Curso registado com sucesso!!!</div></center>";
			
//			$mensagem = "<div class='alert alert-success'> Curso Registado com Sucesso</div>";
		} 
//	}
}

?>

<!----------------Reg Estudants-------------------->

	<?php

		$output = null;
		global $mensagem;


if(isset($_POST['estudante'])){
    //Conexao co bd
    $mysqli = new mysqli('localhost', 'root','','dmi3');
    

    
     $nome = $mysqli->real_escape_string($_POST['nome']);
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $curso_id = $mysqli->real_escape_string($_POST['curso_id']);
    $perfil = $mysqli->real_escape_string($_POST['perfil']);
    
    $query = $mysqli->query("select * from estudante where nome = '$nome'");
    
//	if($nome && $username && $password && $curso_id && $perfil){
		if(userExists($username) === TRUE){
			$mensagem = "<center><div class='icon-file'><i class='fa fa-remove' aria-hidden='true'></i> Estudante ja esta registado no Sistema!!!</div></center>";
		}else{
	 $insert = $mysqli->query("insert into user (username,password, perfil) values ('$username', '$password', '$perfil')");
	
    
    $result = $mysqli->query("select max(id) from user");
    
    while($resulto = mysqli_fetch_array($result)){
//        print_r($resulto); ---imprime o id do estudante-----
        
        $idest = $resulto[0];
        
       //echo $resulto['id'];
			
    
     $insert = $mysqli->query("insert into estudante (nome, curso_id, user_id) values ('$nome','$curso_id', '$idest')");
			} $mensagem = "<center><div class='icon-file'><i class='fa fa-check' aria-hidden='true'></i> Registado com sucesso!!!</div></center>";
			
		}
//    }
}

	?>

<!----------------Reg Estudants-------------------->


<!---------------Reg ComCientifica------------------>
<?php

		$output = null;

if(isset($_POST['cientifica'])){
    //Conexao co bd
    $mysqli = new mysqli('localhost', 'root','','dmi3');
    

    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $perfil = $mysqli->real_escape_string($_POST['perfil']);
    
    $query = $mysqli->query("select * from ccientifica where username = '$username'");
	
	
	if($username && $password && $perfil){
		if(userExists($username) === TRUE){
			echo  $_POST['username'] . " ja se encontra registado no Sistema!!!";
		}else{
	$insert = $mysqli->query("insert into user (username,password, perfil) values ('$username', '$password', '$perfil')");
	
	
    
     $resultcom = $mysqli->query("select max(id) from user");
    
     while($resultoCom = mysqli_fetch_array($resultcom)){
        print_r($resulto); //---imprime o id do estudante-----
        
        $idcom = $resultoCom[0];  
    
	
	$insert = $mysqli->query("insert into ccientifica (user_id) values ('$idcom')");
	} echo "Registado com Sucesso";
		}
	}
    
     
}

	?>


<!---------------Reg ComCientifica------------------>



<!----------------Reg Docentes-------------------->

	<?php

		$output = null;
		global $mensagem;


if(isset($_POST['docente'])){
    //Conexao co bd
    $mysqli = new mysqli('localhost', 'root','','dmi3');
    
    /*$nome = $mysqli->real_escape_string($_POST['nome']);
    $curso_id = $mysqli->real_escape_string($_POST['curso_id']);
    $area_id = $mysqli->real_escape_string($_POST['area_id']);
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $perfil = $mysqli->real_escape_string($_POST['perfil']);
    
    $query = $mysqli->query("select * from docente where nome = '$nome'");
	
	
	if($nome && $curso_id && $area_id && $username && $password && $perfil){
		if(userExists($username) === TRUE){
			echo  $_POST['username'] . " ja foi registado registe outro Usuario!!!";
		}else{
	 $insert = $mysqli->query("insert into user (username,password, perfil) values ('$username', '$password', '$perfil')");
    
     $resultdoc = $mysqli->query("select max(id) from user");

     while($resultoDoc = mysqli_fetch_array($resultdoc)){
        
        $idestdoc = $resultoDoc[0];
        
      
     $insert = $mysqli->query("insert into docente (nome, curso_id, area_id, user_id) values ('$nome','$curso_id','$area_id', '$idestdoc')");
} echo "Registado com Sucesso";
		}
	}*/
	
	
	
	$nome = $mysqli->real_escape_string($_POST['nome']);
    $curso_id = $mysqli->real_escape_string($_POST['curso_id']);
    //$especializacoes = $mysqli->real_escape_string($_POST['especializacoes']);
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $perfil = $mysqli->real_escape_string($_POST['perfil']);
    
    $query = $mysqli->query("select * from docente where nome = '$nome'");
	
	
	 $insert = $mysqli->query("insert into user (username,password, perfil) values ('$username', '$password', '$perfil')");
        
   
     $resultdoc = $mysqli->query("select max(id) from user");

     while($resultoDoc = mysqli_fetch_array($resultdoc)){
        $idestdoc = $resultoDoc[0];
     }
    
     $insert = $mysqli->query("insert into docente (nome, curso_id, user_id) values ('$nome','$curso_id', '$idestdoc')");

     $resultdocente = $mysqli->query("select max(id) from docente");

     while($resultdocentee = mysqli_fetch_array($resultdocente)){
        $idDocente = $resultdocentee[0];
     }

     foreach ($_POST['area_id'] as $esp) {
         $insert = $mysqli->query("insert into docente_has_area (docente_id, area_id) values ('$idDocente','$esp')");
        }
}
	
	
	?>

<!----------------Reg Docentes-------------------->


<!----------------reg dir curso--------------------->

	<?php

		$output = null;
		global $mensagem;


if(isset($_POST['director'])){
    //Conexao co bd
    $mysqli = new mysqli('localhost', 'root','','dmi3');
    
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $curso_id = $mysqli->real_escape_string($_POST['curso_id']);
    $docente_id = $mysqli->real_escape_string($_POST['docente_id']);
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $perfil = $mysqli->real_escape_string($_POST['perfil']);
    
    $query = $mysqli->query("select * from dircurso where nome = '$nome'");
	
	
//	if($nome && $curso_id && $docente_id && $username && $password && $perfil){
		if(userExists($username) === TRUE){
//			echo  $_POST['username'] . " ja se encontra registado no Sistema!!!";
			$mensagem = "<center><div class='icon-file'><i class='fa fa-remove' aria-hidden='true'></i> Diretor ja esta registado no Sistema!!!</div></center>";
			
		}else{
			
	$insert = $mysqli->query("insert into user (username,password, perfil) values ('$username', '$password', '$perfil')");
	
	
	$resultdir = $mysqli->query("select max(id) from user");
	
	while($resultoDir = mysqli_fetch_array($resultdir)){
        
        $idestdir = $resultoDir[0];  
    
	
     $insert = $mysqli->query("insert into dircurso (nome, curso_id, docente_id, user_id) values ('$nome','$curso_id','$docente_id', '$idestdir')");
			} $mensagem = "<center><div class='icon-file'><i class='fa fa-check' aria-hidden='true'></i> Registado com sucesso!!!</div></center>";
		}
//	}
}

	?>
<!----------------reg dir curso--------------------->



<!----------------regsupervisao-------------------->
<?php

$output = null;

if(isset($_POST['supervisao'])){
    //Conexao co bd

    $idEstudante = 0;

    $conn = mysqli_connect("localhost", "root", "", "dmi3");   

    $user_id = $_SESSION['iduser'];

    $procurar_idEstudante = "select id from estudante where user_id = $user_id";
    
    $resultado_idEstudante = mysqli_query($conn, $procurar_idEstudante);

    if(!empty($resultado_idEstudante))
    {
        $linha = mysqli_fetch_array($resultado_idEstudante);
        $idEstudante = $linha["id"];
    }    

    $mysqli = new mysqli('localhost', 'root','','dmi3');
    
    $titulo = $mysqli->real_escape_string($_POST['titulo']);
    $area_id = $mysqli->real_escape_string($_POST['area_id']);
    $estudante_id = $idEstudante;
    $objectivo = $mysqli->real_escape_string($_POST['objectivo']);
    $instituicao = $mysqli->real_escape_string($_POST['instituicao']);
    $instituicao2 = $mysqli->real_escape_string($_POST['instituicao2']);
    $docente_id = $mysqli->real_escape_string($_POST['docente_id']);
   
    $data1 = $mysqli->real_escape_string($_POST['data1']);
    $data2 = $mysqli->real_escape_string($_POST['data2']);
    $status = $mysqli->real_escape_string($_POST['status']);
    
    $query = $mysqli->query("select * from supervisao where titulo = '$titulo'");
    
    
     $insert = $mysqli->query("insert into supervisao (titulo, area_id,objectivo, estudante_id, instituicao,instituicao2,docente_id,data1,data2,status) values ('$titulo','$area_id','$objectivo', '$estudante_id', '$instituicao', '$instituicao2','$docente_id','$data1','$data2','$status')");
}



?>
<!----------------regsupervisao---------------------



<!----------------Reg Areas-------------------->

<?php

$output = null;
global $mensagem;
//$this->Msg = '<div class="alert alert-success">Upload Realizado com sucesso</div>';

if(isset($_POST['area'])){
    //Conexao co bd
    $mysqli = new mysqli('localhost', 'root','','dmi3');
    
    $nome = $mysqli->real_escape_string($_POST['nome']);
    
    $query = $mysqli->query("select * from area where nome = '$nome'");
    
//    if($nome){
//        $output = "Por favor preencha o Campo";
		if(areaExists($nome) === TRUE){
//			echo  $_POST['nome'] . " ja esta registada no Sistema, registe outra Area!!!";
			
			$mensagem = "<center><div class='icon-file'><i class='fa fa-remove' aria-hidden='true'></i> Ja esta registada no Sistema, registe outra Area!!!</div></center>";
			
    }else{
    
     $insert = $mysqli->query("insert into area (nome) values ('$nome')");
			$mensagem = "<center><div class='icon-file'><i class='fa fa-check' aria-hidden='true'></i> Area registada com sucesso!!!</div></center>";
		} 
//	}
}

?>


<!----------------Reg Areas-------------------->


<!-- Verificacao de Existencia de Usuario -->

<?php

function userExists($username) {
	global $conn;

	$sql = "SELECT * FROM user WHERE username = '$username'";
	$query = $conn->query($sql);
	if($query->num_rows == 1) {
		return true;
	} else {
		return false;
	}

	$conn->close();

}


function userdata($username) {
	global $conn;
	$sql = "SELECT * FROM user WHERE username = '$username'";
	$query = $conn->query($sql);
	$result = $query->fetch_assoc();
	if($query->num_rows == 1) {
		return $result;
	} else {
		return false;
	}

	$conn->close();
	
}


function areaExists($nome) {
	global $conn;

	$sql = "SELECT * FROM area WHERE nome = '$nome'";
	$query = $conn->query($sql);
	if($query->num_rows == 1) {
		return true;
	} else {
		return false;
	}

	$conn->close();

}

function cursoExists($nome) {
	global $conn;

	$sql = "SELECT * FROM curso WHERE nome = '$nome'";
	$query = $conn->query($sql);
	if($query->num_rows == 1) {
		return true;
	} else {
		return false;
	}

	$conn->close();

}
?>

<!-- Verificacao de Existencia de Usuario -->