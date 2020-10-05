<?php

session_start();

require_once '../controler/init.php';


?>
<!DOCTYPE html>
<html>
<head>
<title>Reg Comissao Cientifica</title>
<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.responsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/validate.js"></script>
    
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">


</head>
<body>


    <?php
        require_once '../controler/conexao.php';
    ?>
    

<nav  class="navbar navbar-inverse navbar-default no-margin" role="navigation">
		<div class="container-fluid">
	        <a href="#" id="b" class="navbar-brand"></a>
	        
	        <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">

				<span class="sr-only">navegacao</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<div class="collapse navbar-collapse navHeaderCollapse navbar-right" > 

	        	<ul id="menu" class="nav navbar-nav">
                    <li  role= "apresentation" class="active"><a href="admin.php"><div class="icon-file"><i class="fa fa-home" aria-hidden="true"></i> Home</div></a></li>
	        		<li><a href="#"><div class="icon-file"><i class="fa fa-user" aria-hidden="true"></i> Perfil</div></a></li>
	        		
	

	        		<li class="dropdown">
                            
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-education"></span><b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="regcursos.php"> Cursos</a></li>
                                <li class="divider"></li>
                                <li><a href="regdocentes.php"> Docentes / Directores</a></li>
                                <li class="divider"></li>
                                <li><a href="regarea.php"> Areas de Estudo</a></li>
                                <li class="divider"></li>
                                <li><a href="regcientifica.php"> Rep. Comissao Cientifica</a></li>   
                            </ul>
                        </li>
	        	</ul>
	        	
			</div>

		</div>

	</nav>
	<!--fim do menu-->
	
	<div class="container">
       <br>
       <br>
        <div class="page-header">
                <h3><span class="glyphicon glyphicon-edit"></span> Representante da CC</h3>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form method="post" action="" data-toggle="validator" role="form">
            <div class="row"> 
                <div class="panel panel-success">
                    <div class="panel-heading"> 
                        <h4 class="panel-title">Formulario</h4>
                    </div>
                    <div class="panel-body"> 
                            <br>
<!--
                  <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"> 
                  </div>
-->
                  
                  
<!--
                  <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                    <label for="nome">Apelido</label>
                    <input type="text" class="form-control" name="apelido" id="apelido" placeholder="Apelido"> 
                  </div>
-->
                  
                  
<!--
                  <div id="cursos" class="form-group col-md-8 col-md-offset-2">
                    <label for="select">Curso</label>
                    <select class="form-control" id="curso_id" name="curso_id">
                        <option value="" placeholder="selecione o curso"></option>
                            <?php
                                
//                                $result_curso = "select * from curso order by nome";
//                                $resultado_curso = mysqli_query($conn, $result_curso);
//                                while($row_curso = mysqli_fetch_assoc($resultado_curso)){
//                                    echo '<option value = "' .$row_curso['id'].'">'.$row_curso['nome'].'</option>';
//                                }
                                
                            ?>
                    </select>
                  </div>
-->
                  
                  
                  
                  <div class="form-group  col-md-8 col-md-offset-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                  </div>
                    <div class="form-group  col-md-8 col-md-offset-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" maxlength="8" required>
                    </div>
                     
                     <div class="form-group  col-md-8 col-md-offset-2">
                        <br>
                        <label for="">Repre. Com. Cientifica <input type="radio" name="perfil" id="perfil" value="admin" required></label>
                    </div>
                     
                      <button type="submit" name="cientifica" class="btn btn-success col-sm-offset-9">Enviar</button>
                    </div>
                </div>
            </div>
            </form> 
            
            <?php
                echo $output;  
            ?>
              
        </div>
        <div class="col-md-1"></div>
	</div>





</body>
</html>