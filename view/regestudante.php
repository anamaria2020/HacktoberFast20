<?php

session_start();

require_once '../controler/init.php';


?>
<!DOCTYPE html>
<html>
<head>
<title>Reg Estudante</title>
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
//        require_once '../controler/conexao.php';
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
                    <li  role= "apresentation" class="active"><a href="index.php"><div class="icon-file"><i class="fa fa-home" aria-hidden="true"></i> Home</div></a></li>
	        		 <li ><a href="#" data-toggle="modal" data-target="#myModal"><div class="icon-file"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</div></a></li>
	        		
	

	        		<li class="dropdown">
                            
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-education"></span><b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> Supervisores</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-bookmark"></span> Dr.Curso</a></li>
                                <li class="divider"></li>

                       			<li><a href="index.php"><div class="icon-file"><i class="fa fa-close" aria-hidden="true"></i> Sair</div></a></li>
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
<!--        <div class="page-header">-->
                <h3><span class="glyphicon glyphicon-edit"></span> Registo de Estudante</h3>
                <div class="box box-success">
				</div>
<!--        </div>-->
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form method="post" action="" data-toggle="validator" role="form">
            <div class="row">
               
               		<?php 
						if($mensagem==null){
							echo "<div class='panel panel-default'>";
						}elseif($mensagem=="<center><div class='icon-file'><i class='fa fa-remove' aria-hidden='true'></i> Estudante ja esta registado no Sistema!!!</div></center>"){
							echo "<div class='panel panel-danger'>";
						}else{
							echo "<div class='panel panel-success'>";
						}
					?>
                
                 
                  
                   
                     
<!--                <div class="panel panel-success">-->
                    <div class="panel-heading"> 
                        <h4 class="panel-title"><?php echo $mensagem ?></h4>
                    </div>
                    <div class="panel-body"> 
                            <br>
                  <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                    <label for="nome" class="control-label">Nome Completo</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required> 
                  </div>
               
                  
                  <div id="cursos" class="form-group has-feedback col-md-8 col-md-offset-2">
                    <label for="select" class="control-label">Curso</label>
                    <select class="form-control" id="curso_id" name="curso_id" required>
                        <option value="" placeholder="selecione o curso"></option>
                            <?php
                                
                                $result_curso = "select * from curso order by nome";
                                $resultado_curso = mysqli_query($conn, $result_curso);
                                while($row_curso = mysqli_fetch_assoc($resultado_curso)){
                                    echo '<option value = "' .$row_curso['id'].'">'.$row_curso['nome'].'</option>';
                                }
                                
                            ?>
                    </select>
                  </div>
                  
                  
                  
                  <div class="form-group  col-md-8 col-md-offset-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                  </div>
                    <div class="form-group  col-md-8 col-md-offset-2">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" maxlength="8" required>
                    </div>
                     
                     <div class="form-group  col-md-8 col-md-offset-2">
                        <br>
                        <label for="" class="control-label">Estudante <input type="radio" name="perfil" id="perfil" value="estudante" required></label>
                    </div>
                     
                      <button type="submit" name="estudante" class="btn btn-success col-sm-offset-9">Enviar</button>
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
	
	<!-----------------Autenticacao--Modal-------------->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="classeModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss = "modal"><span aria-hidden="true">&times;</span></button> 
                                <center><h4 class="modal-title">LOGIN</h4></center>  
                            </div>
                            
                            <div class="modal-body">
                              
                                   <form action="valida.php" method="post" data-toggle="validator" role="form">
                                    
                                      <div class="row">
                                        <div class="col-md-2"></div>
                                         <div class="col-md-8">
                                        <div class="input-group ">
                                          <span class="input-group-addon" id="basic-addon1"><div class="icon-file"><i class="fa fa-user" aria-hidden="true"></i> </div></span>

                                          <input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                            <br>
                                            <br>
                                        <div class="input-group ">
                                          <span class="input-group-addon" id="basic-addon1"><div class="icon-file"><i class="fa fa-unlock-alt" aria-hidden="true"></i> </div></span>
                                          <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1" required>
                                        </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                        </div>
                                        <br>
                                        
                                        <div class="row">
                                        <div class="modal-footer">
                                        	<div class="col-md-6">
                                            <!-- <p> N&atilde;o esta Registado? <a href="regestudante.php"> Registe-se </a></p> -->
                                            </div>
                                            <div class="col-md-6">
                                            <button type="button" class="btn btn-default" data-dismiss = "modal">Cancelar</button>
                                            <button type="submit" value="proceed" class="btn btn-success">Entrar</button>
                                            </div>
                                        </div>                                     
                                        </div>  
										
                                    </form>


                                    <p class="text-center text-danger">
                                    <?php if(isset($_SESSION['loginErro'])){
                                        echo $_SESSION['loginErro'];
                                        unset($_SESSION['loginErro']);
                                        }

                                    ?>
                                    </p>
 
              
                            </div>
                            
                        </div>
                    </div>  
                </div>
            
            
            <!-----------------Autenticacao--Modal-------------->
</body>
</html>