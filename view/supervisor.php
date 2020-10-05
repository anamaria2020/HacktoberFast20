<?php


require_once '../controler/init.php';

session_start();


$d = $_SESSION['nome'];

//echo "<script> alert('$d'); </script>";


$rez =  " select * from (supervisao INNER JOIN estudante ON supervisao.estudante_id = estudante.id)  where docente_id = '$d'";
$resultz = mysqli_query($conn, $rez);


//$rez =  "SELECT titulo,status,data1,data2,nome
//                FROM supervisao INNER JOIN estudante ON supervisao.estudante_id = estudante.id
//                ORDER BY nome ASC";


//$rez = " select * from (supervisao INNER JOIN docente ON supervisao.docente_id = docente.id)
//INNER JOIN estudante ON supervisao.estudante_id = estudante.id";




$resultz = mysqli_query($conn, $rez);
//$resultadoz = mysqli_fetch_assoc($resultz);



//foreach($resultadoz as $df)

?>
<!DOCTYPE html>
<html>
<head>
<title>Docente</title>
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

<nav  class="navbar navbar-inverse navbar-fixed-top no-margin" role="navigation">
		<div class="container-fluid">
	        <a href="#" id="b" class="navbar-brand">
	            
	            <?php
	        
	               echo "Professor : ". $_SESSION['username'];
	        
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
	        		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
	        		<span class="label label-pill label-danger count" style="border-radius:10px;"></span> <div class="fa fa-bell" style="font-size:16px;"></div></a>
	        		<ul class="dropdown-menu"></ul>
                    </li>
	        		<li ><a href="#" data-toggle="modal" data-target="#myModal"><div class="icon-file"><i class="fa fa-user" aria-hidden="true"></i> Perfil</div></a></li>
	        		<li><a href="#"><div class="icon-file"><i class="fa fa-child" aria-hidden="true"></i> Estudantes</div></a></li>
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
	     <div class="page-header">
                <h3><span class="glyphicon glyphicon-briefcase"></span> Docente</h3>
        </div>
        
        
        <!------------------------------------------------------------------->
        <div class="container">
<!--          <h2>Dynamic Tabs</h2>-->

          <ul class="nav nav-tabs">
            <li class="active"><a href="#home">Dados da Supervisao</a></li>
            <li><a href="#menu1">Informa&ccedil;&otilde;es</a></li>
            <li><a href="#menu2">Eventos</a></li>
<!--            <li><a href="#menu3">Menu 3</a></li>-->
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h3>Supervis&otilde;es</h3>
              <p>Supervisoes Aprovadas</p>
              <div class="box box-success">
			  </div>
              
              
              
              
	
	<div class="container">
        <div class="col-md-12">
        	<div class="well"> 
                        <table class="table" id="listaDeTemas">
                            <thead>
                                <tr>
                                    <th class="success">T&iacute;tulo do Trabalho</th>
                                    <th class="success">Situa&ccedil;&atilde;o</th>
                                    <th class="success">Data de In&iacute;cio</th>
                                    <th class="success">Data de Entrega</th>
                                    <th class="success">Nome do Estudante</th>
<!--                                    <th class="success">Institui&ccedil;&atilde;o</th>-->
                                </tr>
                            </thead>
                               <tbody> 
                                   <?php while($rows_supervisao = mysqli_fetch_assoc($resultz)){ ?>
                                <tr>
                                    <td><?php echo $rows_supervisao['titulo']; ?></td>
                                    <td><?php echo $rows_supervisao['status']; ?></td>
                                    <td><?php echo $rows_supervisao['data1']; ?></td>
                                    <td><?php echo $rows_supervisao['data2']; ?></td>
                                    <td><?php echo $rows_supervisao['nome']; ?></td>
<!--                                    <td><?php echo $rows_supervisao['instituicao']; ?></td>-->
                                </tr>
                                
                                <!-----------------Modal------------>
                                <!-- Modal -->

                                
                                <!----------------Modal-------------->
                               <?php } ?> 
                            </tbody>
                        </table>   
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                  	
                  </div>
        </div>
             
             <!----------detalhes da supervisao-------------------->
             
             <div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box bg-aqua box box-warning">
				<span class="info-box-icon"><i class="fa fa-user"></i></span>

				<div class="info-box-content">
				  <span class="info-box-text">Detalhes</span>
				  <span class="info-box-number">41,410</span>

				  <div class="progress">
					<div class="progress-bar" style="width: 70%"></div>
				  </div>
					  <span class="progress-description">
						70% Increase in 30 Days
					  </span>
				</div>
				<!-- /.info-box-content -->
			  </div>
          <!-- /.info-box -->
        	</div>
              <!----------detalhes da supervisao-------------------->
              
               <!----------detalhes da supervisao-------------------->
             
             <div class="col-md-3 col-sm-6 col-xs-12">
			  <div class="info-box bg-aqua">
				<span class="info-box-icon"><i class="fa fa-user"></i></span>

				<div class="info-box-content">
				  <span class="info-box-text">Detalhes</span>
				  <span class="info-box-number">41,410</span>

				  <div class="progress">
					<div class="progress-bar" style="width: 70%"></div>
				  </div>
					  <span class="progress-description">
						70% Increase in 30 Days
					  </span>
				</div>
				<!-- /.info-box-content -->
			  </div>
          <!-- /.info-box -->
        	</div>
              <!----------detalhes da supervisao-------------------->
              
              
              
              
              
              
              
            </div>
            <div id="menu1" class="tab-pane fade">
              <h3>+ Informa&ccedil;&otilde;es</h3>
              <p>Mais Informa&ccedil;&otilde;es sobre o Docente</p>
              <div class="box box-info"> <!------------------------------------------>
            <div class="box-header with-border">
              <h3 class="box-title">Input Addon</h3>
            </div>
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <br>

              <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
              </div>

              <h4>With icons</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <br>

              <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
              </div>

              <h4>With checkbox and radio inputs</h4>

              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                    <input type="text" class="form-control">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->

              <h4>With buttons</h4>

              <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

              <div class="input-group input-group-lg">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
              </div>
              <!-- /input-group -->
              <p class="margin">Normal</p>

              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-danger">Action</button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
              </div>
              <!-- /input-group -->
              <p class="margin">Small <code>.input-group.input-group-sm</code></p>

              <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Go!</button>
                    </span>
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div> <!------------------------------------------>
            </div>
            <div id="menu2" class="tab-pane fade">
              <h3>Eventos</h3>
              <p>Informa&ccedil;&otilde;es sobre Eventos no DMI brevemente...</p>
              <div class="box box-warning">
			  </div>
            </div>
<!--
            <div id="menu3" class="tab-pane fade">
              <h3>Menu 3</h3>
              <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
-->
          </div>
        </div>
        <!------------------------------------------------------------------->
	 </div>
	
	
	
	
	
	
	
	
	<script>
    $(document).ready(function(){
        $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
    });
    </script>
	
	

</body>

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

</html>