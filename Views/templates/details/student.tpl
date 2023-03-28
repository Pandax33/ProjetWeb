<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héraclès | </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../../../Views/css/detail_s.css" type="text/css">
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

<div class="container" style="padding-bottom: 0; margin-bottom:50px ">
<h1>{$etudiant->Firstname_P}
<span>{$etudiant->Lastname_P}</span></h1>
    <p>email : {$etudiant->mail}</p>
    <p>{$pro->Name_Promotion}</p>
    <p style="color: rgb(210, 71, 71);"><a href="index.php?p=wishlist/monitor/{$etudiant->ID_P}">Wishlist de l'étudiant.e</a></p>
    {if $role == "admin" || $role == "teacher"}
      <a href="index.php?p=students/suppr/{$etudiant->ID_P}"><button class="btn btn-red">Supprimer l'offre</a></button>
      {/if}
    
      <p> <a href="index.php?p=students" style="color:black">Retour</a></p>
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