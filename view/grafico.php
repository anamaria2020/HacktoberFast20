<?php
//accao do grafico
$conn = mysqli_connect("localhost", "root", "", "dmi3");

if(isset($_POST["nome"]))
{
 $query = "
  INSERT INTO supervisao(nome) VALUES('".$_POST["nome"]."')
 ";
 mysqli_query($conn, $query);
 $sub_query = "
   SELECT docente_id, count(*) as nr FROM supervisao 
   GROUP BY docente_id 
   ORDER BY id ASC";
 $result = mysqli_query($conn, $sub_query);
 $data = array();
 while($row = mysqli_fetch_array($result))
 {
  $data[] = array(
   'label'  => $row["docente_id"],
   'value'  => $row["nr"]
  );
 }
 $data = json_encode($data);
 echo $data;
}
?>