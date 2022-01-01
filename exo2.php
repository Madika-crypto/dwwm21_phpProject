<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/bootstrap.css">

    <title>Exercice 2</title>
</head>


<body>
    <?php include("./partial/_navBar.php"); ?>
        <div class="container">
          <h1>Exercice 2</h1>   
             <h3>Décoder des messages</h3> 
             <p>les messages à décoder</p>
        </div>

        <?php 

              $message1 = "O@sn9sirppa@#?ia'jgtvryko1";
              $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsyO*b9+mw@x1vj";
              $message3 = "aopi?sgnirts@#?sedhtg+p91!";
        
        ?>

        <ul>
            <li>message 1 : <?php echo $message1; ?></li>
            <li>message 2 : <?php echo $message2; ?></li>
            <li>message 3 : <?php echo $message3; ?></li>
        </ul>

        <p>comment proceder?</p>

        <ol>
            <li>Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".</li>
            <li>Récupère ensuite la <a href="https://www.php.net/manual/fr/function.substr.php">sous-chaîne</a>
        de la longueur du chiffre-clé en commençant à partir du 6ème caractère.</li>
            <li>Remplace les chaînes '@#?' par un espace</li>
            <li>Pour finir, inverse la chaîne de caractère</li>
        </ol>

        <?php
        /**
         * pour la division, un code à tester:
         * $number = 50;
         * $result = 50 / 2;
         * echo $result;
         */

        // TO DO
        // 1) we look for the key
        $key = strlen($message1) / 2;
        // var_dump($key);
        // $key = strlen($message1) / 2;
        // echo $key; 

        // we look how the sub string work with key, 6 = 6eme ktere
        $subString = substr($message1, 6, $key);
        var_dump($subString);

        // we replace this '@#?' by space
        $messageWithSpaces = str_replace("@#?", " ", $subString);

        // we reverse the string
        // $decodedMessage1 =????($messageWithSpaces);

        // TO DO
       $decodedMessage2 = $message2;

        // TO DO
        $decodedMessage3 = $message3;
        ?>

        <p>résultats:</p>
        <p> message1: <?php echo $decodedMessage1 ?><br>
            message2: <?php echo $decodedMessage2 ?><br>
            message3: <?php echo $decodedMessage3 ?><br> 
        </p>


    <script src="/bootstrap.js"></script>
</body>

</html>