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
        // TO Do
        $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $alphabetTab = str_split($alphabet);
        $doubleAlphabetTab = array_merge($alphabetTab, $alphabetTab);
        $sizeAlphabet = count($alphabetTab);

        for ($i = 0; $i < $sizeAlphabet; $i++) {
            for ($j = 0; $j < $sizeAlphabet; $j++) {
                $line = $alphabetTab[$i];
                $column = $alphabetTab[$j];
                $vigenere[$line][$column] = $doubleAlphabetTab[$i + $j];
            }
        }
        // var_dump($vigenere);



        ?>
        <h5>2- encode le message "APPRENDRE PHP EST UNE CHOSE FORMIDABLE" avec la clé "BACKEND"</h5>
        <?php
        $message = "APPRENDRE PHP EST UNE CHOSE FORMIDABLE";
        $key = "BACKEND";
        // TO DO
        // encode message

        $messageTab = str_split($message);
        $keyTab = str_split($key);
        $keySize = count($keyTab);

        $keyCounter = 0;
        foreach ($messageTab as $pointer => $letterToEncode) {
            $positonKeyLetter = $keyCounter % $keySize;
            $keyLetter = $keyTab[$positonKeyLetter];
            if ($letterToEncode != " ") {
                $encodedMessage[] = $vigenere[$letterToEncode][$keyLetter];
            } else {
                $encodedMessage[] = "";
            }
            $keyCounter++;
        }
        $cryptedMessage = implode($encodedMessage);
        ?>
        <p>le message est: <?php echo $message; ?></p>
        <p>la clé est: <?php echo $key ?></p>
        <p>le résultat est: <?php echo $cryptedMessage; ?></p>
        <h5>3- decoder le message "TWA PEE WM TESLH WL LSLVNMRJ" avec la clé "VIGENERE"</h5>
        <?php
        //  decode message
        $encodedMessage = "TWA PEE WM TESLH WL LSLVNMRJ";
        $key4decode = "VIGENERE";
        $encodedMessageTab = str_split($encodedMessage);
        $key4decodeTab = str_split($key4decode);
        $key4decodeSize = count($key4decodeTab);

        $keyCounter = 0;
        foreach ($encodedMessageTab as $pointer => $letterToDecode) {
            $positonkeyLetter = $keyCounter % $key4decodeSize;
            $keyLetter = $key4decodeTab[$positonkeyLetter];
            if ($letterToDecode != " ") {
                for ($i = 0; $i < $sizeAlphabet; $i++) {
                    $lineToDecode = $alphabetTab[$i];
                    if ($vigenere[$lineToDecode][$keyLetter] == $letterToDecode) {
                        $decryptedMessage[] = $lineToDecode;
                    }
                }
                // $encodedMessage[] = $vigenere[$letterToDecode][$keyLetter];
            } else {
                $decryptedMessage[] = " ";
            }
            $keyCounter++;
        }
        $decodedMessage = implode($decryptedMessage);

        ?>
        <p>le message chiffré est: <?php echo $encodedMessage; ?></p>
        <p>la clé est: <?php echo $key4decode ?></p>
        <p>le résultat est: <?php echo $decodedMessage; ?></p>




    </div>
    <script src="/js/bootstrap.js"></script>
</body>

</html>