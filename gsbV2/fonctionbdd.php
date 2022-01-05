<?php  

try {

    $connexion = new PDO('mysql:host=localhost;dbname=gsbv1;charset=utf8', 'root', '');

     // echo 'accès avec succès à  la base de données ';
} catch (Exception $e) {

    die('Erreur : ' . $e->getMessage());
} 


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
