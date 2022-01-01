<!-- <?php
session_start();

function security($data): string
{
    $result = trim($data);
    $result = htmlspecialchars($result);
    return $result;

}

// if ($_POST) {
//     var_dump($_POST);
//     $name = trim($_POST);
//     $name = htmlspecialchars($name);
// }
// trim = fonction qui permet de supprimer espace a droite et gauche qui sert  à rien
?> -->
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">

    <title>Cours sur les fonction</title>
</head>

<body>
    <?php include("./partial/_navBar.php"); ?>
    <div class="container">
        <h1>Bienvenue dans le monde du code fonctionnel</h1>
        <p>oui, jusqu'à présent on était d'un le code procedural</p>
        <p>on rentre dans un nouveau paradigme (🤩 ou 🥴)</p>

        <p>bon, en bref, il va falloir traiter (sécuriser) un loooong formulaire:</p>
        <form method="POST">
            <div class="form-group">
                <label for="email">Adresse de courriel :</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="name">Nom :</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="firstName">Prénom :</label>
                <input type="text" class="form-control" name="firstName">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="adress">Adresse :</label>
                <input type="text" class="form-control" name="adress">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="postCode">Code Postal :</label>
                <input type="text" class="form-control" name="postCode">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="city">Ville :</label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="country">Pays :</label>
                <input type="text" class="form-control" name="country">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="phone">Télephone :</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
    <script src="/js/bootstrap.js"></script>
</body>

</html>