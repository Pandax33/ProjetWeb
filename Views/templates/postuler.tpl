<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Candidater</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Views/css/postuler.css" type="text/css">
</head>

<body>
    <br><br>
    <div class="container">

            <h1>À deux clics du stage parfait 😊</h1>
                <h5 style="text-align: center;">Déposez un CV et une lettre de motivation pour candidater à l'offre:</h5>
                <p>{$offer->Entitled_O}
                <div class="button-group" style="text-align:center ;">

                <button class="btn btn-red"><input type="file" accept="image/*,.pdf"/></button>
                
                <button class="btn btn-orange"><input type="file" accept="image/*,.pdf"/></button>
                </div>
                <button type="submit" class="btn btn-primary" name="validate">Candidater !</button>
            <div class="forgot-password">
                <a href="index.php?p=offers/detail/{$offer->ID_O}">Je préfère postuler plus tard</a>
            </div>

    </div>
</body>

</html>