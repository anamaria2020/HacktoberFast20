<?php
$conn = mysqli_connect("localhost", "root", "", "dmi3");
$output = '';
$sql = " select * from docente where nome LIKE '%".$_POST["search"]."%' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	
	$output .= '<h4 align="center">Pesquisa...</h4>';
	$output .= '<div class="tavle-responsive">
				<table class="table table bordered">
				<tr>
					<th>Nome do Professor</th>
				</tr>';
	while($row = mysqli_fetch_array($result)){
		$output .= '
					<tr>
						<td>'.$row["nome"].'</td>
					</tr>';
	}
	
	echo $output;
	
}else{
	echo 'Informacao Indisponivel';
}

?>