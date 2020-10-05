<?php

require_once '../controler/init.php';





?>
<!DOCTYPE html>
<html>
<head>
<title>Reg Docentes</title>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href=" css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href=" css/bootstrap-select.css">
  
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/validate.js"></script>
  <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-select.js"></script>


</head>
<body>


    <?php
        require_once '../controler/conexao.php';
    ?>


<nav  class="navbar navbar-inverse navbar-default no-margin" role="navigation"> <!---navbar navbar-inverse navbar-fixed-top---->
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
                <h3><span class="glyphicon glyphicon-text-background"></span>dministrador</h3>
        </div>
        
        
        <!-----------------------Conteudo------------------------------>
<!--        <h2>Registar Docentes XXX</h2>-->
        
        <!------------------------------------//////------------------------------------------------------>
        
        
            <div class="container">

          <ul class="nav nav-tabs">
            <li class="active"><a href="#home">Registar Docentes</a></li>
            <li><a href="#menu1">Registar Diretores de Curso</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                  <br>
              
              <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

              
              
              <div class="col-md-12">
            <form method="post" action="" data-toggle="validator" role="form" id="multiple_select_form">
                <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading"> 
                        <h4 class="panel-title">Docentes</h4>
                    </div>
                    <div class="panel-body"> 
                            <br>
                  <div class="form-group has-feedback col-md-8 col-md-offset-2">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required> 
                  </div>
                  
                  
                  <div id="cursos" class="form-group col-md-8 col-md-offset-2">
                    <label for="select">Curso</label>
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
                  
                  
                  
                  <div  class="form-group col-md-8 col-md-offset-2" >
                    <label for="select">Area de Especializacao</label>
                    <select id="area_id" name="area_id[]"  class="form-control selectpicker"   data-live-search= "true" multiple >
                        <option value="" placeholder="selecione o curso"></option>
                            <?php
                                
                                $result_area = "select * from area order by nome";
                                $resultado_area = mysqli_query($conn, $result_area);
                                while($row_area = mysqli_fetch_assoc($resultado_area)){
                                    echo '<option value = "' .$row_area['id'].'">'.$row_area['nome'].'</option>';
                                }  
                            ?>
                    </select>
                    
                    
                    
                    <br /><br />
                    <input type="hidden" name="hidden_area" id="hidden_area">
<!--                      <textarea type="text" class="form-control" id="curso" placeholder="areas"></textarea>-->
                  </div>
                  
                  
                  
                  
<!--
                  <div class="form-group col-md-8 col-md-offset-2">
                    <label for="curso">Area de Especialidade</label>
                      <textarea type="text" class="form-control" id="curso" placeholder="sistemas operativos"></textarea>
                  </div>
-->
                    <div id="cursos" class="form-group col-md-8 col-md-offset-2">
                        <label for="select">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    </div>
                     <div class="form-group has-feedback col-md-8 col-md-offset-2">
                        <label for="nome">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="********" required> 
                      </div>
                      
                      <div class="form-group  col-md-8 col-md-offset-2">
                        <br>
                        <label for="">Docente <input type="radio" name="perfil" id="perfil" value="docente" required></label>
                    </div>
                      
                      <button type="submit" name="docente" class="btn btn-success col-sm-offset-9">Gravar</button>
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
            
            
            
            
            
            
            </div>
            <div id="menu1" class="tab-pane fade">
                <br> 
              
              <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">

              
              
                      <div class="col-md-12">
            
                           <form method="post" action="" role="form">
                <div class="row">
                
                	<?php 
					if($mensagem==null){
						echo "<div class='panel panel-default'>";
					}elseif($mensagem=="<center><div class='icon-file'><i class='fa fa-remove' aria-hidden='true'></i> Diretor ja esta registado no Sistema!!!</div></center>"){
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
                            
                            <div class="col-md-6">
                  <div class="form-group has-feedback col-md-8 col-md-offset-2">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required> 
                  </div>

        
                  <div id="cursos" class="form-group col-md-8 col-md-offset-2">
                    <label for="select">Curso</label>
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
                  
                  
                  
                  <div id="area" class="form-group col-md-8 col-md-offset-2">
                    <label for="select">Identificacao do Docente</label>
                    <select class="form-control" id="docente_id" name="docente_id" required>
                        <option value="" placeholder=""></option>
                            <?php
                                
                                $result_doc = "select * from docente order by nome";
                                $resultado_doc = mysqli_query($conn, $result_doc);
                                while($row_doc = mysqli_fetch_assoc($resultado_doc)){
                                    echo '<option value = "' .$row_doc['id'].'">'.$row_doc['nome'].'</option>';
                                }  
                            ?>
                    </select>
                    
                  </div>
                  </div>
                  
                  <div class="col-md-6">
                  
                    <div id="cursos" class="form-group col-md-8 col-md-offset-2">
                        <label for="select">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    </div>
                     <div class="form-group has-feedback col-md-8 col-md-offset-2">
                        <label for="nome">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="********" required> 
                      </div>
                      
                      <div class="form-group  col-md-8 col-md-offset-2">
                        <br>
                        <label for="">Director do Curso <input type="radio" name="perfil" id="perfil" value="director" required></label>
                    </div>
                     </div>
                      
                      <button type="submit" name="director" class="btn btn-success col-sm-offset-9">Gravar</button>
                    </div>
                </div>
            </div>
            </form> 
            
               
                      </div>
                    </div>
                </div>        
            </div>
          </div>
        </div>
        
        <!------------------------------------//////------------------------------------------------------->
        
            
	</div>
	<!-----------------------Conteudo------------------------------>







    <script>

     /*$(document).ready(function(){
      $('.selectpicker').selectpicker();

      $('#area_id').change(function(){
        $('#hidden_area').val($('#area_id').val());
      });

      
      
      $('multiple_select_form').on('submit', function(event){
        event.preventDefault();

          if ($('#area_id').val()!= '') 
          {
            var form_data = $(this).serialize();
            $.ajax({
              url: "insert.php",
              method: "POST",
              data: form_data,
              success:function(data)
              { 
                //console.log(data);
                $('#hidden_area').val('');
                $('selectpicker').selectpicker('val', '');
                alert(data)
              }

            })
          }
          else
          {
            alert("please select area");
            return false;
          }
        });
    });*/


    $(document).ready(function(){
        $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
    });
    </script>





</body>
</html>