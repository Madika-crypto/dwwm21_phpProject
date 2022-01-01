<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>deuxieme test</title>
</head>


<body>
<?php include("./partial/_navBar.php"); ?>
    <div class="container">


    <h1>Page de test2 Php</h1>



    <pre>

    
RESULTATS PHP
=====================================================================    




<?php

// $tab1 = ["moteur", "carotte", "haricot", "pomme de terre", "usine", "salade", "navet", "marteau"];


$tab = ["1", "2", "3", "4", "5"];
array_splice($tab, 2, 1);
// array_splice($tab1, 4, 1);
// array_slice($tab1, 4, 1);

// $output = array_splice($tab, 2, 1);
// $output = array_slice($tab, 2, 1);
// var_dump($output);
var_dump($tab);




?>
=====================================================================



      </pre>
    </div>

    <script src="/js/bootstrap.js"></script>
</body>
</html>