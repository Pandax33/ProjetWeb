<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Candidature envoyée !</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Views/css/login.css" type="text/css">
    <link rel="stylesheet" href="../../Views/css/footer.css">
</head>

<body>
    <br><br>
    <div class="container">

            <h1>Vous venez de candidater à l'offre:</h1>
                <h3>{$offer->Entitled_O}</h3>
                <h3><span style="color: rgb(30, 30, 30)">de </span>{$offer->ent}</h3>
                <p><span style="color: rgb(30, 30, 30)">Votre tuteur sera informé par mail de votre candidature. 📫</span></p>
            <div class="forgot-password">
                <a href="index.php?p=offers">Retour à la page d'offres</a>

            </div>

    </div>
</body>

</html>