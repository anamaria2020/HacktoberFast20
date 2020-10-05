<?php

session_start();

require_once '../controler/init.php';

$userid = $_SESSION['iduser'];


$result_supervisao = "select * from supervisao where status = 'aprovado'";

$resultado_supervisao = mysqli_query($conn, $result_supervisao);



//$conn = mysqli_connect("localhost", "root", "", "dmi33");
$sub_query = "
   SELECT docente_id, count(*) as nr FROM supervisao 
   GROUP BY docente_id 
   ORDER BY id ASC";

$sub_query2 = "
   SELECT nome, count(*) as nr FROM supervisao
   INNER JOIN docente ON supervisao.docente_id = docente.id
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
<title>Grafico Geral</title>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/validate.js"></script>
	
	
	<script src="js/Chart.bundle.js"></script>
	<script src="js/utils.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script src="js/validate.js"></script>
	
	
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.responsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
	  <script src="js/morris.js"></script>
	  <script src="js/morris.min.js"></script>
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
	  <script src="js/example.js"></script>
<!--	  <link rel="stylesheet" href="css/example.css">-->
	  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
	  <link rel="stylesheet" href="css/morris.css">
	  
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" />
<!--      <link rel="stylesheet" href="css/morris.css">-->
<!--      <link rel="stylesheet" href="css/example.css">-->
      <script src="js/example.js"></script>
      <script src="js/morris.js"></script>
      <script src="js/morris.min.js"></script>


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
                                <li><a href="#"><div class="icon-file"><i class="fa fa-bar-chart" aria-hidden="true"></i> Estatisticas</div></a></li>
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
	<div class="wrapper">
		<br>
		<br>
		<br>
		<br>
        <!-----------------------Conteudo------------------------------->
            <div class="page-header">
                <h3><div class="icon-file"><i class="fa fa-pie-chart" aria-hidden="true"></i> Estat&iacute;sticas</div></h3>
            </div>		
			<div class="container">
				<div class="container" style="width:1010px;">
<!--						<div>XX4XXXX</div>-->
			   	<div id="chart"></div>
			  </div>
			</div>
       		
       			
       		<div class="container">
       			<div class="container" style="width:1010px;">
       				<div id="chart2"><h3><div class="icon-file"><i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i> <h4>Nome do Docente</h4></div></h3></div>
       				<div id="chart2"><h3><div class="icon-file"><i class="fa fa-hashtag" aria-hidden="true"></i> <h4> N&uacute;mero de Supervis&otilde;es </h4></div></h3></div>
       			</div>
       		</div>
        <!-----------------------Conteudo------------------------------>
	</div>
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

