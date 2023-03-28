<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des offres</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Views/css/ListeOffre.css" type="text/css">
  <link rel="stylesheet" href="../../Views/css/navbar.css">
  <link rel="stylesheet" href="../../Views/css/footer.css">
  <link rel="icon" type="image/x-icon" href="../../Views/css/images/LogoH.png">
</head>
<body>
<!--Si le role dans la session = admin, alors inclure navbar_s.tpl, de meme pour les roles teacher et student-->
  {if $role == "admin"}
    {include file="navbar_a.tpl"}
  {elseif $role == "teacher"}
    {include file="navbar_t.tpl"}
  {elseif $role == "student"}
    {include file="navbar_s.tpl"}
  {/if}

  <div class="container"> 
<h1 style="text-align: center;">Oups! Vous n'avez pas accès à cette page.</h1>
<a href="http://localhost/public/index.php?p=accueil" class="btn back-b">Retour à l'accueil</a>
   
  </div>
  {include file="footer.tpl"}
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