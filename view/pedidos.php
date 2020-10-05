<?php
require_once '../controler/conexao.php';


$result_supervisao = "select * from supervisao";

$resultado_supervisao = mysqli_query($conn, $result_supervisao);

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="imag/png" href="img/Graduation%20Cap.png"/>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.responsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
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

<nav  class="navbar navbar-inverse navbar-fixed-top no-margin" role="navigation">
		<div class="container-fluid">
	        <a href="#" id="b" class="navbar-brand"><span class="glyphicon glyphicon-education"></span>
	        
	        <?php
	        
	        echo "Admin : ". $_SESSION['username'];
	        
            ?>
	        
	        
	        
	        </a><!---------Admin Profile Here------------->
	        
	        <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">

				<span class="sr-only">navegacao</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<div class="collapse navbar-collapse navHeaderCollapse navbar-right" > 

	        	<ul id="menu" class="nav navbar-nav">
                    <li  role= "apresentation" class="active"><a href="admin.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	        		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Perfil </a></li>
	        		
	        		<li class="dropdown">
                            
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registos<b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="regcursos.php"> Cursos</a></li>
                                <li class="divider"></li>
                                <li><a href="regdocentes.php"> Docentes / Directores</a></li>
                                <li class="divider"></li>
                                <li><a href="regarea.php"> Areas de Estudo</a></li>
                                
                                
                                
                            </ul>
                        </li>
	        		
	

	        		<li class="dropdown">
                            
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-education"></span><b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="Docentes-super.php"><span class="glyphicon glyphicon-cog"></span> Detalhes de Supervisores</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Pedidos</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Estatisticas</a></li>
                                <li class="divider"></li>
                       			<li><a href="sair.php"><span class="glyphicon glyphicon-remove-sign"></span> Sair</a></li>
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
                <h3><span class="glyphicon glyphicon-font"></span> Pedidos</h3>
        </div>
        
        
        <!-----------------------Conteudo------------------------------->
               <div class="row">
                  <div class="col-sm-6">
                    <div class="thumbnail alert alert-danger">
                      <div class="caption">
                        <h3>Professores</h3>
                        <p>Informacoes sobre os Professores, e mais informacoes</p>
                        <p><a href="#profess" class="btn btn-success" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-th-list"></span></a></p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="thumbnail alert alert-danger">
                      <div class="caption">
                        <h3>Temas de Defesa</h3>
                        <p>Informacoes sobre propostas de temas para trabalho final de curso</p>
                        <p><a href="#estud" class="btn btn-success" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseExample" ><span class="glyphicon glyphicon-th-list"></span></a></p>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="collapse" id="profess">
                 <br>
                  <div class="well">
                   <br>
                   
                   <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
<!--                          <img src="..." alt="...">-->
                          <div class="caption">
                            <h1><center><span class="glyphicon glyphicon-user"></span></center></h1>
                            <p><center>Prof.Cumbana</center></p>
                              <p><center><a href="#" class="btn btn-default" role="button" type="button"><span class="glyphicon glyphicon-th-list"></span></a></center></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4" id="sidebar-right">
                        <div class="thumbnail">
<!--                          <img src="..." alt="...">-->
                          <div class="caption">
                            <h1><center><span class="glyphicon glyphicon-user"></span></center></h1>
                            <p><center>Prof.Mosse</center></p>
                              <p><center><a href="#" class="btn btn-default" role="button"><span class="glyphicon glyphicon-th-list"></span></a></center></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4" id="sidebar-right">
                        <div class="thumbnail">
<!--                          <img src="..." alt="...">-->
                          <div class="caption">
                            <h1><center><span class="glyphicon glyphicon-user"></span></center></h1>
                            <p><center>Prof&ordf; Judite</center></p>
                              <p><center><a href="#" class="btn btn-default" role="button"><span class="glyphicon glyphicon-th-list"></span></a></center></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="collapse" id="estud">
                  <div class="well"> 
                        <table class="table">
                           <thead>
                                <tr>
                                    <th class="success">Titulo do Trabalho</th>
                                    <th class="success">Data de Inicio</th>
                                    <th class="success">Data de Fim</th>
                                    <th class="success">Situacao</th>
                                </tr>
                            </thead>
                               <tbody>
                                   <?php while($rows_supervisao = mysqli_fetch_assoc($resultado_supervisao)){ ?>
                                <tr>
                                    <td><?php echo $rows_supervisao['titulo']; ?></td>
                                    <td><?php echo $rows_supervisao['data1']; ?></td>
                                    <td><?php echo $rows_supervisao['data2']; ?></td>
                                    <td><?php echo $rows_supervisao['status']; ?> <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModal<?php echo $rows_supervisao['id']; ?>"><span class="glyphicon glyphicon-eye-open"></span></button> <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $rows_supervisao['id']; ?>"
                                    data-whatevertitulo="<?php echo $rows_supervisao['titulo']; ?>"
                                    data-whateverstatus="<?php echo $rows_supervisao['status']; ?>"><span class="glyphicon glyphicon-refresh"></span></button></td>
                                </tr>
                                
                                
                                <!-----------------Modal------------>
                                <!-- Modal -->
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
                                        
                                        
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"><?php echo $rows_supervisao['status']; ?>
                                            <span class="sr-only"></span>
                                          </div>
                                        </div>
                                        
                                        
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div>        
                                
                                <!----------------Modal--------------->
                               <?php } ?> 
                            </tbody>
                        </table>   
                    </div>
                </div>
        <!-----------------------Conteudo------------------------------->
	</div>
	
	
	
	
	
	<!---------------editar estado supervisao--------------------------->
	
	

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Tema id: </h4>
              </div>
              
              
              <div class="modal-body">
                <form method="post" action="http://localhost/Projecto%20PHP/view/admin.php" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="recipient-name" class="control-label">Tema:</label>
                    <input name="titulo" type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="control-label">Detalhes:</label>
                    <textarea name="status" class="form-control" id="detalhes-text"></textarea>
                  </div>
                  
                  <input type="hidden" id="id" name="id">
                  
                  
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Alterar</button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
	
	
	
	<!---------------editar estado supervisao--------------------------->
	
	
<!--
	                <div class="container theme-showcase" role="main">                       
                       <div class="dropdown">
                        <span class="glyphicon glyphicon-cog btn-lg text-success" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></span>
                            <ul class="dropdown-menu">
                                <li><a href="#direct" class="pull-right" role="button" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseExample" > Registar Directores</a></li>
                            </ul>
                        </div>
                    </div>
-->
	
	
	
	<div class="container">
       <div class="row">    
	    <div class="collapse" id="direct">

        </div>
	    </div>
	</div>
	
	
	
	



<script src="js/slid.js"></script>
<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var recipient = button.data('whatever')
      var recipienttitulo = button.data('whatevertitulo')
      var recipientwhateverstatus = button.data('whateverstatus')
      
      
      var modal = $(this)
      modal.find('.modal-title').text('Tema nr: ' + recipient)
      modal.find('#id').val(recipient)
      modal.find('#recipient-name').val(recipienttitulo)
      modal.find('#detalhes-text').val(recipientwhateverstatus)
})
</script>

</body>

<!--
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
   alert("Preencha os Campos");
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
-->


</html>


<?php $conn->close() ?>