<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <title>Exercice 4</title>
</head>


<body>
<?php include("./partial/_navBar.php"); ?>
    <div class="container">
       <h1>Exercice 4</h1>
    
       <h5>1- créer une <a href="https://www.latoilescoute.net/table-de-vigenere" target="_blank">table de vigenère</a></h5>
       <?php
       // TO DO
       ?>
       <h5>2- encode le message "APPRENDRE PHP EST UNE CHOSE FORMIDABLE" avec la clé "BACKEND"</h5>
       <?php
       $message = "APPRENDRE PHP EST UNE CHOSE FORMIDABLE";
       $key = "BACKEND";
       // TO DO
       $cryptedMessage = $message;
       /**
      * astuce pour la rotation de la clé BACKEND
      * 14 / 7 -> 2
      * 15 / 7 -> 2 reste 1
      * pour récuperer le "reste 1" il faut faire un modulo
      * 15 % 7 -> 1
      * 176 % 7 -> 1 (25 x 7 et reste 1)
      */
      ?>
      <p>le message est: <?php echo $message; ?></p>
      <p>la clé est: <?php echo $key ?></p>
      <p>le résultat est: <?php echo $cryptedMessage; ?></p>
      <h5>3- decoder le message "TWA PEE WM TESLH WL LSLVNMRJ" avec la clé "VIGENERE"</h5>
      <?php
      $encodedMessage = "TWA PEE WM TESLH WL LSLVNMRJ";
      $key4decode = "VIGENERE";
      // TO DO
      $decodedMessage = $encodedMessage;
      ?>
      <p>le message chiffré est: <?php echo $encodedMessage; ?></p>
      <p>la clé est: <?php echo $key4decode ?></p>
      <p>le résultat est: <?php echo $decodedMessage; ?></p>



    
    </div>

    <script src="/bootstrap.js"></script>
</body>
</html>