<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- lien bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <title>Premier Exercice</title>
</head>


<body>
    <?php include("./partial/_navBar.php"); ?>
    <div class="container">
       <h1>Page de test Php</h1>

       <!-- <pre> -->
           <!-- resultats php  -->
    <!-- ========================================================= -->

            <?php
     // declaration de variable
            // chaine de caractère ou string
            // echo "php tests";
            // echo $texte;
            // $texte ="php tests";
            // var_dump($texte);
            //entier ou int
            // $truc =3;

            //Decimal ou float
            // $decimal = 3.14;

            // tableau ou array
            // $tab =[];
            // $tab[] = "hublot";
            // $tab[] = "omega";
            // int pour table
            // $tab[] = 3;
            // $tab[] = $texte;
            // $tab[] = $truc;
            // $tab[] = $decimal;
            // var_dump($tab);

            // on peut affecter les données d'un tableau ds un autre tableau
            // $tab = ["watch","price"];

            // les booléens
            // $check = "true";
            // $check = "false";
            // var_dump($check);

            // var_dump($texte,$truc,$decimal, $tab);
            
            

        // convention et règle de nomage
            // pour les variables en bases de données
            // $texte_du_machin = "écriture en snake case";
        
            // ecriture en pascal case
            // pour les noms de classes
            // $TexteDuMachin = "écriture en Pascal case ou upper camel case";
            
            //les variables en php, js, les noms des fichiers standard
            // $texteDuMachin = "ecriture en camel case";
            

        // php travailler avc des chaines
             
            //  $test ="test";

            //  inuppercase, permet de transformer le contenu d'une varible
            // en majuscule
            //  $testInuppercase = strtoupper($test);

            // var_dump($testInuppercase);
            // echo $testInuppercase;

        // Concaténation des chaines *** concatenation of string
           
        // joindre deux chaines
           // string of characters with single quotes
            // $name ='Hublot';
       
           // string of characters with double quotes
            // $firstName = "Audemars-Piguet";
           // echo $name;
            // echo $firstName;

        // Espace entre deux chaines
            //   $name ='Barry'; 
            //   $firstName = "Alpha-Madiou";

            //   concatenation
            // $fullName = $firstName . ' ' . $name;
            // echo $fullName;
            //   concatenation, 2eme possibilité
            // $fullName2 = "$firstName $name";
            // echo $fullName2;
            // 1ere ecriture(recommandée) des chaines de caractères
            // echo "la discipline de $fullName2 est remarquable";
            
            // autre ecriture avc les simples quotes
            // echo 'la discipline de '. ' ' . $fullName2 . ' est remarquable ! ';
            
            // ecriture avc les backslash
            // echo 'la discipline de  c\'est quelque chose de remarquable !';
            
            // ecriture avec 
            // echo "le dev. est destiné aux gens \"normaux\" attention aux \\"
                        
    // ?>
    <!-- ========================================================= -->
       <!-- </pre> -->

       <pre>
RESULTATS PHP
=========================================================

       <!-- les opérations mathématiques -->

        <?php

        // comme operateur nous avons : +, -, *, / et aussi le modulo (%)

            // $variable = 2;

            // $variable = $variable + 2;
            
            // echo $variable;

        // exemple modulo   
                // $variable = 13; modulo =1
                // $variable = 14; modulo =2
                // $variable = 14; 

                // modulo
                // $variable = $variable % 4;

                // Addition
                // $variable = 3 + (4 + 10);
                // echo $variable;

                
                // $variable = 15; 

                // $variable = 3 + (4 + 10);
                // incrementation

                // $variable = 15; 

                // variable increentation
                // $variable ++; 

                // variable de desincreentation
                // $variable --; 

                // pr incrementer de 3
                // $variable +=3; ===> $variable = $variable + 3;

                //  Pour multiplier 
                // $variable *=3; 

                // $variable = "15"; 
                // $variable ++;
                // $variable +=3;

// ========================================================
// php:14 ====> php les tableaux simples
// ========================================================
         
    // Ancienne ecriture tableau
    // $tab = array(
    //     "valeur1" , 
    //     "valeur2"
    // );

    // depuis php 7
    // tableau multidimensionnel
    // $actualArray = [
    //              "valeur1" , 
    //              "valeur2", 
    //              7, 
    //              3.14, 
    //              ["tab2 valeur1",4], 
    //              "Change the world",
    //             ];
                // mettre virgule à la fin c recommandé
                // pour recuperer valeur index sur [2]
                // var_dump($actualArray[1] );


// Tableau associatif avc clé en string et valeur

    // $associatArray =[
    //       'name' => "barry",
    //       'first Name' => "hermes",
    // ];
    //   var_dump($associatArray);
    //   var_dump($associatArray["first Name"]);
// ========================================================
// php:14 ====> php les tableaux suite
// ========================================================

// Pour ajouter un element ds un tableau

// $tab = [];

// $tab[] = "coucou";
// $tab[] = "hublot";
// $tab2 = [
//     'key1' => "rolex",
//     'key2' => "tudor",
// ];

// pour array push ds tab2 on obtient mm resultat, ancienne notation
// array_push($tab, $tab2);

// nouvelle notation
// $tab[] = $tab2;
// var_dump($tab);
// pour supprimer derniere occurence
// $valueTotreat = array_pop($tab);
// echo "======== </br>";
// var_dump($valueTotreat);


// ========================================================
// php:16 ====>  LES TABLEAUX MULTIDIMENSIONNELS
// ========================================================
// $tab = ["hello"];

$tab1 = [
    'tab1key1' => "tableau 1 valeur 1",
    'tab1key2' => "tableau 1 valeur 2",
    'tab1key3' => "tableau 1 valeur 3",
];

$tab2 = [
    'tab2key1' => "tableau 2 valeur 1",
    'tab2key2' => "tableau 2 valeur 2",
    // 'tab2key3' => "tableau 2 valeur 3",
    // test autre methode
    'tab2key3' => [
        'keyRo' => "tableau 2 valeur 3", 
        'keyTruc' => "je suis la",
    ],
];

$tab3 = [
    'tab3key1' => "tableau 3 valeur 1",
    'tab3key2' => "tableau 3 valeur 2",
    'tab3key3' => "tableau 3 valeur 3",
];
// On va mettre le tableau 1, 2, 3 dans le tableau
// $tab[]
$tab = [
    'tab1' => $tab1,
    'tab2' => $tab2,
    'tab3' => $tab3,
];
// var_dump($tab);
// Pour recuperer l'élément tableau2 valeur1
// var_dump($tab['tab2']['tab2key2']);

// Pour l'autre méthode avc keyRo et keytruc integré
// var_dump($tab);

// Pour acceder ds 'keyTruc' => "je suis la",a l'élément "je suis la" ligne :250
// var_dump($tab['tab2']['tab2key3']['keyTruc']);

// autre methode avc echo
// echo($tab['tab2']['tab2key3']['keyTruc']);
        ?>  
        
<!-- pour le l'ecrire ds le html -->
affichage d'une donnée précise: <?php echo $tab['tab2']['tab2key3']['keyTruc']; ?> 



=========================================================

       </pre>
       
    </div>

    <script src="/js/bootstrap.js"></script>
</body>
</html>