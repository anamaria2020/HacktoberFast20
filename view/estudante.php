<?php

session_start();
$b = $_SESSION['iduser'];

//echo "<script> alert('$b'); </script>";

//echo "Usuario : ". $_SESSION['username'];



require_once '../controler/init.php';

//$result_docente = "select * from docente";

//$resultado_docente = mysqli_query($conn, $result_docente);
 



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
//	               echo "Estudante : ". $_SESSION['nome'];
	        
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
                    <li  role= "apresentation" class="active"><a href="index.php"><div class="icon-file"><i class="fa fa-home" aria-hidden="true"></i> Home</div></a></li>
	        		<li><a href="perfil.php"><div class="icon-file"><i class="fa fa-user" aria-hidden="true"></i> Perfil</div></a></li>
<!--	        		<li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> Supervisores</a></li>-->
<!--	        		<li><a href="#"><span class="glyphicon glyphicon-bookmark"></span> Dr.Curso</a></li>-->
	        		<li><a href="sair.php"><div class="icon-file"><i class="fa fa-close" aria-hidden="true"></i> Sair</div></a></li>
	            </ul>
			    </div>
		    </div>
	    </nav>
	<!--fim do menu-->
	
	<div class="container">
       <br>
       <br>
       <br>
       <br>
       <h3><span class="glyphicon glyphicon-education"></span> Estudante</h3>
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Formulario de Compromisso</a></li>
            <li><a data-toggle="tab" href="#menu1">Documentos</a></li>
          </ul>
          
          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                
                <!-------------------formulario---------------------------------------------------->
            <div class="container">

                <div class="col-md-12">
                    <form method="post" action="" role="form">
                    <div class="row">
                       <br> 
                        <div class="panel panel-success">
                            <div class="panel-heading"> 
                                <h4 class="panel-title">Formulario de Compromisso</h4>
                            </div>
                            <div class="panel-body"> 
                            <br>
                          
                <form action="">
                  <!--------------------------////------------------------------------>
                   
                    <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                        <label for="">Area do Trabalho: </label>
                        <select class="form-control" id="area_id" name="area_id" required>
                        <option value="" placeholder=""></option>
                            <?php
                                
                                $result_area = "select * from area order by nome";
                                $resultado_area = mysqli_query($conn, $result_area);
                                while($row_area = mysqli_fetch_assoc($resultado_area)){
                                    echo '<option value = "' .$row_area['id'].'">'.$row_area['nome'].'</option>';
                                }  
                            ?>
                        </select>
                    </div>
                    <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                        <label for="">Supervisor: (Nome e grau academico) </label>
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
                    <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                        <label for="">Titulo do Trabalho:</label>
                        <input type="text" class="form-control" name="titulo" required>
                    </div>
                    <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                        <label for="">Objectivos: </label>
                        <textarea id="" maxlength="200" cols="55" rows="10"  name="objectivo" class="form-control" required>
                        </textarea><br>
                    </div>
                    <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                        <label for="">Instutuicao onde se realiza o trabalho: </label>
                        <input type="text" class="form-control" name="instituicao" required>
                    </div>
                    <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                        <label for="">Outra(s) instituicao(coes) envolvida(s):</label>
                        <input type="text" class="form-control" name="instituicao2" required>
                    </div>
                    
                    <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                        <label for="">Data de inicio de Trabalho de Licenciatura: </label>
                        <input type="Date" class="form-control" name="data1" id="" required>
                    </div>
                    <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                        <label for="">Data provavel de entrega do Trabalho de Licenciatura: </label>
                        <input name="data2" id="data" type="date" class="form-control" required>
                    </div>
                   
                    <div class="form-group has-feedback  col-md-8 col-md-offset-2">
                        <label for="">Concordo com os termos </label>
                        <input type="checkbox" value="pendente" name="status" required>
                    </div>
                </form>    
                     
                <button type="submit" name="supervisao" class="btn btn-success col-sm-offset-9">Enviar</button>
                    </div>
                </div>
            </div>
            </form> 
        </div>
	</div> 
                <!-------------------formulario---------------------------------------------->
               
            </div>
               
            <!------------------------outra-pag------------>
            <div id="menu1" class="tab-pane fade">
                <div class="container">
                 <div class="col-md-6">
                    
                    <center><h1><label for=""><span class="glyphicon glyphicon-cloud-upload"></span></label></h1></center>
                       <h5 align="center">Carrege o seu Relat&oacute;rio</h5>
                       <br>
                    
                    <div class="thumbnail">
                        <div class="caption">
                            
                            <?php
                            require('./conf/Config.inc');
                            $addinfo = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                            if($addinfo && $addinfo['addArquivo']):
                                $upload = new Upload();
                                $file = $_FILES['file'];
                                $upload->File($file);
                                if(!$upload->getResult()):
                                    echo $upload->getMsg();
                                else:
                                    echo $upload->getMsg();
                                endif;
                            endif;
                        ?>

                        <form name="addArquivoForm" action="" method="post" enctype="multipart/form-data">
                            <label>
                                <input type="file" class="btn btn-success" name="file"/>
                            </label> &nbsp; &nbsp; 
                            <input type="submit" class="btn btn-warning" name="addArquivo" value="Upload"/>
                        </form>
                        
                        </div>
                    </div>
                    
                    
                    
                    
                    <!-----------------formulario-------------------------->
                    <div>
<!--                    <br>-->
<!--                    <div class="thumbnail">-->
<!--                        <div class="caption">-->

                            <p>Baixe o formulario</p>
<!--
                            <p><a href="ver.php" class="btn btn-success col-sm-offset-4" role="button">
                            <span class="glyphicon glyphicon-paperclip"></span></a></p>
-->
                            <a href="doc/ver.pdf"><!--<embed width="400%" height="500%" name="plugin" src="doc/ver.pdf" type="application/pdf">--><div class="icon-file"><button class="btn btn-warning"><i class="fa fa-download" aria-hidden="true"></i> Clique aqui</button></div></a>
                           
                            <!---botao com o formulario de Compromisso--->
<!--                            </div> -->
<!--                        </div>-->
                    </div>
                    
                    <!-----------------formulario-------------------------->
                    
                    
                 </div>
                    <!-----------------comentario-----------------------------------> 
                    
                    <div class="col-md-6">
                       <center><h1><label for=""><span class="glyphicon glyphicon-share"></span></label></h1></center>
                       <h5 align="center">Envie-nos o seu coment&aacute;rio</h5>
                       <form method="post" id="comment_form" data-toggle="validator" role="form">
                        <div class="form-group">
                         <label>Nome</label>
                         <input type="text" name="subject" id="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                         <label>Seu Comentario</label>
                         <textarea name="comment" id="comment" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                         <input type="submit" name="post" id="post" class="btn btn-success" value="Enviar" />
                        </div>
                       </form>
                    </div>
                     <!-----------------comentario-----------------------------------> 
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        <!--------------Testando__________________________------------>
       
        <!--------------Testando__________________________------------>
  
    
</body>
</html>



<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
