<?php

include '../controler/init.php';

$output = '';

if(isset($_POST["query"])){
   $search = mysqli_real_escape_string($conn, $_POST["query"]);
   $query = " SELECT titulo,status,data1,data2,nome
              FROM supervisao INNER JOIN docente ON supervisao.docente_id = docente.id
              WHERE nome LIKE '%".$search."%'";  
    
  } 
  else{ 
      $query = "SELECT titulo,status,data1,data2,nome
                FROM supervisao INNER JOIN docente ON supervisao.docente_id = docente.id
                ORDER BY nome ASC";
    }


$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
   $output .= '<div class="table-responsive">
               <table class="table table bordered">
                  <tr>
                     <th>Nome Docente</th>
                     <th>Titulo do Trabalho</th>
                     <th>Data Inicio</th>
                     <th>Data Fim</th>
                     <th>Status</th>
                  </tr>';


   while($row = mysqli_fetch_array($result)){
    $output .= '<tr>
                  <td>'.$row["nome"].'</td>
                  <td>'.$row["titulo"].'</td>
                  <td>'.$row["data1"].'</td>
                  <td>'.$row["data2"].'</td>
                  <td>'.$row["status"].'</td>
               </tr>';
      

   }

    
  $nrsps='<h4>'. mysqli_num_rows($result).' supervisões</h4> </br>' ;
  echo $nrsps;
  echo $output;

}else{
 //$nrsps='<h4>'. mysqli_num_rows($result).' supervisões</h4> </br>' ;
 //echo  $nrsps;
 //echo ' Docente  <h4>'.  $search  .'</h4>  não tem nenhuma supervisão de momento';
  echo  ' Docente <b>'.($search) .'</b>   não tem nenhuma supervisão de momento';
  }

?>