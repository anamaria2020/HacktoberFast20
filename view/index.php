<?php

/*inicio de seccao*/
session_start(); 

?>


<!DOCTYPE html>
<html>
    <head>
       <title>Principal</title>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <script src="js/valid.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css">

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
        
        <script src="js/validate.js"></script>
        
    </head>
    <body>
        <nav  class="navbar navbar-inverse navbar-fixed-top no-margin" role="navigation">
            <div class="container-fluid">
                <a href="#" id="b" class="navbar-brand"><span class="glyphicon glyphicon-education"></span></a>

                <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">

                <span class="sr-only">navegacao</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

                </button>

                    <div class="collapse navbar-collapse navHeaderCollapse navbar-right" > 

                        <ul id="menu" class="nav navbar-nav">
                            <li  role= "apresentation" class="active"><a href="index.php"><div class="icon-file"><i class="fa fa-home" aria-hidden="true"></i> Home</div> </a></li>
                            <li><a href="regestudante.php"><div class="icon-file"><i class="fa fa-pencil" aria-hidden="true"></i> Registo</div></a></li>
                            <li ><a href="#" data-toggle="modal" data-target="#myModal"><div class="icon-file"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Login</div></a></li>



                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-education"></span><b class="caret"></b></a>

                                    <ul class="dropdown-menu">
<!--
                                        <li><a href="supervisor.php"><span class="glyphicon glyphicon-eye-open"></span> Supervisores</a></li>
                                        <li class="divider"></li>
-->
                                        <li><a href="#"><div class="icon-file"><i class="fa fa-envelope-o" aria-hidden="true"></i> Mensagem</div></a></li>
                                        <li class="divider"></li>

                                        <li><a href="logout.php"><div class="icon-file"><i class="fa fa-close" aria-hidden="true"></i> Sair</div></a></li>
                                    </ul>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
     
            <div class="jumbotron">
<!--                <div class="container">-->
<!--                    <div class="col-md-12">-->
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('img/photo1.png') center center;">
              <h1 class="widget-user-desc"> &nbsp; &nbsp; &nbsp; &nbsp; SisSuper</h1>
              <br>
            </div>
            
            
          </div>
          <!-- /.widget-user -->
<!--        </div>-->
<!--                </div>-->
            </div><!--fim do jumbotron-->

        <div class="container">
<!--            <div class="page-header">-->
            <h2>O que &eacute; a SisSuper?</h2>
<!--            </div>-->
            <div class="box box-success">
			</div>
            
<!--
            <div id="menu2" class="tab-pane fade">
              <h3>Eventos</h3>
              <p>Informa&ccedil;&otilde;es sobre Eventos no DMI brevemente...</p>
              
            </div>
-->
            
            
            <div class="col-md-12">
                <h3>SisSuper significa sistema de Supervis&atilde;o.</h3>
                <p>Este sistema tem como finalidade alocar supervisores aos estudantes finalcursos ministrados na faculadade de Ciencias, Departamento de MatematiInformatica da Universidade Eduardo Mondlane.</p>
                <h3>Como funciona?</h3>
                <p>Neste sistema o estudante faz o seu respectivo registo, sendo verificada a veracidade dos seus dados com as informacoes existentes na base de dados do SIGA.
                Apos verificar-se os dados o estudante ser&aacute; atribuido o previlegiopoder entrar no sistema podendo dirigir-se a tela de escolha de supervisor, oencontrar&aacute; as seguintes opcoes:</p>

                <ol>
                    <li>Baixar formulario de Compromisso</li>
                    <li>Procurar um Docente atraves da area de espacializacao</li>
                    <li>Obter mais informacoes sobre o Docente</li>
                    <li>Fazer um Upload dos seus relat&oacute;rios e enviar para o seu Supervisor</li>
                </ol>
                <br>
                <br>
            </div>
            
            
<!--            <div class="container">-->
            	 <!-----------------------------------------*******CAROSEL SLIDE DE IMAGENS********---------------------------------------------------------->
        <div class="container">
           <br>
           <br>
           <br>
           <br>
<!--            <div class="page-header">-->
            <h3>Veja alguns eventos do DMI</h3>
<!--            </div>-->
			<div class="box box-warning">
			</div>
<!--
            <div class="col-md-2">
            </div>
-->
<!--            <h2><span class="glyphicon glyphicon-heart-empty"></span> Gostos<img src="img/Good%20Quality.png" class="img-responsive"></h2>-->
            <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-------------------------------------- Indicators ---Bolinhas indicadoras no nr de Slide-------------------------------------------->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

            <!-------------------------------------- Wrapper for slides ----Imagens para Slide---------------------------------------->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/Web-Design-Wallpapers-1%20-%20Copy.gif" alt="...">
                <div class="carousel-caption">
                        <h3>Imagens</h3>
                        <p>SisSuper</p>
                </div>
            </div>
            <div class="item">
              <img src="img/skyline-buildings-new-york-skyscrapers-large.jpg" alt="...">
              <div class="carousel-caption">
                <h3>Imagens</h3>
                  <p>SisSuper</p>
              </div>
            </div>
                
            <div class="item">
              <img src="img/Sol.jpg" alt="...">
              <div class="carousel-caption">
                <h3>Imagens</h3>
                  <p>SisSuper</p>
              </div>
            </div>
            <div class="item">
              <img src="img/Spider17.png" alt="...">
              <div class="carousel-caption">
                <h3>Imagens</h3>
                  <p>SisSuper</p>
              </div>
            </div>
            
        </div>

            <!--------------------------------------------Controls----------------------------------------------->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
<!--
            <div class="col-md-2">
            </div>
-->
        </div>
        
        <!-----------------------------------------*******CAROSEL SLIDE DE IMAGENS********---------------------------------------------------------->
<!--            </div>-->
            
         <!-----------AQUI AQUI AQUI---------------->   
            
<!--            <div class="icon-file"><i class="fa fa-home" aria-hidden="true"></i></div>-->
            
          <!-----------AQUI AQUI AQUI---------------->   
            
            
<!--
                <div class="col-md-1">
                </div>
                <div class="col-md-4">
-->
            
            
            
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
                                        <p> N&atilde;o esta Registado? <a href="regestudante.php"> Registe-se </a></p>
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
            
            
            <!-----------------fim Autenticacao--Modal-------------->
            
            
            
    </div>        
            
            
            
                    

        <p class="text-center text-danger">
        <?php if(isset($_SESSION['loginErro'])){
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
        }

        ?>
        </p>
        <!-----------------Autenticacao----------->
      
<!--            </div>-->
        
     <!--------------Testando__________________________------------>
      <br>
      <br>
      <div class="container">
       <footer class="main-footer">
		<div class="pull-right hidden-xs">
		  <b>SisSuper</b> 2017
		</div>
		<strong>Copyright &copy; 2017 <a href="https://dmi3.000webhostapp.com">SisSuper</a>.</strong> Todos direitos reservados.
	  </footer>
       </div>
        <!--------------Testando__________________________------------>         
    </body>
</html>