<?php 
	//criar conexao
	$conn = mysqli_connect("localhost", "root", "", "dmi3");

	if(!$conn){
	    die("Falha na Conexao: " . mysqli_connect_error());
	}

	$resposta = 0;

	$Id = $_POST["Id"];

	$result_supervisao = "select status from supervisao where id = $Id";
	$resultado_supervisao = mysqli_query($conn, $result_supervisao);
	
	if(!empty($result_supervisao))
	{		
		$linha = mysqli_fetch_array($resultado_supervisao);
		$estado = $linha["status"];

		if($estado == "aprovado")
		{
			$resposta = 1;
			echo json_encode($resposta);
		}		
		else
		{			
			$valor = "aprovado";
			$result_supervisao = "update supervisao set status = '$valor' where id = $Id";
			$resultado_supervisao = mysqli_query($conn, $result_supervisao);
			
			$resposta = 2;				
			echo json_encode($resposta);			
		}	
	}	
 ?>