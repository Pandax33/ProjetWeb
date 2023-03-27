
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../Views/css/detail_o.css" type="text/css">
</head>

<body>
<h3> Annonce </h3>
<article>
    <h1>{$offer->Entitled_O}</h1>
    <p>{$offer->Description}</p>
    <p>Durée du stage : {$offer->Duration_O}</p>
    {if $offer->wish == 0 && $role == "student"}
        <a href="index.php?p=offers/addWishlist/{$offer->ID_O}"><button class="btn btn-green">Ajouter à la Wishlist</a></button>
      {elseif $offer->wish == 1 && $role == "student"}
        <a href="index.php?p=offers/removeWishlist/{$offer->ID_O}"><button class="btn btn-red">Retirer de la Wishlist</a></button>
      {/if}
      <br>
      <a href="index.php?p=offers/postuler/{$offer->ID_O}"><button class="btn btn-post">Postuler</a></button>
</article>
    </div>
</body>

</html>







