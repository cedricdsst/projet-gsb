<?php  
session_start();

      //si la session est vide, redirection vers la page de login
      if(!isset($_SESSION['nom'])) 
       {
           header("Location:Login.php");  
       }

       

try {

    $connexion = new PDO('mysql:host=localhost;dbname=gsbv1;charset=utf8', 'root', '');

     // echo 'accès avec succès à  la base de données ';
} catch (Exception $e) {

    die('Erreur : ' . $e->getMessage());
} 






$sql1 = "SELECT * FROM praticien WHERE TYP_CODE = 'MH'";

$reponse1 = $connexion->query($sql1);

$mh=0;

while ($data1 = $reponse1->fetch()) {
             
    $mh++;
     
}

$sql2 = "SELECT * FROM praticien WHERE TYP_CODE = 'MV'";

$reponse2 = $connexion->query($sql2);

$mv=0;

while ($data2 = $reponse2->fetch()) {
             
    $mv++;

     
}

$sql3 = "SELECT * FROM praticien WHERE TYP_CODE = 'PH'";

$reponse3 = $connexion->query($sql3);

$ph=0;

while ($data3 = $reponse3->fetch()) {
             
    $ph++;
     
}

$sql4 = "SELECT * FROM praticien WHERE TYP_CODE = 'PO'";

$reponse4 = $connexion->query($sql4);

$po=0;

while ($data4 = $reponse4->fetch()) {
             
    $po++;
     
}

$sql5 = "SELECT * FROM praticien WHERE TYP_CODE = 'PS'";

$reponse5 = $connexion->query($sql5);

$ps=0;

while ($data5 = $reponse5->fetch()) {
             
    $ps++;
     
}






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_rapport.css">
    <script src="https://kit.fontawesome.com/edec10413c.js" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&display=swap" rel="stylesheet">
    <title>rapports</title>
</head>
<body>

<header>
    <div class="logo">
    <img src="logo.png" alt="">
    </div>
    <div class="id">
    <div class="id_name">
    <p>
    <?php echo $_SESSION['prenom']; ?> <?php echo $_SESSION['nom']; ?>  
    </p>
    </div>
    <div class="id_photo">
    <img src="pp.jpg" alt="">
    </div>
    <a href="logout.php">  
    <i class="fas fa-sign-out-alt"></i> 
    </a>  

    </div>
</header>
<nav>
    <li>
    <!-- <a href="">planning</a> -->
    <a href="produit.php">produits</a>
    <a href="rapport.php">rapports</a>
    <a href="synthese.php">synthese</a>
    </li>
    
</nav>

<div id="container1"></div>

    <script type="text/javascript">



Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

Highcharts.chart('container1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Répartition des praticiens par type'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Share',
        data: [
            { name: 'Médecin Hospitalier', y: <?php echo $mh ; ?> },
            { name: 'Médecin de ville', y: <?php echo $mv ; ?>},
            { name: 'Pharemacien hospitalier', y: <?php echo $ph ; ?>},
            { name: "Pharemacie d'officine", y: <?php echo $po ; ?> },
            { name: 'Autre', y: <?php echo $ps ; ?> }
            
        ]
    }]
});



    </script>


</body>
</html>