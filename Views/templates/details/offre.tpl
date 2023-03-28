
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | Connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../../../Views/css/detail_o.css" type="text/css">
    <link rel="stylesheet" href="../../../Views/css/navbar.css">
    <link rel="stylesheet" href="../../Views/css/footer.css">
</head>

<body>
{if $role == "admin"}
  {include file="navbar_a.tpl"}
{elseif $role == "teacher"}
  {include file="navbar_t.tpl"}
{elseif $role == "student"}
  {include file="navbar_s.tpl"}
{/if}

<div class="container" style="padding-bottom: 0; margin-bottom:50px">
    <h1>{$offer->Entitled_O}</h1>
    <h3 style="color: rgb(74, 74, 74)"><span>chez </span>{$offer->ent}</h3>
    <p>{$offer->Description}</p>
    <!--Parcourir la liste req de l'objet $offer-->
    <p style="color:rgb(36, 36, 36)"> Compétences requises :
    <br>
    {foreach $offer->req as $r}
      <span style="color: orange;">{$r} /</span>
    {/foreach}
    </p>

    <p style="margin-bottom: 0; color:rgb(37, 37, 37)">Durée du stage : <span style="color:rgba(70, 70, 70, 0.688)">{$offer->Duration_O}</span></p>
    <p style="margin-bottom: 0;color:rgb(36, 36, 36)">Gratification: <span style="color:rgba(70, 70, 70, 0.688)">{$offer->Salary_O}</span></p>
    <p style="margin-bottom: 0;color:rgb(36, 36, 36)">Lieu du stage: <span style="color:rgba(70, 70, 70, 0.688)"><a href="index.php?p=offers/ville/{$offer->Name}">{$offer->Name}</a></span></p>
    <p style="color:orange">{$offer->Space_O}<span style="color:rgb(36, 36, 36)"> place.s restante.s</span></p>
    {if $offer->wish == 0 && $role == "student"}
        <a href="index.php?p=offers/addWishlist/{$offer->ID_O}"><button class="btn btn-green">Ajouter à la Wishlist</a></button>
        <br>
      <a href="index.php?p=offers/postuler/{$offer->ID_O}"><button class="btn btn-post">Postuler</a></button>
      {elseif $offer->wish == 1 && $role == "student"}
        <a href="index.php?p=offers/removeWishlist/{$offer->ID_O}"><button class="btn btn-red">Retirer de la Wishlist</a></button>
        <br>
      <a href="index.php?p=offers/postuler/{$offer->ID_O}"><button class="btn btn-post">Postuler</a></button>
      {/if}
      {if $role == "admin" || $role == "teacher"}
      <a href="index.php?p=offers/suppr/{$offer->ID_O}"><button class="btn btn-red">Supprimer l'offre</a></button>
      {/if}
      <p> <a href="index.php?p=offers" style="color:black">Retour</a></p>
</div>

    </div>
    <script>document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const navList = document.getElementById('navList');
  
    hamburger.addEventListener('click', () => {
      navList.classList.toggle('nav-list-active');
    });
  });
  </script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  
</body>

</html>







