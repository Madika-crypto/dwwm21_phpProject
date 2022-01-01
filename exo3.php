<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Exercice 3</title>
</head>


<body>
<?php include("./partial/_navBar.php"); ?>
    <div class="container">


    <h1>Exercice 3</h1>
        <?php
        $tab1 = ["moteur", "carotte", "haricot", "pomme de terre", "usine", "salade", "navet", "marteau"];
        // $tab1 = array("moteur", "carotte", "haricot", "pomme de terre", "usine", "salade", "navet", "marteau");
        ?>
        <p>voici les éléments du tableau de base:
        <ul>
            <li><?php echo $tab1[0]; ?></li>
            <li><?php echo $tab1[1]; ?></li>
            <li><?php echo $tab1[2]; ?></li>
            <li><?php echo $tab1[3]; ?></li>
            <li><?php echo $tab1[4]; ?></li>
            <li><?php echo $tab1[5]; ?></li>
            <li><?php echo $tab1[6]; ?></li>
            <li><?php echo $tab1[7]; ?></li>
        </ul>
        </p>
        <h3>Premier exercice:</h3>
        <p>retirer les 3 intrus: et afficher les valeurs</p>
        <p>résultat:
            <?php
        // $tab1 = array("moteur", "carotte", "haricot", "pomme de terre", "usine", "salade", "navet", "marteau");

            // TO DO

        //    delete the 5th element(usine)
        array_splice($tab1, 4,1);
        // var_dump($tab1);

        // delete the first element
        array_shift($tab1);
        // var_dump($tab1);

        // delete the last element
        array_pop($tab1);




            ?>
        <ul>
            <li><?php echo $tab1[0]; ?></li>
            <li><?php echo $tab1[1]; ?></li>
            <li><?php echo $tab1[2]; ?></li>
            <li><?php echo $tab1[3]; ?></li>
            <li><?php echo $tab1[4]; ?></li>
        </ul>
        </p>
        <h3>Second exercice:</h3>
        <p>transformaer la chaîne de caractère "bleu, vert, noir, rouge, jaune" en un tableau</p>
        <p>ajouter en première position du tableau la valeur "violet"</p>
        <p>résultat:
            <?php
            // TO DO
            $startstring = "bleu, vert, noir, rouge, jaune"; 
            // convert the string into array
            $tab2 = explode("," , $startstring );

            //insert an element of the beginnig of an array
            array_unshift($tab2, "violet") 
            ?>
            <ul>
                <li><?php echo $tab2[0]; 
                    ?></li>
                <li><?php echo $tab2[1]; 
                    ?></li>
                <li><?php echo $tab2[2]; 
                    ?></li>
                <li><?php echo $tab2[3]; 
                    ?></li>
                <li><?php echo $tab2[4]; 
                    ?></li>
                <li><?php echo $tab2[5]; 
                    ?></li>
            </ul> 
        </p>
    



    
    </div>

    <script src="/js/bootstrap.js"></script>
</body>
</html>