<?php  
include_once "pdoConnect.php";
session_start();
//si la session est vide, redirection vers la page de login
if(!isset($_SESSION['nom'])) 
{
    header("Location:index.php");  
}


$connexion = pdo();   


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



$sql6 = "SELECT * FROM rapport WHERE produit = 'TRIMYCINE'";

$reponse6 = $connexion->query($sql6);

$trimy=0;

while ($data6 = $reponse6->fetch()) {
             
    $trimy++;
     
}



$sql7 = "SELECT * FROM rapport WHERE produit = 'INSECTIL'";

$reponse7 = $connexion->query($sql7);

$insect=0;

while ($data7 = $reponse7->fetch()) {
             
    $insect++;
     
}


$sql8 = "SELECT * FROM rapport WHERE produit = 'NORMADOR'";

$reponse8 = $connexion->query($sql8);

$norma=0;

while ($data8 = $reponse8->fetch()) {
             
    $norma++;
     
}



$sql9 = "SELECT * FROM rapport WHERE produit = 'JOVENIL'";

$reponse9 = $connexion->query($sql9);

$jov=0;

while ($data9 = $reponse9->fetch()) {
             
    $jov++;
     
}



$sql10 = "SELECT * FROM rapport WHERE produit = 'AMOXAR'";

$reponse10 = $connexion->query($sql10);

$amo=0;

while ($data10 = $reponse10->fetch()) {
             
    $amo++;
     
}


$sql11 = "SELECT * FROM rapport WHERE produit = 'BIVALIC'";

$reponse11 = $connexion->query($sql11);

$biva=0;

while ($data11 = $reponse11->fetch()) {
             
    $biva++;
     
}


$sql12 = "SELECT * FROM rapport WHERE produit = 'TROXADET'";

$reponse12 = $connexion->query($sql12);

$trox=0;

while ($data12 = $reponse12->fetch()) {
             
    $trox++;
     
}


$sql13 = "SELECT * FROM rapport WHERE produit = 'EQUILAR'";

$reponse13 = $connexion->query($sql13);

$equi=0;

while ($data13 = $reponse13->fetch()) {
             
    $equi++;
     
}



$sql14 = "SELECT * FROM rapport WHERE motif = 'Rappel'";

$reponse14 = $connexion->query($sql14);

$rapp=0;

while ($data14 = $reponse14->fetch()) {
             
    $rapp++;
     
}


$sql15 = "SELECT * FROM rapport WHERE motif = 'Présentation de nouveaux produits'";

$reponse15 = $connexion->query($sql15);

$pres=0;

while ($data15 = $reponse15->fetch()) {
             
    $pres++;
     
}


$sql16 = "SELECT * FROM rapport WHERE motif = 'changement téléphone'";

$reponse16 = $connexion->query($sql16);

$tel=0;

while ($data16 = $reponse16->fetch()) {
             
    $tel++;
     
}


$sql17 = "SELECT * FROM rapport WHERE motif = 'Autre'";

$reponse17 = $connexion->query($sql17);

$autre=0;

while ($data17 = $reponse17->fetch()) {
             
    $autre++;
     
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
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
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
    <a href="admin_produit.php">produits</a>
    <a href="admin_rapport.php">rapports</a>
    <a href="admin_synthese.php">synthese</a>
    </li>
    
</nav>


<div class="inline">

<div id="container1" class="inline2">


    <script type="text/javascript">



let piesize = 265;
let chartwidth = 650;


const iw = window.innerWidth ;

if (iw<=1600 && iw>1440) {

    piesize = 265;
    chartwidth = 540;
}


if (iw<=1440 && iw>1340) {

piesize = 265;
chartwidth = 500;
}





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
        type: 'pie',
        width:chartwidth
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
            size:piesize,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                connectorColor: 'silver',
                style: {
          textOverflow: 'clip',
        }
               
            }
            

        }
    },
    credits: {
    enabled: false
  },

  navigation: {
            buttonOptions: {
                enabled: false
            }
        },


    series: [{
        name: 'Part',
        data: [
            { name: 'Médecin Hospitalier', y: <?php echo $mh ; ?> },
            { name: 'Médecin de ville', y: <?php echo $mv ; ?>},
            { name: 'Pharmacien hospitalier', y: <?php echo $ph ; ?>},
            { name: "Pharmacie d'officine", y: <?php echo $po ; ?> },
            { name: 'Autre', y: <?php echo $ps ; ?> }
            
        ]
    }]
});



    </script>



</div>




<div id="container4" class="inline2">

<script type="text/javascript">

Highcharts.chart('container4', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        width:chartwidth
    },
    title: {
        text: 'Répartition des visites par motif'
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
            size:piesize,
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',

                style: {
          textOverflow: 'clip',
        }
            }
        }
    },
    credits: {
    enabled: false
  },

  navigation: {
            buttonOptions: {
                enabled: false
            }
        },

        series: [{
        name: 'Part',
        data: [
            { name: 'Rappel', y: <?php echo $rapp ; ?> },
            { name: 'Présentation nouveaux produits', y: <?php echo $pres ; ?>},
            { name: 'Changement de téléphone', y: <?php echo $tel ; ?>},
            { name: "Autre", y: <?php echo $autre ; ?> }
            
        ]
    }]
    
});


</script>

</div>

</div>

<div id="container3" class="container3">

<script type="text/javascript">

Highcharts.chart('container3', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Médicaments les plus vendus'
    },
    
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Nombre de prescriptions'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                
            }
        }
    },


    credits: {
    enabled: false
  },

  navigation: {
            buttonOptions: {
                enabled: false
            }
        },

    series: [
        {
            name: "Prescriptions",
            colorByPoint: true,
            data: [
                {
                    name: "Trimycine",
                    y: <?php echo $trimy ; ?>,
                },
                {
                    name: "Insectil",
                    y: <?php echo $insect ; ?>,
                    
                },
                {
                    name: "Normador",
                    y: <?php echo $norma ; ?>,
                   
                },
                {
                    name: "Jovenil",
                    y: <?php echo $jov ; ?>,
                    
                },
                {
                    name: "Amoxar",
                    y: <?php echo $amo ; ?>,
                    
                },
                {
                    name: "Bivalic",
                    y: <?php echo $biva ; ?>,
                    
                },
                {
                    name: "Troxade",
                    y: <?php echo $trox ; ?>,
                    
                },
                {
                    name: "Equilar",
                    y: <?php echo $equi ; ?>,
                   
                }
            ]
        }
    ],
    
});

</script>

</div>




</body>
</html>