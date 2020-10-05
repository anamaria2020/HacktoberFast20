<?php
	require_once '../controler/init.php';
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Perfil</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name=viewport content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/bootstrap3-wysihtml5.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="js/validate.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.responsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src= "js/bootbox.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
</head>


<body>

<nav  class="navbar navbar-inverse navbar-fixed-top no-margin" role="navigation">
		<div class="container-fluid">
	        <a href="#" id="b" class="navbar-brand"><span class="glyphicon glyphicon-education"></span>
	        
	        
	        
	        </a><!---------Admin Profile Here------------>
	        
	        <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">

				<span class="sr-only">navegacao</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<div class="collapse navbar-collapse navHeaderCollapse navbar-right" > 

	        	<ul id="menu" class="nav navbar-nav">
                    <li  role= "apresentation" class="active"><a href="admin.php"><div class="icon-file"><i class="fa fa-home" aria-hidden="true"></i> Home</div></a></li>
	        		<li><a href="adminPerfil.php"><div class="icon-file"><i class="fa fa-user" aria-hidden="true"></i> Perfil</div></a></li>
	        		<li><a href="admin.php"><div class="icon-file"><i class="fa fa-close" aria-hidden="true"></i> voltar</div></a></li>
	        	</ul>
	        	
			</div>

		</div>

	</nav>
	<!--fim do menu-->

	<br>
	<br>
	<br>
	<br>
	<br>

 <div class="container">
	 <h2 class="page-header">Perfil</h2>

      <div class="row">
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php
	        
	        echo "". $_SESSION['username'];
	        
            ?></h3>
              <h5 class="widget-user-desc">Administrador</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="img/user5-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        
        <div class="col-md-8">
        	<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-briefcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Competencias</span>
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
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Avalicao de Desempenho</span>
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
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-user-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Admin</span>
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
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Historico</span>
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
        <!-- /.col -->
      </div>
        </div>
        <!-- /.col -->
      </div>
      </div> <!------------------------------------------------------------------------------->
      <!-- /.row -->
      <!--<div class="container">
     	<div class="col-md-3">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Dados Pessoais</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools --
            </div>
            <!-- /.box-header --
            <div class="box-body">
              The body of the box
            </div>
            <!-- /.box-body --
          </div>
          <!-- /.box --
        </div>
      </div>--><!---------------------------------------------------------------------->
      <div class="container">
      	<section class="content"> <!-------------------------------------------------------------------->
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <br>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
        	<div class="col-md-12">
            <form method="post" action="" role="form" data-toggle="validator" role="form">
            <div class="row"> 
                <div class="box box-success">
                    <div class="panel-heading">
                       <br> 
                        <center><h3 class="panel-title"><b>Atualiza&ccedil;&atilde;o do Perfil</b></h3></center>
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
              </form>
            </div>
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> <!-------------------------------------------------------------------->
      </div>
      
      
      <script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/fastclick.js"></script>
		<script src="js/app.js"></script>
		<script src="js/demo.js"></script>
		<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
		<script src="js/bootstrap3-wysihtml5.all.min.js"></script>
		<script>
		  $(function () {
			CKEDITOR.replace('editor1');
			$(".textarea").wysihtml5();
		  });
		</script>
      
</body>