
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | {$entreprise->Name_E}</title>
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
    <img src="{$entreprise->LinkPicture}" alt="Logo de l'entreprise" style="width: 70%; height: 70%; object-fit: cover; margin-bottom: 50px">
    <h1>{$entreprise->Name_E}</h1>
    <h3 style="color: rgb(74, 74, 74)"><span> </span>{$entreprise->Activity_E}</h3>
    <p>{$entreprise->Description_E}</p>
    

    <!--Parcourir la liste req de l'objet $offer-->
    <p style="color:rgb(36, 36, 36)"> Localités :
    <br>
    <!-- verife si l'array $entreprise->loc existe-->
    {if isset($entreprise->loc)}
      {foreach $entreprise->loc as $localite}
      <span style="color:rgba(70, 70, 70, 0.688)"><a href="index.php?p=offers/ville/{$localite}">{$localite}</a></span>
      {/foreach}
    {else}
      <span style="color:rgba(70, 70, 70, 0.688)">Aucune localité</span>
    {/if}
    </p>

    <p style="margin-bottom: 0; color:rgb(37, 37, 37)">Etudiants déjà en stage chez {$entreprise->Name_E} : <span style="color:rgba(70, 70, 70, 0.688)">{$entreprise->Intership_E}</span></p>
    <p style="color:rgb(36, 36, 36)">Niveau de confiance: <span style="color:rgba(70, 70, 70, 0.555)"> {$entreprise->TrustRate_E} / 5</span></p>
    {if $role == "admin"}
      <a href="index.php?p=enterprises/suppr/{$entreprise->ID_E}"><button class="btn btn-red">Supprimer l'entreprise</a></button>
      {/if}
      <p> <a href="index.php?p=enterprises" style="color:black">Retour</a></p>
</div>

<p style="text-align: center;"><a href="index.php?p=offers/list/{$entreprise->ID_E}" >Consultez les offres de {$entreprise->Name_E}</a></p>
    <a href="index.php?p=offers/list/{$entreprise->ID_E}" class="back-b">Aller aux offres</a>
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







