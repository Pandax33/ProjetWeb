<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Modification Entreprise</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Views/css/login.css" type="text/css">
    <link rel="stylesheet" href="../../Views/css/footer.css">
    <link rel="stylesheet" href="../../../Views/css/detail_e.css">
    <link rel="icon" type="image/x-icon" href="../../Views/css/images/LogoH.png">
</head>

<body>
    <br><br>
    <div class="container">

        <h1>Vous notez l'entreprise {$enterprise->Name_E}</h1>
        <p>Notez l'entreprise entre 1 et 5 ⭐, vous serez ensuite redirigés vers la page de l'entreprise

            
                <form method="POST" action="index.php?p=enterprises/note/{$enterprise->ID_E}" enctype="multipart/form-data">
                <fieldset class="rating" style="display:flex;flex-direction:row-reverse;justify-content: space-evenly;">
                    <input type="radio" id="star5" name="rating" value="5"><label for="star5">☆</label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4">☆</label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3">☆</label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2">☆</label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1">☆</label>
                </fieldset>
                <button type="submit" class="btn btn-primary" style="margin-top: 0px; border-radius: 50px;">Valider</button>
                </form>


        </p>
        <div class="forgot-password">
            <a href="index.php?p=enterprises/detail/{$enterprise->ID_E}">Retour à l'entreprise</a>
        </div>

    </div>

</body>

</html>