<?php  
include_once "pdoConnect.php";


$connexion = pdo();   


$sql="SELECT COUNT(DISTINCT TYP_CODE) as TYP_CODE FROM praticien";

$reponse = $connexion->query($sql);

if ($reponse->rowCount() > 0) {
  
  while($row = $reponse->fetch(PDO::FETCH_ASSOC)) {
    $arr=array(

        'name'=>$row['TYP_CODE'],
        'data'=>array_map('intval', explode(',', $row['TYP_CODE']))
    );

    $series_array[]= $arr;

  }
  return json_encode ($series_array) ;
} 

?>
