<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Views/css/login.css" type="text/css">
</head>

<body>
    <br><br>
    <div class="container">

            <h1>Problèmes de connexion ?</h1>
            <form method="POST" action="index.php?p=login/forgot2">
                <label for="exampleInputEmail1">Adresse email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
                <button type="submit" class="btn btn-primary" name="validate">Envoyer un mail de récupération</button>
            </form>
            <div class="forgot-password">
                <a href="index.php?p=login">Retour à la page de connexion</a>
            </div>

    </div>
</body>

</html>