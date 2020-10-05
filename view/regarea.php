<?php

require_once '../controler/init.php';

$result_area = "select * from area";

$resultado_area = mysqli_query($conn, $result_area);

?>
<!DOCTYPE html>
<html>
<head>
<title>Reg Area</title>
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
	        <a href="#" id="b" class="navbar-brand"><span class="glyphicon glyphicon-education"></span></a><!---------Admin Profile Here------------>
	        
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
	        		<li class="dropdown active">
                            
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registos<b class="caret"></b></a>

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
	        		
	    

	        		<li class="dropdown">
                            
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-education"></span><b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="#"><div class="icon-file"><i class="fa fa-chain" aria-hidden="true"></i> Detalhes de Supervisores</div></a></li>
                                <li class="divider"></li>
                                <li><a href="#"><div class="icon-file"><i class="fa fa-envelope-square" aria-hidden="true"></i> Pedidos</div></a></li>
                                <li class="divider"></li>
                                <li><a href="graficogeral.php"><div class="icon-file"><i class="fa fa-bar-chart" aria-hidden="true"></i> Estatisticas</div></a></li>
                                <li class="divider"></li>
                       			<li><a href="sair.php"><div class="icon-file"><i class="fa fa-close" aria-hidden="true"></i> Sair</div></a></li>
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
                <h3><span class="glyphicon glyphicon-text-background"></span>rea de Especializacao</h3>
        </div>
        
        
        <!-----------------------Conteudo------------------------------>
        <h2>Registar Areas</h2>&nbsp; 

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

              
              
              <div class="col-md-12">
                <form method="post" action="" role="form" id="acaoform" data-toggle="validator" role="form">
                <div class="row">
                <?php 
					if($mensagem==null){
						echo "<div class='panel panel-default'>";
					}elseif($mensagem=="<center><div class='icon-file'><i class='fa fa-remove' aria-hidden='true'></i> Ja esta registada no Sistema, registe outra Area!!!</div></center>"){
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
                  <div class="form-group has-feedback col-md-8 col-md-offset-2">
                    <label for="nome">Area</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Area" required> 
                  </div>

                      <button type="submit" name="area" value="Gravar" class="btn btn-success col-sm-offset-9">Gravar</button>
                    </div>
                </div>
                </div>
            </form>
            
            <?php
              echo $output;    
            ?>
              
            </div>
        </div>
        </div>
<!--        </pop:form> -->
	</div>
	 <!-----------------------Conteudo------------------------------->
	 <!-----------------------tabela Cursos------------------------------->
    <div class="container">
        <table class="table table-bordered table-hover">
           <thead>
            
                <tr>
                    <th class="success">Id da Area</th>
                    <th class="success">Area</th>
<!--                    <th class="success">Ver</th>-->
                </tr>
            </thead>
               <tbody>
                   <?php while($rows_area = mysqli_fetch_assoc($resultado_area)){ ?>
                <tr>
                    <td><?php echo $rows_area['id']; ?></td>
                    <td><?php echo $rows_area['nome']; ?></td>
<!--                    <td><button type="button" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-eye-open"></span></button></td>-->
                </tr>
               <?php } ?> 
            </tbody>
        </table>  
    </div>
    <!-----------------------tabela Cursos------------------------------->


</body>
</html>