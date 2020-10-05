<?php

require_once '../controler/init.php';

session_start();
$b = $_SESSION['iduser'];

//echo "<script> alert('$b'); </script>";


$sx = $_SESSION['id'];

$rez =  " select * from supervisao where estudante_id = '$sx'";
$resultz = mysqli_query($conn, $rez);


?>
<!DOCTYPE html>
<html>
<head>
<title>Estudante</title>
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

<nav  class="navbar navbar-inverse navbar-default no-margin" role="navigation">
		<div class="container-fluid">
	        <a href="#" id="b" class="navbar-brand">
	            
	            <?php
	        
	               echo "Estudante : ". $_SESSION['username'];

                ?>   
	        </a>
	        
	        <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">

				<span class="sr-only">navegacao</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<div class="collapse navbar-collapse navHeaderCollapse navbar-right" > 

	        	<ul id="menu" class="nav navbar-nav">
                    <li  role= "apresentation" class="active"><a href="estudante.php"><div class="icon-file"><i class="fa fa-sign-out" aria-hidden="true"></i> Voltar</div></a></li>
	        		<li><a href="sair.php"><div class="icon-file"><i class="fa fa-close" aria-hidden="true"></i> Sair</div></a></li>
	            </ul>
			    </div>
		    </div>
	    </nav>
	<!--fim do menu-->
	
	
	
	<!----------------Campo de Atualizacao do Pefil------------------------------>
		
		<div class="container">
		   <br>
		   <br>
<!--        <div class="page-header">-->
                <h3><div class="icon-file"><i class="fa fa-refresh" aria-hidden="true"></i> Atualiza&ccedil;&atilde;o do Perfil</div></h3>
                <div class="box box-success">
				</div>
<!--        </div>-->
       <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php
	        
	        echo "". $_SESSION['username'];
	        
            ?></h3>
              <h5 class="widget-user-desc">Estudante</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="img/user5-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-5 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Identificacao</h5>
                    <span class="description-text"><?php
	        
					echo "". $_SESSION['id'];

					?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-7 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Nome Completo</h5>
                    <span class="description-text"><?php
	        
					echo "". $_SESSION['nome'];

					?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-5 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Endereco:</h5>
                    <span class="description-text">_____________</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-7 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Naturalidade:</h5>
                    <span class="description-text">_________________</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-5 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Telefone:</h5>
                    <span class="description-text">_____________</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-7 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Email:</h5>
                    <span class="description-text">_________________</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-5 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Curso:</h5>
                    <span class="description-text">_____________</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-7 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Departamento:</h5>
                    <span class="description-text">_________________</span>
                  </div>
                  <!-- /.description-block -->
                </div>
<!--
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">Perfil</h5>
                    <span class="description-text">Estudante</span>
                  </div>
                   /.description-block 
                </div>
-->
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
       
       
        <div class="col-md-8">
            <form method="post" action="" role="form" data-toggle="validator" role="form">
            <div class="row"> 
                <div class="panel panel-success">
                    <div class="panel-heading"> 
                        <center><h4 class="panel-title">Atualiza&ccedil;&atilde;o</h4></center>
                    </div>
                    <div class="panel-body"> 
                            <br>
                  <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                    <label for="inputName" class="control-label">Nome Completo</label>
                    <input type="text" class="form-control" name="nome" id="inputName" placeholder="Nome" required> 
                  </div>
                   
                  <div class="form-group  has-feedback col-md-8 col-md-offset-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username" required>
                  </div>
                    <div class="form-group has-feedback col-md-8 col-md-offset-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" maxlength="8" required>
                        <div class="help-block">Minimo de 4 characteres</div>
                    </div>
                     
                     
                     
                      <button type="submit" name="#" class="btn btn-success col-sm-offset-9">Gravar</button>
                    </div>
                </div>
            </div>
            </form> 
            
            <?php
                echo $output;  
            ?>
              
        </div>
	</div>

	<!----------------Campo de Atualizacao do Pefil------------------------------>
	<div class="container">
       <br>
       <br>
<!--       <div class="page-header">-->
       <h3><div class="icon-file"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Estado da Supervis&atilde;o</div></h3>
       <div class="box box-warning">
	   </div>
<!--		</div>-->
                     
                    <div class="container">
                    
					<div class="col-md-12">
						<div class="well"> 
                        <table class="table" id="listaDeTemas">
                            <thead>
                                <tr>
                                    <th class="success">Titulo do Trabalho</th>
                                    <th class="success">Estado da Supervis&atilde;o</th>
                                    <th class="success">Detalhes</th>
                                </tr>
                            </thead>
                               <tbody> 
                                   <?php while($rows_supervisao = mysqli_fetch_assoc($resultz)){ ?>
                                <tr>
                                    <td><?php echo $rows_supervisao['titulo']; ?></td>
                                    <td><?php echo $rows_supervisao['status']; ?></td>
                               <td><button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModal<?php echo $rows_supervisao['id']; ?>">Detalhes</button></td>
                                </tr>
                                
                                <!-----------------Modal------------>
                                 <div class="modal fade" id="myModal<?php echo $rows_supervisao['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_supervisao['titulo']; ?></h4>
                                      </div>
                                      <div class="modal-body">
                                       
                                        <p> <b>Tema de Defesa : </b><?php echo $rows_supervisao['titulo']; ?></p>
                                        <p> <b>Objectivo : </b><?php echo $rows_supervisao['objectivo']; ?></p>
                                        <p> <b>Institui&ccedil;&atilde;o de Trabalho : </b><?php echo $rows_supervisao['instituicao']; ?></p>
                                        <p> <b>Data de In&iacute;cio de trabalho : </b><?php echo $rows_supervisao['data1']; ?></p>
                                        <p> <b>Data provavel de entrega de trabalho : </b><?php echo $rows_supervisao['data2']; ?></p>
                                        
                                        
                                        <p> <b>Situacao da Supervisao: </b> <?php echo $rows_supervisao['status']; ?></p>
                                         
                                      </div>
                                    </div>
                                  </div>
                                </div>
              
                                <!----------------Modal-------------->
                               <?php } ?> 
                            </tbody>
                        </table>   
                    </div>
                  </div>
        		  </div>
                    
                    <!--------------------*---------------------------->
        </div>
</body>
</html>

