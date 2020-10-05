<?php

session_start();

require_once '../controler/init.php';


$userid = $_SESSION['iduser'];




$result_estudantes = "SELECT titulo, status, docente_id, estudante_id, kaa FROM  (SELECT titulo, status, docente_id, estudante_id, curso_id as cur FROM supervisao
  LEFT JOIN estudante ON supervisao.estudante_id = estudante.id ) Sup
  LEFT JOIN (SELECT curso_id as Kaa FROM dircurso WHERE user_id = $userid) Su
  ON Sup.cur = Su.kaa WHERE Su.kaa IS NOT NULL AND status = 'aprovado'";


$resultado_supervisao = mysqli_query($conn, $result_estudantes);


//$conn = mysqli_connect("localhost", "root", "", "dmi3");
$sub_query = "
   SELECT docente_id, count(*) as nr FROM supervisao 
   GROUP BY docente_id 
   ORDER BY id ASC";


$sub_query2 = "
   SELECT nome, count(*) as nr FROM supervisao 
   INNER JOIN docente ON supervisao.docente_id = docente.id where status = 'aprovado'
   GROUP BY nome 
   ORDER BY nome ASC";

$result = mysqli_query($conn, $sub_query2);
$data = array();
while($row = mysqli_fetch_array($result))
{
 $data[] = array(
  'label'  => $row["nome"],
  'value'  => $row["nr"]
 );
}
$data = json_encode($data);



?>
<!DOCTYPE html>
<html>
<head>
<title>Director</title>
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
	  
	  
	  
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" />
<!--      <link rel="stylesheet" href="css/morris.css">-->
<!--      <link rel="stylesheet" href="css/example.css">-->
<!--      <script src="js/example.js"></script>-->
<!--      <script src="js/morris.js"></script>-->
<!--      <script src="js/morris.min.js"></script>-->


</head>
<body>

<nav  class="navbar navbar-inverse navbar-fixed-top no-margin" role="navigation">
		<div class="container-fluid">
	        <a href="#" id="b" class="navbar-brand"><span class="glyphicon glyphicon-education"></span>
	        
	        <?php
	        
	        echo "Director : ". $_SESSION['username'];
	        
            ?>
	        
	        </a><!---------Admin Profile Here------------>
	        
	        <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">

				<span class="sr-only">navegacao</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>

			<div class="collapse navbar-collapse navHeaderCollapse navbar-right" > 

	        	<ul id="menu" class="nav navbar-nav">
                    <li  role= "apresentation" class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	        		<li><a href="#"><div class="icon-file"><i class="fa fa-envelope" aria-hidden="true"></i> Notificacao</div></a></li>
	        		<li><a href="#"><div class="icon-file"><i class="fa fa-user" aria-hidden="true"></i> Perfil</div></a></li>
	        		
	

	        		<li class="dropdown">
                            
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-education"></span><b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="#"><div class="icon-file"><i class="fa fa-exclamation" aria-hidden="true"></i> Info</div></a></li>
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
       <br>
<!--        <div class="page-header">-->
                <h3><div class="icon-file"><i class="fa fa-street-view" aria-hidden="true"></i> Diretor do Curso</div></h3>
<!--        </div>-->
        <div class="box box-success">
		</div>
        
        <div class="container">
<!--        	<h3><div class="icon-file"><i class="fa fa-quote-left" aria-hidden="true"></i> Temas aprovados <i class="fa fa-quote-right" aria-hidden="true"></i></div></h3>-->
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
                                   <?php while($rows_supervisao = mysqli_fetch_assoc($resultado_supervisao)){ ?>
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
                  
                  <div class="col-md-6">
                  	
                  </div>
        </div>
        
        
        <!-----------------------Conteudo------------------------------>
            <div class="page-header">
                <h3><div class="icon-file"><i class="fa fa-bar-chart" aria-hidden="true"></i> Estat&iacute;sticas</div></h3>
            </div>		
			<div class="container">
				<div class="container" style="width:900px;">
<!--						<div>XXXXXX</div>-->
			   	<div id="chart"></div>
			  </div>
			</div>
       		
       			
       		<div class="container">
       			<div class="container" style="width:990000px;">
       				<div id="chart2"></div>
       			</div>
       		</div>
        <!-----------------------Conteudo------------------------------>
	</div>
	
	



<script src="js/slid.js"></script>
</body>
</html>



<script>

$(document).ready(function(){
 
 var donut_chart = Morris.Donut({
     element: 'chart',
     data: <?php echo $data; ?>
    });
  
 $('#formulario').on('submit', function(event){
  event.preventDefault();
  var checked = $('input[name=nome]:checked', '#formulario').val();
	 
  if(checked == undefined)
  {
   alert("Selecione um Docente");
   return false;
  }
  else
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"grafico.php",
    method:"POST",
    data:form_data,
    dataType:"json",
    success:function(data)
    {
     $('#formulario')[0].reset();
     donut_chart.setData(data);
    }
   });
  }
 });
});

</script>

