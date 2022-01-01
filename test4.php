


<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>

<body>
    
<h1>Inscription</h1>


<?php if ($errorMessage) : ?>
    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <h4 class="alert-heading">Attention!</h4>
        <p class="mb-0"><?php echo $errorMessage ?></p>
    </div>
<?php endif ?>

<form method="post">
    <div class="form-group">
        <label class="col-form-label" for="name">Nom : </label>
        <input type="text" class="form-control border border-3" name="name">
    </div>
    <div class="form-group">
        <label class="col-form-label" for="firstName">Prénom : </label>
        <input type="text" class="form-control border border-3" name="firstName">
    </div>
    <div class="form-group">
        <label class="col-form-label" for="email">Courriel : </label>
        <input type="email" class="form-control border border-3" name="email">
    </div>
    <div class="form-group">
        <label class="col-form-label" for="password">Mot de passe : </label>
        <input type="password" class="form-control border border-3" name="password">
    </div>
    <input class="btn btn-primary mb-4 mt-3" type="submit" value="S'inscrire">
</form>

<script src="/js/bootstrap.js"></script>

</body>

</html>