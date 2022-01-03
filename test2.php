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


// $tab = ["1", "2", "3", "4", "5"];
// array_splice($tab, 2, 1);
// array_splice($tab1, 4, 1);
// array_slice($tab1, 4, 1);

// $output = array_splice($tab, 2, 1);
// $output = array_slice($tab, 2, 1);
// var_dump($output);
// var_dump($tab);
// pour table de vigenere
$alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
// $alphabet = "ABC";
$alphabetTab = str_split($alphabet);
$doubleAlphabetTab = array_merge($alphabetTab, $alphabetTab);
// var_dump($doubleAlphabetTab);
// count = permet de compter nbre de vlrs ds 1 tblo !
$sizeAlphabet = count($alphabetTab);

for ($i =0; $i < $sizeAlphabet; $i++) {
    for($j = 0; $j < $sizeAlphabet; $j++) {
        $line = $alphabetTab[$i];
        $column = $alphabetTab[$j];
        $vigenere[$line][$column] = $doubleAlphabetTab[$i + $j];
    }
}
var_dump($vigenere);
// pour tester il faut fonction de test ou operateur de comparaison
//  on va user if
// $a = 1;
// $b = "12";
// $a = [];
// $b = "12";

// tester s'ils sont identiques
// $testAnswer = $a == $b;
// if ($a < $b){
//     echo "la valeur de \$a est de : $a <br>"  ;  
//     echo "la valeur de \$b est de : $b <br>"  ;  
// }
// if (!$c){
//     echo "la valeur de \$a est de : $a <br>"  ;  
//     echo "la valeur de \$b est de : $b <br>"  ;  
// }
// var_dump($testAnswer);

// **** FONCTION IF ELSEIF ELSE **** //

// $name ="Nys" ;
// $option ="admin" ;
// if($name == "Nys") {
//     echo "bonjour $name, bienvenue sur ton site <br>";
// } else {
//     echo "bonjour à vous, bienvenue sur le site <br>";
// }

// $name ="Nyser" ;
// $role ="user" ;

// if($name == "Nys") {
//     echo "bonjour $name, bienvenue sur ton site <br>";
// } elseif($role =="user") {
//     echo "bonjour mr l'admin, bienvenue sur ton site <br>";
// } else {
//     echo "bonjour à vous, bienvenue sur ce site <br>";
// }

// $name ="admin" ;
// $role ="admin" ;


// php- ternaire et fusion null

// $machin = 0;
// $variable = $machin ? 10 : 1;
// var_dump($variable);

// $machin = null;
// $machin = "coucou";
// echo $machin ?? "il n'ya rien";

// if (isset($machin)){
//     echo $machin;
// } else {
//     echo "il ya rien à afficher";
// }
// echo $machin ?? "il y rien a afficher"

// *** php : fonction for *** //

// $colors = ["bleu", "vert", "rouge", "marron", "orange", "jaune", "blanc", "noir","violet","turquoise"];
// $colors[] ="rose" ;
// echo "<ul>";
// for ($i = 0 ; $i < count($colors); $i++){
//     echo "<li>couleur " . $i + 1 . " : ". $colors[$i]. "</li>";
// }

// echo"</ul>";

// echo "******************<br>";

// faire boucle for et initialiser c'est important à 0;
// for ($i = 0; $i < 10; $i++) {
//     // $i = $i + 1 ;
//     // $i += 3;
//     // $i++;
//     // echo "valeur de \i : $i <br>";
// }

// pour connaitre le nom d'élément ds un tableau on fait count
// 
$colors = ["bleu", "vert", "rouge", "marron", "orange", "jaune", "blanc", "noir","violet","turquoise"];

for ($i = 0 ; $i < count($colors); $i++){
    $colorsTab["couleur $i"]  = $colors[$i];
}
//$colors as $color egal à = $value
echo "<ul>";
// foreach($colors as $color => $value){
//     echo "couleur" . $color + 1 . ":" . $value . "<br>";
foreach($colorsTab as $key => $value){
    echo "$key: $value<br>";
}
// var_dump($colorsTab);
// echo "<ul>";
// echo "<li> couleur " . $i + 1 . " : " . $colors[$i]. " </li>";
// echo"</li>";

?>






=====================================================================



      </pre>
    </div>

    <script src="/js/bootstrap.js"></script>
</body>
</html>